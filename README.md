![Logo Switcher][header]
[header]: https://github.com/leanderiversen/logo-switcher/blob/master/assets/banner-1544x500.png "Logo Switcher"

# Logo Switcher
Logo Switcher is a super lightweight plugin that easily allow the implementation of a chosen logo in your theme. By default, the plugin automatically includes the chosen logo on the login screen, but the plugin behavior can be controlled by a simple filter. To get started, simply download and activate the plugin, then hover over «Appearance» and click on «Customize».

## Installation
1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Navigate to Appearance->Customize to upload your the intended logo


## How to use


```
<?php 

// print : http://example.com/path/to/logo.png 
 echo logo_switcher_url();

// print : <img src="http://example.com/path/to/logo.png">    
 logo_switcher_print();
```
To control the plugin behaviour, you can use the following filter:

```
<?php
// in the your theme's functions.php file

add_filter('logo-switcher.options', function(array $default) {
    
    $default['default'] = '/my-logo.png';
    $default['enable-on-login-page'] = true;

    return $default;
});
```
