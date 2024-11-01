=== Site Specific CSS ===
Contributors: lgedeon, mgedeon
Donate link: http://wordpress.kdari.net/
Tags: site specific, css, child theme, child of child theme, skin, multi-site, theme, simple, theme edit, theme options, kdari
Requires at least: 3.0
Tested up to: 3.0.1
Stable tag: 1.0.1

Add site specific CSS to each blog individually, instead of changing your theme or using a million child themes.

== Description ==

Note: Sorry about the bad header problem. Version 1.0.1 should work much better.

If you want a different CSS file (also known as a skin) for the different sites you are working on in WordPress Multi-Site you have to make a child theme (best practice) or copy a theme and change its name, css, and whatever else you may desire to change (less than optimal solution).

But wait! There is a better solution!

You can add site specific CSS to each blog individually, instead of changing your theme or using a million child themes.

This letâ€™s you keep all the functionality built into your favorite theme and just change the look a bit. It is a much lighter solution than creating yet another child themeâ which gets tedious on multi sites.

We originally developed this because we created a child theme based on twenty-ten and then wanted to create several variationsâ but wordpress doesnâ€™t let you make a child theme of a child theme. Now, we do not need to. And for just thirty nine ninty... wait... It is free? What is wrong with us?

Got comments? Wanna share this with all your multi-site friends? Cool! We do too!


== Installation ==

Here are three different ways you can install this plug-in:

1. Use the handy install option built into wordpress.
1. or... Download the zip file, un-zip, and upload to the plug-ins directory.
1. or... Copy the contents of site-specific-css.php to the functions.php of your favorite child theme.

Then if you installed as a plug-in (options 1 or 2 above), activate the plugin.

Next make sure you can upload a css file. 
1. Goto the Super Admin menu
1. Select options, and near the bottom find a list of all acceptable file extensions.
1. Make sure css is on the list.

Now to use it.

1. Upload the css file youâ€™d like to apply to your site using the media upload (recommended) or ftp.
1. After you upload, copy the location of the file.
1. Make sure you have the correct site and child theme active, then look under appearance. There will be a new menu item for Site Specific CSS.
1. Paste the URL of the CSS file into the only (for now) option box, then save changes.
1. Enjoy your new look.

== Frequently Asked Questions ==

= What is next for this plugin? =

Here are some features we want to add: (feel free to vote on features and/or contribute code)
* Link to multiple custom CSS files.
* Include a small amount of CSS directly in the header via an input box.
* Upload to the media library directly from the options page.
* Allow linking to files in the media library via point and click.
* Check that CSS is a valid upload type and add if not.

= What other questions do you have? =

This is the first release so we are gathering questions right now. Do you have any questions?

== Change Log ==

1.0 First public release.
1.0.1 Header corrected so it will install.
