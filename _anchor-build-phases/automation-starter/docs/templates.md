# Templates

- `home.php`: Canonical blog index (Route A), uses the main Loop. Title from the "Posts page".
- `page-posts-hub.php`: Reusable hub page (Route B) with a custom WP_Query and clean pagination.
- `single.php`: Single post layout; includes `partials/related-posts.php` grid.

Usage:
1) Create a Page named "Blog", set it as Posts page in Settings → Reading.
2) Create hub Pages and select Template: Posts Hub (Custom Query).
