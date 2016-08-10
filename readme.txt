=== Logo Switcher ===
Contributors: leanderiversen
Tags: logo, switcher, login, image, controller, customizer
Requires at least: 3.0.1
Tested up to: 4.5.3
Stable tag: 1.1.1
License: MIT
License URI: https://opensource.org/licenses/MIT

Logo Switcher allows you to easily implement your own logo in your Wordpress theme.

== Description ==
Logo Switcher is a super lightweight plugin that easily allow the implementation of a chosen logo in your theme. By default, the plugin automatically includes the chosen logo on the login screen, but the plugin behavior can be controlled by a simple filter. To get started, simply download and activate the plugin, then hover over «Appearance» and click on «Customize».

= How to use =

`
<?php 

// print : http://example.com/path/to/logo.png 
 echo logo_switcher_url();

// print : <img src="http://example.com/path/to/logo.png">    
 logo_switcher_print();
`

To control the plugin behaviour, you can use the following filter:

`
<?php
// in the your theme's functions.php file

add_filter('logo-switcher.options', function(array $default) {
    
    $default['default'] = '/my-logo.png';
    $default['enable-on-login-page'] = true;

    return $default;
});
`

= Like the plugin? =
If you like the plugin, please review it! Every review is highly appreciated, but if you want to suggest something, please send an email to info@carpe-noctem.no.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Navigate to Appearance->Customize to upload your logo

== Changelog ==

= 1.1.1 =
* Updated translations
* Updated readme

= 1.1 =
* Added options to include the logo in your theme
* Added filters
* Bugfixes

= 1.0 =
* Initial release

== Screenshots ==

1. This is where you should upload the intended logo