/**
 * Tailwind CSS Configuration for Moving Company Theme System
 * Maps Tailwind colors to CSS custom properties for theme switching
 * 
 * Usage: npm install -D tailwindcss
 * Then use: npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
 */

module.exports = {
  content: [
    './**/*.php',
    './**/*.html',
    './**/*.js',
    './assets/**/*.css',
    './components/**/*.php',
    './page-templates/**/*.php'
  ],
  safelist: [
    // Theme attributes
    'data-theme-pro-core',
    'data-theme-modern-teal',
    'data-theme-industrial-yellow', 
    'data-theme-executive-dark',
    'data-theme-clean-contrast',
    'data-mode-light',
    'data-mode-dark',
    // Theme-specific classes
    'bg-primary',
    'bg-accent',
    'text-primary',
    'text-accent',
    'border-primary',
    'border-accent'
  ],
  theme: {
    extend: {
      colors: {
        // Map Tailwind colors to CSS custom properties
        primary: {
          50: 'hsl(var(--color-teal-50))',
          100: 'hsl(var(--color-teal-100))',
          200: 'hsl(var(--color-teal-200))',
          300: 'hsl(var(--color-teal-300))',
          400: 'hsl(var(--color-teal-400))',
          500: 'hsl(var(--color-teal-500))',
          600: 'hsl(var(--color-teal-600))',
          700: 'hsl(var(--color-teal-700))',
          800: 'hsl(var(--color-teal-800))',
          900: 'hsl(var(--color-teal-900))',
          DEFAULT: 'hsl(var(--color-primary))'
        },
        accent: {
          50: 'hsl(var(--color-yellow-50))',
          100: 'hsl(var(--color-yellow-100))',
          200: 'hsl(var(--color-yellow-200))',
          300: 'hsl(var(--color-yellow-300))',
          400: 'hsl(var(--color-yellow-400))',
          500: 'hsl(var(--color-yellow-500))',
          600: 'hsl(var(--color-yellow-600))',
          700: 'hsl(var(--color-yellow-700))',
          800: 'hsl(var(--color-yellow-800))',
          900: 'hsl(var(--color-yellow-900))',
          DEFAULT: 'hsl(var(--color-accent))'
        },
        neutral: {
          50: 'hsl(var(--color-black-50))',
          100: 'hsl(var(--color-black-100))',
          200: 'hsl(var(--color-black-200))',
          300: 'hsl(var(--color-black-300))',
          400: 'hsl(var(--color-black-400))',
          500: 'hsl(var(--color-black-500))',
          600: 'hsl(var(--color-black-600))',
          700: 'hsl(var(--color-black-700))',
          800: 'hsl(var(--color-black-800))',
          900: 'hsl(var(--color-black-900))',
          DEFAULT: 'hsl(var(--color-neutral))'
        },
        // Semantic colors
        background: 'hsl(var(--color-bg))',
        surface: 'hsl(var(--color-surface))',
        'surface-elevated': 'hsl(var(--color-surface-elevated))',
        foreground: 'hsl(var(--color-text))',
        muted: 'hsl(var(--color-text-muted))',
        'muted-foreground': 'hsl(var(--color-text-muted))',
        border: 'hsl(var(--color-border))',
        'border-strong': 'hsl(var(--color-border-strong))',
        // Status colors
        success: 'hsl(var(--color-success))',
        'success-bg': 'hsl(var(--color-success-bg))',
        'success-text': 'hsl(var(--color-success-text))',
        warning: 'hsl(var(--color-warning))',
        'warning-bg': 'hsl(var(--color-warning-bg))',
        'warning-text': 'hsl(var(--color-warning-text))',
        error: 'hsl(var(--color-error))',
        'error-bg': 'hsl(var(--color-error-bg))',
        'error-text': 'hsl(var(--color-error-text))',
        info: 'hsl(var(--color-info))',
        'info-bg': 'hsl(var(--color-info-bg))',
        'info-text': 'hsl(var(--color-info-text))'
      },
      fontFamily: {
        sans: ['var(--font-sans)', 'system-ui', 'sans-serif']
      },
      fontSize: {
        '900': 'var(--fs-900)',
        '800': 'var(--fs-800)',
        '700': 'var(--fs-700)',
        '600': 'var(--fs-600)',
        '500': 'var(--fs-500)',
        '400': 'var(--fs-400)'
      },
      spacing: {
        '2xs': 'var(--space-2xs)',
        'xs': 'var(--space-xs)',
        'sm': 'var(--space-sm)',
        'md': 'var(--space-md)',
        'lg': 'var(--space-lg)',
        'xl': 'var(--space-xl)',
        '2xl': 'var(--space-2xl)',
        '3xl': 'var(--space-3xl)'
      },
      borderRadius: {
        'sm': 'var(--radius-sm)',
        'md': 'var(--radius-md)',
        'lg': 'var(--radius-lg)'
      },
      boxShadow: {
        'sm': 'var(--shadow-sm)',
        'md': 'var(--shadow-md)',
        'lg': 'var(--shadow-lg)',
        'xl': 'var(--shadow-xl)'
      },
      ringColor: {
        focus: 'hsl(var(--color-focus))'
      },
      ringOffsetColor: {
        focus: 'hsl(var(--color-focus))'
      }
    }
  },
  plugins: [
    // Custom plugin for theme-aware utilities
    function({ addUtilities, theme }) {
      const newUtilities = {
        '.theme-transition': {
          transition: 'background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease'
        },
        '.focus-ring': {
          '&:focus-visible': {
            outline: 'none',
            'box-shadow': 'var(--color-focus-ring)',
            'border-radius': '0.25rem'
          }
        },
        '.status-success': {
          'background-color': 'hsl(var(--color-success-bg))',
          'color': 'hsl(var(--color-success-text))',
          'border-color': 'hsl(var(--color-success))'
        },
        '.status-warning': {
          'background-color': 'hsl(var(--color-warning-bg))',
          'color': 'hsl(var(--color-warning-text))',
          'border-color': 'hsl(var(--color-warning))'
        },
        '.status-error': {
          'background-color': 'hsl(var(--color-error-bg))',
          'color': 'hsl(var(--color-error-text))',
          'border-color': 'hsl(var(--color-error))'
        },
        '.status-info': {
          'background-color': 'hsl(var(--color-info-bg))',
          'color': 'hsl(var(--color-info-text))',
          'border-color': 'hsl(var(--color-info))'
        }
      }
      
      addUtilities(newUtilities)
    }
  ]
}