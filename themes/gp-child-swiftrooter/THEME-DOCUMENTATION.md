# Professional Theme System Documentation

## Overview

The professional theme system provides 5 complete, production-ready color schemes for the moving company website. Each theme is designed for specific use cases and includes full color palettes, proper contrast ratios, and comprehensive component styling.

## Theme Architecture

### Core Components
- **Color Scales**: Each theme includes 50-900 color scales for primary, accent, and neutral colors
- **Semantic Tokens**: Consistent semantic color tokens across all themes
- **Component Styles**: Universal component styles that adapt to each theme
- **Dark Mode**: Each theme includes a complete dark mode variant

### Theme Structure
```css
:root[data-theme="theme-name"] {
  /* Core Brand Colors (50-900 scales) */
  --color-primary: #hex;
  --color-accent: #hex;
  --color-neutral: #hex;
  
  /* Semantic Tokens */
  --color-bg: #hex;
  --color-surface: #hex;
  --color-text: #hex;
  --color-text-muted: #hex;
  --color-border: #hex;
  
  /* Interactive States */
  --color-link: #hex;
  --color-link-hover: #hex;
  --color-focus: #hex;
  --color-focus-ring: shadow;
  
  /* Status Colors */
  --color-success: #hex;
  --color-warning: #hex;
  --color-error: #hex;
  --color-info: #hex;
  
  /* Shadows */
  --shadow-sm: shadow;
  --shadow-md: shadow;
  --shadow-lg: shadow;
  --shadow-xl: shadow;
}
```

## Theme 1: Pro Core (Default)

**Intent**: Professional, trustworthy, energetic
**Primary**: Teal (#11C5C6) - Trust & reliability
**Secondary**: Yellow (#FFD128) - Energy & urgency
**Neutral**: Black/Gray - Authority & stability

### Use Cases
- Professional service pages
- Pricing tables
- Trust-building content
- Main website theme

### Color Palette
- **Primary**: Teal scale (#11C5C6 base)
- **Accent**: Yellow scale (#FFD128 base)
- **Neutral**: Black/Gray scale
- **Success**: Green (#34A853)
- **Warning**: Yellow (#FBBC04)
- **Error**: Red (#EA4335)

### Dark Mode
- Background: #0A0A0A
- Surface: #121212
- Text: #F5F7FA
- Maintains teal/yellow brand colors

## Theme 2: Modern Teal

**Intent**: Clean, modern, sophisticated
**Primary**: Deeper teal (#0D9488) - More sophisticated
**Secondary**: Black/Gray - Sophisticated & clean
**Accent**: Warmer yellow (#F59E0B) - Strategic highlights

### Use Cases
- Corporate pages
- Service details
- Sophisticated content
- Executive presentations

### Color Palette
- **Primary**: Deeper teal scale (#0D9488 base)
- **Accent**: Warmer yellow scale (#F59E0B base)
- **Neutral**: Cooler gray scale
- **Success**: Green (#059669)
- **Warning**: Orange (#D97706)
- **Error**: Red (#DC2626)

### Dark Mode
- Background: #0F172A
- Surface: #1E293B
- Text: #F8FAFC
- Cooler, more sophisticated feel

## Theme 3: Industrial Yellow

**Intent**: Energetic, action-oriented, industrial
**Primary**: Industrial yellow (#EAB308) - High energy
**Secondary**: Black/Gray - Industrial & strong
**Accent**: Teal (#0D9488) - Safety & trust

### Use Cases
- Emergency services
- Urgent CTAs
- Action-oriented pages
- Industrial content

### Color Palette
- **Primary**: Industrial yellow scale (#EAB308 base)
- **Accent**: Teal scale (#0D9488 base)
- **Neutral**: Industrial gray scale
- **Success**: Green (#16A34A)
- **Warning**: Yellow (#CA8A04)
- **Error**: Red (#DC2626)

### Dark Mode
- Background: #18181B
- Surface: #27272A
- Text: #FAFAFA
- High contrast, industrial feel

## Theme 4: Executive Dark

**Intent**: Premium, sophisticated, trustworthy
**Primary**: Dark gray (#1F2937) - Authority
**Secondary**: Teal - Trust & reliability
**Accent**: Emerald (#10B981) - Success & trust

### Use Cases
- High-end clients
- Executive pages
- Premium services
- Sophisticated content

### Color Palette
- **Primary**: Dark gray scale (#1F2937 base)
- **Accent**: Emerald scale (#10B981 base)
- **Neutral**: Rich gray scale
- **Success**: Green (#059669)
- **Warning**: Orange (#D97706)
- **Error**: Red (#DC2626)

### Dark Mode
- Background: #0F172A
- Surface: #1E293B
- Text: #F8FAFC
- Premium, sophisticated feel

## Theme 5: Clean Contrast

**Intent**: High contrast, accessible, professional
**Primary**: Pure black (#000000) - Maximum contrast
**Secondary**: Teal - Trust & accessibility
**Accent**: High contrast blue (#0066CC) - Accessibility

### Use Cases
- Accessibility-focused pages
- Detailed information
- High contrast needs
- Professional documentation

### Color Palette
- **Primary**: Pure black scale (#000000 base)
- **Accent**: High contrast blue scale (#0066CC base)
- **Neutral**: High contrast gray scale
- **Success**: Green (#16A34A)
- **Warning**: Yellow (#CA8A04)
- **Error**: Red (#DC2626)

### Dark Mode
- Background: #000000
- Surface: #171717
- Text: #FFFFFF
- Maximum contrast, accessibility-focused

## Implementation

### JavaScript API
```javascript
// Set theme
setTheme('pro-core');

// Set mode
setMode('dark');

// Toggle mode
toggleMode();

// Get current theme
getCurrentTheme();

// Get current mode
getCurrentMode();

// Get available themes
getAvailableThemes();
```

### HTML Attributes
```html
<html data-theme="pro-core" data-mode="light">
```

### CSS Custom Properties
All themes use consistent CSS custom properties:
- `--color-primary`: Primary brand color
- `--color-accent`: Accent color
- `--color-bg`: Background color
- `--color-surface`: Surface color
- `--color-text`: Text color
- `--color-text-muted`: Muted text color
- `--color-border`: Border color
- `--color-link`: Link color
- `--color-focus`: Focus color
- `--shadow-sm/md/lg/xl`: Shadow scales

## Component Styling

### Buttons
- **Primary**: Uses `--color-primary` background
- **Secondary**: Uses `--color-accent` background
- **Ghost**: Transparent with `--color-primary` border
- **Hover**: Subtle transform and shadow effects

### Cards
- **Background**: Uses `--color-surface`
- **Border**: Uses `--color-border`
- **Shadow**: Uses `--shadow-sm` with hover `--shadow-md`
- **Hover**: Subtle transform and shadow effects

### Forms
- **Inputs**: Uses `--color-surface` background
- **Borders**: Uses `--color-border`
- **Focus**: Uses `--color-focus` with ring shadow
- **Labels**: Uses `--color-text`

### Status Messages
- **Success**: Uses `--color-success` with background/text variants
- **Warning**: Uses `--color-warning` with background/text variants
- **Error**: Uses `--color-error` with background/text variants
- **Info**: Uses `--color-info` with background/text variants

## Accessibility

### Contrast Ratios
All themes meet WCAG 2.2 AA standards:
- **Normal text**: 4.5:1 minimum
- **Large text**: 3:1 minimum
- **UI components**: 3:1 minimum

### Focus States
- **Focus ring**: Uses `--color-focus-ring` with 3px outline
- **Focus color**: Uses `--color-focus` for interactive elements
- **Keyboard navigation**: Full keyboard support

### Color Usage
- **Semantic colors**: Consistent semantic color usage
- **Status colors**: Clear status color differentiation
- **Link colors**: Clear link color differentiation
- **Text colors**: Proper text color hierarchy

## Browser Support

### CSS Custom Properties
- **Chrome**: 49+
- **Firefox**: 31+
- **Safari**: 9.1+
- **Edge**: 16+

### JavaScript Features
- **ES6 Classes**: Modern JavaScript class syntax
- **LocalStorage**: Theme persistence
- **Custom Events**: Theme change events
- **Media Queries**: System theme detection

## Performance

### CSS Size
- **Professional themes**: ~15KB minified
- **Component styles**: ~5KB minified
- **Total overhead**: ~20KB minified

### JavaScript Size
- **Theme switcher**: ~3KB minified
- **Total overhead**: ~3KB minified

### Loading Strategy
- **CSS**: Loaded with high priority
- **JavaScript**: Loaded with defer
- **Theme switching**: Instant (no page reload)

## Usage Examples

### Basic Theme Switching
```html
<select data-theme-select>
  <option value="pro-core">Pro Core</option>
  <option value="modern-teal">Modern Teal</option>
  <option value="industrial-yellow">Industrial Yellow</option>
  <option value="executive-dark">Executive Dark</option>
  <option value="clean-contrast">Clean Contrast</option>
</select>

<button data-mode-toggle>Toggle Dark Mode</button>
<button data-random-theme>Random Theme</button>
```

### Custom Theme Switching
```javascript
// Set specific theme and mode
setTheme('modern-teal', 'dark');

// Listen for theme changes
document.addEventListener('themechange', (e) => {
  console.log('Theme changed:', e.detail);
});
```

### CSS Customization
```css
/* Override specific colors */
:root[data-theme="pro-core"] {
  --color-primary: #custom-color;
}

/* Add custom components */
.my-custom-component {
  background: var(--color-surface);
  color: var(--color-text);
  border: 1px solid var(--color-border);
}
```

## Best Practices

### Theme Selection
1. **Pro Core**: Default theme for most content
2. **Modern Teal**: Use for sophisticated/corporate content
3. **Industrial Yellow**: Use for urgent/action-oriented content
4. **Executive Dark**: Use for premium/high-end content
5. **Clean Contrast**: Use for accessibility-focused content

### Color Usage
1. **Primary**: Use for main CTAs and brand elements
2. **Accent**: Use for secondary CTAs and highlights
3. **Neutral**: Use for text, borders, and backgrounds
4. **Status**: Use for success, warning, error, and info messages

### Accessibility
1. **Contrast**: Always check contrast ratios
2. **Focus**: Ensure focus states are visible
3. **Color**: Don't rely solely on color for information
4. **Testing**: Test with screen readers and keyboard navigation

### Performance
1. **CSS**: Use CSS custom properties efficiently
2. **JavaScript**: Minimize theme switching overhead
3. **Loading**: Load themes with appropriate priority
4. **Caching**: Leverage browser caching for theme files

## Troubleshooting

### Common Issues
1. **Theme not applying**: Check CSS loading order
2. **Colors not changing**: Verify CSS custom properties
3. **JavaScript errors**: Check browser console
4. **Accessibility issues**: Test with accessibility tools

### Debug Tools
1. **Browser DevTools**: Inspect CSS custom properties
2. **Accessibility Tools**: Test contrast and focus
3. **Performance Tools**: Monitor loading times
4. **Console Logs**: Check for JavaScript errors

## Future Enhancements

### Planned Features
1. **Theme Editor**: Visual theme customization
2. **Theme Presets**: Pre-built theme combinations
3. **Theme Export**: Export custom themes
4. **Theme Analytics**: Track theme usage

### Potential Improvements
1. **More Themes**: Additional color schemes
2. **Theme Variants**: More theme variations
3. **Advanced Controls**: More theme customization options
4. **Integration**: Better integration with design systems