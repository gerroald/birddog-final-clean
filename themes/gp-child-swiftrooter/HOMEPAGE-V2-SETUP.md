# Homepage V2 Setup

## What I Built

✅ **New Homepage Template:** `/page-templates/page-home-v2.php`  
✅ **New CSS File:** `/assets/css/homepage-v2.css`  
✅ **Updated Midjourney illustrations** integrated

## What You Need To Do

### 1. Add CSS Enqueue to functions.php

Open `/wp-content/themes/gp-child-swiftrooter/functions.php` and find this section (around line 45):

```php
// Homepage (cleaned version)
    if (is_page_template('page-templates/page-home-CLEANED.php')) {
        wp_enqueue_style('sr-homepage', get_stylesheet_directory_uri().'/assets/css/homepage.css', ['sr-site'], '1.0.0');
    }
```

**Add these 5 lines RIGHT AFTER** the closing brace:

```php
    // Homepage V2 (visual redesign)
    if (is_page_template('page-templates/page-home-v2.php')) {
        wp_enqueue_style('sr-homepage-v2', get_stylesheet_directory_uri().'/assets/css/homepage-v2.css', ['sr-site'], '1.0.0');
    }
```

### 2. Create a WordPress Page

1. Go to **Pages → Add New**
2. Title it "Homepage V2"
3. Choose Template: **Homepage V2 — Visual Redesign**
4. Publish

### 3. Test It

Visit the new page and verify:
- Hero section has real truck background with teal overlay
- Illustrations show up in service cards
- Everything looks styled properly

## What Changed From V1

### Hero Section
- Real truck photo background (bird-dog-moving-van-branded.jpg)
- Teal gradient overlay for text readability
- Larger, bolder typography
- Better trust indicators (500+ moves, A+ rating, 4.9★)
- Form card has better shadow/depth

### Services Section
- Full-width illustrated scenes with descriptions
- Alternating layout (text left/right)
- Feature lists with checkmarks
- Better visual hierarchy

### Why Choose Us
- Dark teal background section
- 2x2 grid of benefits with icons
- Real truck photo on the side
- White text for contrast

### Areas & Other Sections
- Cleaner card layouts
- Better hover states
- Improved spacing throughout

## Troubleshooting

**If styles don't load:**
1. Check that you added the CSS enqueue code correctly
2. Hard refresh (Cmd+Shift+R)
3. Clear any caching plugins

**If images don't show:**
- Illustrations are in `/assets/img/` - make sure those Midjourney files are uploaded

---

Ready to test! Let me know if you hit any issues.
