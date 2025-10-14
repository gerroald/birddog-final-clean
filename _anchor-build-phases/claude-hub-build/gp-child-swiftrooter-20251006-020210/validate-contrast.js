/**
 * WCAG Contrast Validation Script for Moving Company Theme System
 * Validates all theme color combinations against WCAG 2.2 AA/AAA standards
 * 
 * Usage: node validate-contrast.js
 * Output: Generates contrast-report.md with detailed analysis
 */

const fs = require('fs');
const path = require('path');

// Color conversion utilities
function hexToRgb(hex) {
  const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;
}

function rgbToLuminance(r, g, b) {
  const [rs, gs, bs] = [r, g, b].map(c => {
    c = c / 255;
    return c <= 0.03928 ? c / 12.92 : Math.pow((c + 0.055) / 1.055, 2.4);
  });
  return 0.2126 * rs + 0.7152 * gs + 0.0722 * bs;
}

function getContrastRatio(color1, color2) {
  const rgb1 = hexToRgb(color1);
  const rgb2 = hexToRgb(color2);
  
  if (!rgb1 || !rgb2) return 0;
  
  const lum1 = rgbToLuminance(rgb1.r, rgb1.g, rgb1.b);
  const lum2 = rgbToLuminance(rgb2.r, rgb2.g, rgb2.b);
  
  const brightest = Math.max(lum1, lum2);
  const darkest = Math.min(lum1, lum2);
  
  return (brightest + 0.05) / (darkest + 0.05);
}

function getContrastLevel(ratio) {
  if (ratio >= 7) return 'AAA';
  if (ratio >= 4.5) return 'AA';
  if (ratio >= 3) return 'AA Large';
  return 'Fail';
}

// Theme color definitions
const themes = {
  'pro-core': {
    light: {
      bg: '#FFFFFF',
      surface: '#F8F9FA',
      text: '#202124',
      textMuted: '#5F6368',
      primary: '#11C5C6',
      accent: '#FFD128',
      success: '#34A853',
      warning: '#FBBC04',
      error: '#EA4335'
    },
    dark: {
      bg: '#0A0A0A',
      surface: '#121212',
      text: '#F5F7FA',
      textMuted: '#B9C1CC',
      primary: '#11C5C6',
      accent: '#FFD128',
      success: '#34A853',
      warning: '#FBBC04',
      error: '#EA4335'
    }
  },
  'modern-teal': {
    light: {
      bg: '#FFFFFF',
      surface: '#F8FAFC',
      text: '#0F172A',
      textMuted: '#64748B',
      primary: '#0D9488',
      accent: '#F59E0B',
      success: '#059669',
      warning: '#D97706',
      error: '#DC2626'
    },
    dark: {
      bg: '#0F172A',
      surface: '#1E293B',
      text: '#F8FAFC',
      textMuted: '#94A3B8',
      primary: '#0D9488',
      accent: '#F59E0B',
      success: '#059669',
      warning: '#D97706',
      error: '#DC2626'
    }
  },
  'industrial-yellow': {
    light: {
      bg: '#FFFFFF',
      surface: '#FAFAFA',
      text: '#18181B',
      textMuted: '#71717A',
      primary: '#EAB308',
      accent: '#0D9488',
      success: '#16A34A',
      warning: '#CA8A04',
      error: '#DC2626'
    },
    dark: {
      bg: '#18181B',
      surface: '#27272A',
      text: '#FAFAFA',
      textMuted: '#A1A1AA',
      primary: '#EAB308',
      accent: '#0D9488',
      success: '#16A34A',
      warning: '#CA8A04',
      error: '#DC2626'
    }
  },
  'executive-dark': {
    light: {
      bg: '#FFFFFF',
      surface: '#F8FAFC',
      text: '#0F172A',
      textMuted: '#64748B',
      primary: '#1F2937',
      accent: '#10B981',
      success: '#059669',
      warning: '#D97706',
      error: '#DC2626'
    },
    dark: {
      bg: '#0F172A',
      surface: '#1E293B',
      text: '#F8FAFC',
      textMuted: '#94A3B8',
      primary: '#1F2937',
      accent: '#10B981',
      success: '#059669',
      warning: '#D97706',
      error: '#DC2626'
    }
  },
  'clean-contrast': {
    light: {
      bg: '#FFFFFF',
      surface: '#FFFFFF',
      text: '#000000',
      textMuted: '#525252',
      primary: '#000000',
      accent: '#0066CC',
      success: '#16A34A',
      warning: '#CA8A04',
      error: '#DC2626'
    },
    dark: {
      bg: '#000000',
      surface: '#171717',
      text: '#FFFFFF',
      textMuted: '#A3A3A3',
      primary: '#000000',
      accent: '#0066CC',
      success: '#16A34A',
      warning: '#CA8A04',
      error: '#DC2626'
    }
  }
};

// Test combinations for each theme
const testCombinations = [
  { name: 'Body text on background', fg: 'text', bg: 'bg' },
  { name: 'Muted text on background', fg: 'textMuted', bg: 'bg' },
  { name: 'Body text on surface', fg: 'text', bg: 'surface' },
  { name: 'Muted text on surface', fg: 'textMuted', bg: 'surface' },
  { name: 'Primary button text on primary background', fg: 'text', bg: 'primary' },
  { name: 'Accent button text on accent background', fg: 'text', bg: 'accent' },
  { name: 'Success text on success background', fg: 'text', bg: 'success' },
  { name: 'Warning text on warning background', fg: 'text', bg: 'warning' },
  { name: 'Error text on error background', fg: 'text', bg: 'error' },
  { name: 'Link text on background', fg: 'primary', bg: 'bg' },
  { name: 'Link text on surface', fg: 'primary', bg: 'surface' }
];

// Generate contrast report
function generateContrastReport() {
  let report = '# WCAG Contrast Validation Report\n\n';
  report += 'This report validates all theme color combinations against WCAG 2.2 AA/AAA standards.\n\n';
  report += '## Standards\n';
  report += '- **AA**: 4.5:1 for normal text, 3:1 for large text\n';
  report += '- **AAA**: 7:1 for normal text, 4.5:1 for large text\n\n';

  let overallResults = {
    total: 0,
    pass: 0,
    fail: 0,
    aaa: 0,
    aa: 0
  };

  Object.entries(themes).forEach(([themeName, modes]) => {
    report += `## ${themeName.replace('-', ' ').toUpperCase()}\n\n`;
    
    Object.entries(modes).forEach(([mode, colors]) => {
      report += `### ${mode.toUpperCase()} Mode\n\n`;
      report += '| Combination | Ratio | Level | Status |\n';
      report += '|-------------|-------|-------|--------|\n';
      
      testCombinations.forEach(combo => {
        const fgColor = colors[combo.fg];
        const bgColor = colors[combo.bg];
        
        if (fgColor && bgColor) {
          const ratio = getContrastRatio(fgColor, bgColor);
          const level = getContrastLevel(ratio);
          const status = level === 'Fail' ? '❌' : '✅';
          
          report += `| ${combo.name} | ${ratio.toFixed(2)}:1 | ${level} | ${status} |\n`;
          
          overallResults.total++;
          if (level !== 'Fail') {
            overallResults.pass++;
            if (level === 'AAA') overallResults.aaa++;
            if (level === 'AA') overallResults.aa++;
          } else {
            overallResults.fail++;
          }
        }
      });
      
      report += '\n';
    });
  });

  // Overall summary
  report += '## Overall Summary\n\n';
  report += `- **Total Tests**: ${overallResults.total}\n`;
  report += `- **Passed**: ${overallResults.pass} (${((overallResults.pass / overallResults.total) * 100).toFixed(1)}%)\n`;
  report += `- **Failed**: ${overallResults.fail} (${((overallResults.fail / overallResults.total) * 100).toFixed(1)}%)\n`;
  report += `- **AAA Level**: ${overallResults.aaa} (${((overallResults.aaa / overallResults.total) * 100).toFixed(1)}%)\n`;
  report += `- **AA Level**: ${overallResults.aa} (${((overallResults.aa / overallResults.total) * 100).toFixed(1)}%)\n\n`;

  // Recommendations
  report += '## Recommendations\n\n';
  if (overallResults.fail > 0) {
    report += '⚠️ **Issues Found**: Some color combinations fail WCAG standards.\n\n';
    report += '### Actions Required:\n';
    report += '1. Review failed combinations and adjust colors\n';
    report += '2. Consider using different color combinations for problematic pairs\n';
    report += '3. Test with actual content to ensure readability\n';
    report += '4. Consider providing alternative color schemes for accessibility\n\n';
  } else {
    report += '✅ **All Tests Passed**: All color combinations meet WCAG standards.\n\n';
  }

  report += '### Best Practices:\n';
  report += '- Use high contrast for critical UI elements (buttons, links, form fields)\n';
  report += '- Provide sufficient contrast for body text (minimum 4.5:1)\n';
  report += '- Test with real content and user feedback\n';
  report += '- Consider users with color vision deficiencies\n';
  report += '- Provide alternative themes for different accessibility needs\n\n';

  report += '---\n';
  report += `Generated on: ${new Date().toISOString()}\n`;
  report += `Theme System: Moving Company Professional Themes v1.0\n`;

  return report;
}

// Generate and save report
const report = generateContrastReport();
fs.writeFileSync('contrast-report.md', report);

console.log('✅ Contrast validation complete!');
console.log('📄 Report saved to: contrast-report.md');
console.log('\n📊 Summary:');
console.log(`- Total tests: ${Object.keys(themes).length * 2 * testCombinations.length}`);
console.log('- All themes validated against WCAG 2.2 AA/AAA standards');
console.log('- Check contrast-report.md for detailed results');