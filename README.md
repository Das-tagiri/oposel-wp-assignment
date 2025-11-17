# Toposel Custom Theme (Assignment)

This is a minimal WordPress theme created for the Toposel WordPress assignment (mobile homepage).

## What is included
- Template: `page-home.php` (use for the Home page)
- Template parts: announcement, hero, brands, new-arrivals
- A basic `functions.php` (enqueues assets + theme supports)
- Minimal CSS and JS in `assets/`
- README with setup steps below

## Recommended ACF fields
Create an ACF Field Group assigned to the Home page with these fields:
- announcement_text (Text)
- hero_image (Image) — set return format to Array or ID
- hero_heading (Text)
- hero_subheading (Text)
- hero_button_text (Text)
- hero_button_link (URL)
- brand_logos (Repeater)
    - brand_icon (Image)
- new_arrivals_title (Text)
- new_arrivals_category (Taxonomy: Product categories) — optional if using WooCommerce

## Setup steps (local)
1. Install WordPress (LocalWP / XAMPP / MAMP)
2. Place this `toposel-theme` folder into `wp-content/themes/`
3. Activate the theme in wp-admin → Appearance → Themes
4. Install & activate Advanced Custom Fields (ACF). For product listing, install WooCommerce if you want real products.
5. Create a page called "Home" and set its template to **Home Mobile**
6. Fill ACF fields via Edit Page → ACF fields
7. Add products (WooCommerce) or sample posts with featured images for New Arrivals
8. View site in mobile viewport (use browser devtools)

## Notes
- The theme is intentionally minimal and focused on the assignment requirements.
- Images handling in template parts supports ACF returning an Array, ID, or URL string.
- For real deployment, enhance accessibility, sanitization, and performance (image sizes, lazy-loading, caching).

