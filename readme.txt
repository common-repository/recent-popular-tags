=== Recent Popular Tags ===
Contributors: tpflanz, Fastmover 
Donate link: http://webworksofkc.com/recent-popular-tags-wordpress-plugin-by-travis-pflanz
Tags: plugin, tags, recent, popular, shortcode
Requires at least: 3.9
Tested up to: 3.9.1
Stable tag: 0.3.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display the most popular recently used blog post tags on your website. Valuable for website with current events... No more old tags!

== Description ==

Recent Popular Tags WordPress plugin allows the administrator to display the most popular recently used tags by post authors. 

This plugin is very valuable for current events websites because it gives admins the ability to set the number of tags to display and how many days to consider as "recent"... No more popular tags displaying from two years ago!

**Default Usage**

Heading and Recent Popular Tags will be displayed beneath each blog post.

**Shortcode**

Use shortcode `[recent-popular-tags]` to display Recent Popular Tags anywhere in blog posts, pages, custom post types or in a text widget.

**Template Tag**

Use `<?php if ( function_exists('rpt_display_content') ) { echo do_shortcode('[recent-popular-posts]')} ?>` to display Recent Popular Tags in your template files

**Widget**

Use `[recent-popular-tags]` in a "Text" widget to display Recent Popular Tags in a sidebar

== Installation ==

1. Go to Dashboard >> Plugins >> Add New >> Search
2. Search for "Recent Popular Tags," click "Install Now," then "Activate Plugin"
3. Go to "Recent Popular Tags" settings and enter heading, number of days and number of tags. The plugin will display below each blog post 

Use shortcode `[recent-popular-posts]` to display "Recent Popular Posts" in a blog post, page or a text widget 

Use `<?php if ( function_exists('rpt_display_content') ) { echo do_shortcode('[recent-popular-posts]')} ?>` to display "Recent Popular Tags" in your template files

== Frequently Asked Questions ==

= How can I disable Recent Popular Tags from displaying below every blog post =

This feature is coming soon. Until then, you can add `.type-post .recent-popular-tags:last-of-type{display:none}` to your theme's style.css to remove it.

== Screenshots ==

1. The Recent Popular Tags WordPress plugin settings page. Enter a heading, number of tags to display and number of recent days.

2. The default display of Recent Popular Tags plugin is below the content on blog posts. Recent Popular Tags uses your theme's default `h3` styling and default **a** styling, expect with **text-transform:uppercase** applied.

3. Use the Recent Popular Tags shortcode **[recent-popular-tags]** in a Text widget to display Recent Popular Tags in a sidebar or widgetized area.

== Changelog ==

= 0.3 =
* Improved usage instructions on plugin page and settings page

= 0.2 =
* Fixed bug that always "displayed" heading, even when a heading was not entered. Recent Popular Tags heading will not be displayed when a heading is not entered in the settings

= 0.1 =
* First version of Recent Popular Tags WordPress plugin

== Upgrade Notice ==

= 0.3 =
Improved usage instructions on settings page

= 0.2 =
Fixed bug that always "displayed" heading, even when a heading was not entered

= 0.1 =
Initial release of Recent Popular Tags WordPress plugin.