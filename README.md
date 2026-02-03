=== Image Optimization Analyzer ===
Contributors: eshban (or your WordPress.org username if you have one)
Tags: image optimization, image analyzer, performance, seo, compression, webp, page speed
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Analyze your WordPress images for size, compression potential, format issues, and optimization recommendations to boost site speed and SEO.

== Description ==

**Image Optimization Analyzer** is a lightweight WordPress plugin that scans your media library and helps you identify images that are hurting your site's performance.

It provides:
- Detailed reports on image file sizes, dimensions, and formats
- Compression savings estimates (lossy & lossless)
- Detection of oversized, uncompressed, or non-modern-format images (JPEG, PNG → WebP/AVIF suggestions)
- Bulk analysis and per-image breakdown
- Easy-to-read dashboard widget and admin page
- No external API calls – everything runs on your server

Perfect for bloggers, e-commerce sites, photographers, and anyone who wants faster load times, better Core Web Vitals, and improved SEO without blindly compressing everything.

This is a custom / self-hosted plugin – no premium upsells, no watermarks, just clean analysis.

== Installation ==

1. Upload the `image-optimization-analyzer` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to **Tools → Image Optimization Analyzer** (or look for the new menu item) to start scanning
4. Wait for the analysis to complete – results appear in a clean report table

== Frequently Asked Questions ==

= Does this plugin actually compress/resize images? =

No – this is an **analyzer** only. It shows you problems and potential savings. Use it together with plugins like Smush, EWWW, ShortPixel, Imagify, or Optimole for actual optimization.

= Is it safe to run on large media libraries? =

Yes, but on sites with 10,000+ images it may take several minutes. It processes in batches and avoids timeouts where possible.

= Does it support WebP / AVIF detection? =

Yes – it checks if better modern formats could save space and flags images that would benefit from conversion.

= Will this slow down my site? =

No – analysis runs only when you manually trigger it in the admin area. No frontend impact.

= Can I export the report? =

Current version shows results in admin. CSV export is planned for future releases.

== Screenshots ==

1. Main analysis dashboard with summary statistics
2. Detailed per-image report table showing size, potential savings, and recommendations
3. Example of oversized image warning with format upgrade suggestion

== Changelog ==

= 1.0.0 =
* Initial release
* Media library scanner
* Basic image analysis (size, mime type, dimensions)
* Compression estimate logic
* Admin page and dashboard widget

== Upgrade Notice ==

= 1.0.0 =
First public version – enjoy!
