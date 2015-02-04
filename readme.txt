=== Gravity Forms - Start progress bar at zero percent ===
Contributors: ovann86
Donate link: http://www.itsupportguides.com/
Tags: Gravity Forms
Requires at least: 4.0
Tested up to: 4.1
Stable tag: 1.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Forces the progress bar on multi-page forms to start at zero percent.

== Description ==

By default, multi-page forms on Gravity Forms will start the progress bar count as if the first step has been completed. For example, on a five page form the first page would display 20% completed before the form is even started, and the last page would display 100%.

With this plugin the progress bar will display 0% on the first page and 80% on the last page (based on a five page form). 

== Installation ==

1. Install plugin from WordPress administration or upload folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in the WordPress administration
1. The progress bar will now start at zero percent

== Frequently Asked Questions ==

= How does this work? =

This plugin uses the 'gform_progressbar_start_at_zero' filter hook built that is built into Gravity Forms.

== Screenshots ==

1. The default progress bar on a five page form, displaying 20% on the first page and 100% on the last page.
2. The progress bar with this plugin active. A five page form displays 0% on the first page and 80% on the last page.

== Changelog ==

= 1.0 =
* First public release.

== Upgrade Notice ==

= 1.0 =
First public release.