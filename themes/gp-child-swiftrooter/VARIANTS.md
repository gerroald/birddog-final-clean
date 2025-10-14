# Presentation Variants for Moving Company Website

## Overview

This document describes the 5 presentation variants for the moving company website, each offering a distinct visual approach while maintaining the same functionality and layout. All variants are swappable via the `data-style` attribute on the `<html>` element.

## Variant Architecture

### Implementation
```html
<html data-style="precision-pro">
```

### Available Variants
- `precision-pro` - Crisp, high-contrast, operational clarity
- `soft-industrial` - Robust, approachable, safety cues  
- `card-ledger` - Sectional clarity, quotes/pricing focus
- `bold-stripe` - Brand-forward, directional accents
- `airy-minimal` - Calm, trustworthy, booking-friendly

## Variant Details

### 1. Precision Pro
**Intent**: Crisp, high-contrast, operational clarity  
**Best for**: Professional service pages, pricing tables, operational dashboards

#### Visual Characteristics
- **Borders**: 1px hairlines with strong contrast
- **Shadows**: Minimal elevations (elev-1 to elev-4)
- **Focus**: Hard-edge 2px focus ring
- **Typography**: Tight tracking (-0.025em) for headings
- **Dividers**: Grid-aligned solid borders
- **Microinteractions**: 
  - Underline-from-center on links
  - Button press uses scale(0.985)
  - Card hover lift with translateY(-1px)

#### Moving Industry Rationale
- **Clarity**: High contrast ensures clear reading of pricing and service details
- **Professional**: Crisp borders convey precision and reliability
- **Operational**: Minimal distractions focus attention on essential information
- **Trust**: Clean, organized appearance builds confidence in service quality

#### Key Features
```css
:root[data-style="precision-pro"] {
  --presentation-border-width: 1px;
  --presentation-border-radius: 0.25rem;
  --focus-ring: 0 0 0 2px var(--color-focus);
  --font-tracking-tight: -0.025em;
}
```

### 2. Soft Industrial
**Intent**: Robust, approachable, safety cues  
**Best for**: Service pages, safety information, approachable branding

#### Visual Characteristics
- **Borders**: 2px softened with 0.75rem radius
- **Shadows**: Soft ambient with tinted key shadow
- **Focus**: Soft 3px ring with 20% opacity
- **Typography**: Humanist sans with relaxed line-height (1.7)
- **Dividers**: Soft separations with 40% opacity
- **Microinteractions**:
  - Gentle elevate-on-hover (translateY(-2px))
  - Ripple highlight for CTAs
  - Card hover with accent border color

#### Moving Industry Rationale
- **Safety**: Soft, rounded corners suggest safety and care
- **Approachable**: Gentle shadows and spacing feel welcoming
- **Reliability**: Robust borders convey strength and durability
- **Trust**: Humanist typography feels personal and trustworthy

#### Key Features
```css
:root[data-style="soft-industrial"] {
  --presentation-border-width: 2px;
  --presentation-border-radius: 0.75rem;
  --focus-ring: 0 0 0 3px rgba(17, 197, 198, 0.2);
  --font-leading-relaxed: 1.7;
}
```

### 3. Card Ledger
**Intent**: Sectional clarity, quotes/pricing focus  
**Best for**: Pricing pages, service comparisons, detailed quotes

#### Visual Characteristics
- **Borders**: Card outlines with subtle inner dividers
- **Shadows**: Layered elevation (elev-1 to elev-4) for card stacks
- **Focus**: Medium 3px focus ring
- **Typography**: Numeric tabular for prices, SF Mono font
- **Dividers**: Table-style rules with 60% opacity
- **Microinteractions**:
  - Row hover for tables
  - "Peek" animation for expandable quotes
  - Card hover with gradient top border

#### Moving Industry Rationale
- **Clarity**: Clear card separation makes pricing easy to compare
- **Professional**: Table-style dividers suggest organized, systematic approach
- **Trust**: Layered shadows create depth and hierarchy
- **Efficiency**: Numeric tabular fonts make pricing information scannable

#### Key Features
```css
:root[data-style="card-ledger"] {
  --presentation-border-width: 1px;
  --presentation-border-radius: 0.5rem;
  --focus-ring: 0 0 0 3px var(--color-focus);
  --font-mono: 'SF Mono', 'Monaco', monospace;
}
```

### 4. Bold Stripe
**Intent**: Brand-forward, directional accents  
**Best for**: Marketing pages, CTAs, brand-forward sections

#### Visual Characteristics
- **Borders**: 4px accent stripes for section headers
- **Shadows**: Directional shadow (y-axis) to imply movement
- **Focus**: Thick 4px focus ring
- **Typography**: Strong weight (700-800) for CTAs
- **Dividers**: Accent stripes with 100% opacity
- **Microinteractions**:
  - CTA slide underline in accent color
  - Navbar sticky shadow on scroll
  - Card hover with top accent border

#### Moving Industry Rationale
- **Energy**: Bold stripes convey movement and action
- **Brand**: Strong accent colors reinforce brand identity
- **Direction**: Directional shadows suggest forward movement
- **Conversion**: Bold CTAs encourage action and engagement

#### Key Features
```css
:root[data-style="bold-stripe"] {
  --presentation-border-width: 4px;
  --presentation-border-radius: 0.5rem;
  --focus-ring: 0 0 0 4px var(--color-focus);
  --font-weight-strong: 700;
  --font-weight-bold: 800;
}
```

### 5. Airy Minimal
**Intent**: Calm, trustworthy, booking-friendly  
**Best for**: Contact forms, booking pages, calm user experience

#### Visual Characteristics
- **Borders**: Ultra-light dividers (30% opacity)
- **Shadows**: Almost-flat with subtle focus glows
- **Focus**: Subtle glow with 15% opacity
- **Typography**: Clean geometric sans with generous sizes
- **Dividers**: Minimal separations with 20% opacity
- **Microinteractions**:
  - Fade+translate 2-4px reveals for cards using IO observer
  - Smooth transitions with longer durations
  - Gentle hover effects

#### Moving Industry Rationale
- **Calm**: Minimal design reduces stress during moving process
- **Trust**: Clean, uncluttered design builds confidence
- **Accessibility**: Generous spacing and sizing improve usability
- **Focus**: Minimal distractions help users complete forms and bookings

#### Key Features
```css
:root[data-style="airy-minimal"] {
  --presentation-border-width: 1px;
  --presentation-border-radius: 1rem;
  --presentation-border-opacity: 0.3;
  --focus-ring: 0 0 0 3px rgba(17, 197, 198, 0.15);
  --font-size-generous: 1.125rem;
}
```

## Microinteractions

### Button Interactions
- **Hover Lift**: `translateY(-1px)` to `translateY(-4px)` depending on variant
- **Active Press**: `scale(0.985)` to `scale(0.95)` for tactile feedback
- **Shadow Transitions**: Elevation changes on hover
- **Ripple Effect**: Soft industrial variant includes ripple animation

### Link Interactions
- **Underline Animation**: Width transition from 0 to 100%
- **Slide Animation**: Bold stripe variant uses slide effect
- **Color Transitions**: Smooth color changes on hover

### Card Interactions
- **Hover Lift**: Subtle elevation changes
- **Tilt Effect**: Airy minimal includes gentle tilt
- **Peek Animation**: Card ledger shows gradient top border
- **Glow Effect**: Subtle glow on hover for some variants

### Form Interactions
- **Focus States**: Visible focus rings with variant-specific styling
- **Input Glow**: Subtle glow on focus for airy minimal
- **Validation States**: Color-coded feedback for form validation

## Accessibility Features

### Focus Management
- **Visible Focus**: All interactive elements have visible focus indicators
- **Non-color Reliant**: Focus states don't rely solely on color
- **Consistent Styling**: Focus rings match variant design language

### Motion Preferences
```css
@media (prefers-reduced-motion: reduce) {
  :root[data-style] * {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
  }
}
```

### High Contrast Support
```css
@media (prefers-contrast: high) {
  :root[data-style] .c-card {
    border-width: 2px;
  }
}
```

## Performance Considerations

### GPU-Friendly Transforms
- **Transform Properties**: Uses `translateY`, `scale`, `rotate` for smooth animations
- **Opacity Changes**: Smooth color and opacity transitions
- **Avoid Layout Thrash**: No width/height changes during animations

### Animation Duration
- **Standard**: 200ms for most microinteractions
- **Reveal Animations**: 600ms for card reveals
- **Reduced Motion**: Respects user preferences

### Shadow Optimization
- **Blur Radius**: Capped at 24px for performance
- **Shadow Count**: Limited to essential shadows
- **Layered Approach**: Uses CSS custom properties for efficient updates

## Implementation Guide

### Basic Usage
```html
<html data-style="precision-pro">
```

### JavaScript API
```javascript
// Set variant
setStyleVariant('soft-industrial');

// Get current variant
getStyleVariant();

// Get available variants
getAvailableVariants();
```

### CSS Custom Properties
Each variant defines its own set of presentation tokens:
- `--presentation-border-width`
- `--presentation-border-radius`
- `--presentation-border-opacity`
- `--elev-1` to `--elev-4`
- `--focus-ring`
- `--font-tracking-*`
- `--font-leading-*`

### Utility Classes
Available utility classes for fine-tuning:
- `.hover-lift`, `.hover-scale`, `.hover-shadow`
- `.link-underline`, `.btn-press`, `.card-tilt`
- `.reveal-fade`, `.reveal-slide-left`, `.reveal-scale`
- `.elevation-1` to `.elevation-4`

## Browser Support

### CSS Features Used
- **CSS Custom Properties**: Chrome 49+, Firefox 31+, Safari 9.1+
- **CSS Grid**: Chrome 57+, Firefox 52+, Safari 10.1+
- **CSS Transforms**: Chrome 36+, Firefox 16+, Safari 9+
- **Intersection Observer**: Chrome 51+, Firefox 55+, Safari 12.1+

### Fallback Strategy
```css
/* Fallback for older browsers */
.c-button {
  background: #FFD128; /* Fallback */
  background: var(--color-accent-500); /* Modern browsers */
}
```

## Customization

### Adding New Variants
1. Define variant tokens in `:root[data-style="new-variant"]`
2. Add variant-specific component styles
3. Update JavaScript variant list
4. Test across all components

### Modifying Existing Variants
1. Adjust CSS custom properties
2. Update component-specific styles
3. Test microinteractions
4. Validate accessibility compliance

### Component-Specific Overrides
```css
:root[data-style="custom-variant"] .c-card {
  /* Custom card styling */
}

:root[data-style="custom-variant"] .c-button {
  /* Custom button styling */
}
```

## Troubleshooting

### Common Issues
1. **Variant Not Applying**: Check `data-style` attribute on `<html>`
2. **Microinteractions Not Working**: Verify JavaScript is loaded
3. **Focus States Not Visible**: Check focus ring definitions
4. **Performance Issues**: Reduce animation duration or complexity

### Debug Tools
```javascript
// Check current variant
console.log('Current variant:', getStyleVariant());

// Check available variants
console.log('Available variants:', getAvailableVariants());

// Inspect CSS variables
const root = document.documentElement;
const borderWidth = getComputedStyle(root).getPropertyValue('--presentation-border-width');
console.log('Border width:', borderWidth);
```

## Migration Notes

### From Existing Styles
1. **Audit Current Styles**: Identify hard-coded values
2. **Replace with Tokens**: Use CSS custom properties
3. **Test Variants**: Verify all variants work correctly
4. **Remove Old Code**: Clean up unused styles

### Rollback Strategy
To revert to original design:
1. Remove `data-style` attribute from `<html>`
2. Remove presentation variants CSS imports
3. Remove style switcher JavaScript
4. Test original functionality

## Best Practices

### Design Principles
- **Consistency**: Maintain visual consistency within each variant
- **Accessibility**: Ensure all variants meet WCAG 2.2 AA standards
- **Performance**: Optimize for smooth 60fps animations
- **Usability**: Test with real users for each variant

### Development Guidelines
- **Semantic Tokens**: Use meaningful token names
- **Progressive Enhancement**: Ensure functionality without JavaScript
- **Mobile First**: Design for mobile, enhance for desktop
- **Cross-Browser**: Test across major browsers

### Maintenance
- **Documentation**: Keep variant descriptions up to date
- **Testing**: Regular accessibility and performance audits
- **Updates**: Version control for variant changes
- **Feedback**: Collect user feedback on variant preferences