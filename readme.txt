=== Krusty MSIE Body Classes ===
Contributors: KrustyRuffle
Tags: css, style, theme, sandbox, wpmu, MSIE
Requires at least: 2.x
Tested up to: 3.0
Stable tag: trunk

Inserts Internet Explorer version tags in the body classes of themes that use the 'body_class' filter.

== Description ==

This plugin will will only work if the current theme uses the 'body_class' filter to build a list of classes for the body tag of the sites public pages. Themes that I know use this filter include:

1. [Sandbox](http://www.plaintxt.org/themes/sandbox/ "The original semantic theme for WordPress")
1. [Carrington](http://carringtontheme.com/ "Theme abstraction and organization like none other")
1. [K2](http://getk2.com/ "K2 loves you like a kitten")
1. [Twenty Ten](http://wordpress.org/download/ "WordPress now supports the body_class filter in the new defult theme!")

The tags this plugin inserts are as follows:

* browser-msie (when any browser identifies itself as Internet Explorer)
* browser-msie-{MAJOR VERSION} (where {MAJOR VERSION} = 3/4/5/6/7/8)
* browser-msie-{MAJOR VERSION}-{MINOR VERSION} (only when a browser has identified itself as Internet Explorer 5.5)
* browser-msie-old (for any browser that idnetifies itself as Internet Explorer 6 or less)

So, if your site is hit by Internet Explorer 5.5 the body tag will look something like:

`<body class="wordpress y2008 m11 d19 h22 home blog loggedin browser-msie browser-msie-5 browser-msie-5-5 browser-msie-old">`

This allows for easy adjustment of css for Internet Explorer browsers. Such as:

* setting a fixed width for internet explorer versions that are to old to recognize the max-width & min-width attributes
* adjusting margins and padding for IE versions that blow them out of whack
* showing links to Firefox and Opera download pages only to IE users :^P

If you have any questions, suggestions, or comments feel free to drop by [the Krusty MSIE Body Classes page](http://rustykruffle.com/wordpress-plugins/krusty-msie-body-classes "home page for Krusty MSIE Body Classes") at [rustykruffle.com](http://rustykruffle.com "my website").


== Installation ==
WordPress Users:

1. Unzip the `krusty-msie-body-classes.zip` file
1. Upload the `krusty-msie-body-classes` directory to the `/wp-content/plugins/` directory on your server
1. Activate the plugin through the 'Plugins' menu in WordPress

-OR-

1. Just install it through the admin panel in your blog.

== Changelog ==

Version 1.0.0

* Initial release

Version 1.0.1

* Minor updates to readme.txt & Plugin information

Version 1.0.2

* Minor updates to readme.txt & Plugin information
