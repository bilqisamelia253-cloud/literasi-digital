=== WiseTech Core ===
Contributors: wisetechlist
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A fast, lightweight WordPress theme for technology blogs, tutorials, reviews, and news, with clean typography and block editor support.

== Description ==

WiseTech Core is a lightweight, content-focused WordPress theme for technology websites. It is designed to stay fast, simple to operate, and easy to maintain.

Key features:
* No page builder dependency.
* No external font requests.
* No icon library.
* No front-end jQuery dependency.
* Semantic HTML and keyboard-friendly navigation.
* Native WordPress block editor support with theme.json.
* Responsive article cards and readable long-form typography.
* Sticky posts can be featured on the posts page using the native WordPress Sticky option.
* Includes optional WordPress starter content with demo posts, pages, menus, and bundled local demo images for fresh installs.
* Uses the native WordPress Featured Image for homepage featured posts and article cards; no content-related custom metaboxes.
* Includes header branding display options such as Logo only, Logo + Site Title, and text-only modes.
* Includes an optional sticky header that can be turned off in the Customizer.
* Includes optional search forms for the header and footer, with a compact icon mode for the header.
* Lets you set a separate homepage headline and subheadline without changing the Site Title and Tagline.
* SEO metadata, canonical URLs, Open Graph, and schema are intentionally left to dedicated plugins to avoid duplication and lock-in.

WiseTech Core does not collect analytics, send site data to WiseTechList, or make background requests to WiseTechList.

== Installation ==

1. In WordPress, go to Appearance > Themes > Add New > Upload Theme.
2. Upload the WiseTech Core ZIP file and activate the theme.
3. Set a logo under Appearance > Customize > Site Identity if desired.
4. Choose the header branding display mode under Appearance > Customize > Site Identity.
5. Create and assign a Primary Menu and optional Footer Menu.
6. On a fresh WordPress install, open Appearance > Customize to preview and publish the optional starter content.
7. Add Featured Images to posts for the best card layout.
8. Optionally mark one post as Sticky to feature it at the top of the posts page.
9. Optionally enable search in the header or footer from the Customizer. The header search can use either a full field or a search icon.

== Frequently Asked Questions ==

= Does the theme include demo content? =

Yes. WiseTech Core includes optional WordPress starter content for fresh installs. The demo posts, pages, menus, and images can be edited or removed at any time.

= Can I show only the logo in the header? =

Yes. In Appearance > Customize > Site Identity, use the Header branding display setting to choose Logo only, Logo + Site Title, Site Title + Tagline, or Site Title only.

= Can I disable the sticky header? =

Yes. Go to Appearance > Customize > Site Identity and turn off Sticky header. The header will then scroll normally with the page.

= Can I use a different homepage headline from the Site Title? =

Yes. Go to Appearance > Customize > Homepage Intro. You can enter a separate Homepage headline and Homepage subheadline. If either field is left blank, the theme falls back to the Site Title or Tagline. You can also hide the homepage intro section.


= Can I show a search form in the header or footer? =

Yes. Go to Appearance > Customize > Site Identity to enable the header search, then choose either Search field or Search icon. The icon opens an accessible search panel when clicked. Go to Appearance > Customize > Footer to enable the footer search. You can enable either location or both.

= Does WiseTech Core include SEO settings? =

No. The theme focuses on presentation, semantic markup, and performance-friendly output. Use a dedicated SEO plugin for metadata, canonical URLs, Open Graph, XML sitemaps, and schema.

= Does the theme require a page builder? =

No. WiseTech Core works with the WordPress block editor and does not require Elementor or another page builder.

= Does the theme load Google Fonts or a front-end JavaScript framework? =

No. It uses the visitor's system fonts and a small navigation script on the front end.

= Can I remove or edit the footer credit? =

Yes. Go to Appearance > Customize > Footer. You can hide the credit, change the text and label, change the URL, or leave the URL blank to display plain text. The default WiseTechList link uses rel="nofollow".

== Changelog ==

= 1.0.11 =
* Replaced theme-specific featured hero image metabox with the native WordPress Featured Image for featured posts.
* Removed the content-related hero image URL field, post meta save callbacks, and admin media uploader script.
* Updated bundled starter content and screenshot with neutral placeholder text and non-promotional sample imagery.
* Preserved typography, post-card layout, Customizer appearance options, and navigation behavior.


= 1.0.10 =
* Removed redundant search landmark roles around WordPress core search forms so get_search_form() remains the single filterable search landmark.
* Added editor styling support for closer block-editor/front-end typography parity.
* Added standard WordPress caption, alignment, sticky-post, gallery-caption, and post-author content classes.

= 1.0.9 =
* Fixed WordPress core search-form label sizing so the input and Search button stay exactly the same height on desktop, tablet, and mobile.
* Unified the header icon-search layout across all viewport sizes instead of using separate mobile control sizing.
* Normalized native search input and button appearance while preserving a single focus indicator around the complete search control.

= 1.0.8 =
* Fix mobile header search controls so the input and submit button render at exactly the same height across mobile browsers.
* Move the mobile search focus indicator to the complete search control instead of the text field.

= 1.0.7 =
* Added mobile-specific normalization for native search input and button rendering so both controls stay exactly the same height on mobile browsers.
* Reset browser-specific search/button appearance inside the mobile header search panel.

= 1.0.6 =
* Rebuilt header search controls as a single grouped control so the search field and Search button have exactly the same visual height.
* Moved the keyboard focus indicator to the complete search group, preventing the input focus ring from appearing taller than the button.

= 1.0.5 =
* Fixed single-post mobile content gutters so article text aligns consistently with the post header and featured image.
* Harmonized mobile summary and article body typography for a more consistent reading experience.
* Fixed header search field and Search button height, border, and alignment in icon-panel mode.

= 1.0.4 =
* Added a Header search style option with Search field and Search icon modes.
* Added an accessible search toggle with keyboard Escape support and click-outside closing.
* Added responsive styling for the compact search panel.

= 1.0.3 =
* Added optional search forms for the header and footer.
* Improved responsive layout for search controls in header and footer locations.
* Updated the search form markup so multiple forms on one page use unique field IDs.

= 1.0.2 =
* Added a Sticky header option under Appearance > Customize > Site Identity.
* Sticky behavior remains enabled by default for backwards compatibility.

= 1.0.1 =
* Added Footer Customizer controls to show, hide, rename, or change the optional theme credit link.
* Kept the default author credit qualified with rel="nofollow".

= 1.0.0 =
* Initial public release.
* Added responsive technology-blog homepage and article layouts.
* Added optional WordPress starter content with bundled local demo images.
* Featured post layout uses native Featured Images.
* Added header branding display options.
* Added separate homepage headline and subheadline controls.
* Added block editor support with theme.json.

== Upgrade Notice ==

= 1.0.11 =
The featured post now uses its standard WordPress Featured Image. If you previously configured a separate custom hero image, set that image as the post's Featured Image to keep it visible. The old custom metadata is not deleted.


= 1.0.7 =
Normalizes mobile header search controls so the field and Search button render at matching heights.

= 1.0.6 =
Fixes header search field and button height alignment, including the focused state.

= 1.0.5 =
Improves mobile single-post spacing and fixes header search control alignment.

= 1.0.4 =
Adds an optional compact search icon mode for the header.

= 1.0.0 =
Initial public release of WiseTech Core.

== Copyright ==

WiseTech Core WordPress Theme, Copyright 2026 WiseTechList.
WiseTech Core is distributed under the terms of the GNU General Public License v2 or later.

== Resources ==

* screenshot.png: Theme screenshot with neutral placeholder content. Copyright 2026 WiseTechList. GPLv2 or later.
* assets/images/starter/demo-1.jpg: Original demo artwork created by WiseTechList for WiseTech Core. Copyright 2026 WiseTechList. GPLv2 or later.
* assets/images/starter/demo-2.jpg: Original demo artwork created by WiseTechList for WiseTech Core. Copyright 2026 WiseTechList. GPLv2 or later.
* assets/images/starter/demo-3.jpg: Original demo artwork created by WiseTechList for WiseTech Core. Copyright 2026 WiseTechList. GPLv2 or later.
* assets/images/starter/demo-4.jpg: Original demo artwork created by WiseTechList for WiseTech Core. Copyright 2026 WiseTechList. GPLv2 or later.
* All theme PHP, CSS, JavaScript, and JSON files are original work by WiseTechList. Copyright 2026 WiseTechList. GPLv2 or later.
