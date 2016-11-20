![Logo Switcher][header]
[header]: https://github.com/IversenCarpeNoctem/logo-switcher/blob/master/assets/banner-1544x500.png "Logo Switcher"

# Logo Switcher
Logo Switcher is a super lightweight plugin that easily allow the implementation of a chosen logo in your theme. By default, the plugin automatically includes the chosen logo on the login screen, but the plugin behavior can be controlled by a simple filter. To get started, simply download and activate the plugin, then hover over «Appearance» and click on «Customize».

## Installation
1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Navigate to Appearance->Customize to upload your the intended logo


## How to use


```
<?php 

// To print the URL to the logo, i.e. http://www.example.com/wp-content/uploads/YYYY/MM/logo.png
 echo logo_switcher_url();

// To print the entire img-tag within a link-tag that links to the homepage, i.e. <a href="http://www.example.com/" title="Your Website Name" rel="home"><img src="http://www.example.com/wp-content/uploads/YYYY/MM/logo.png" alt="Your Website Name"></a> 
 logo_switcher_print();
```
To control the plugin behaviour, you can use the following filter:

```
<?php
// Add this to your theme's functions.php file to control the plugin behaviour:

add_filter('logo-switcher.options', function(array $default) {
    
    $default['default'] = '/my-logo.png';
    $default['enable-on-login-page'] = true;

    return $default;
});
```

## Like the plugin?
If you like the plugin, please review it! Every review is highly appreciated, but if you want to suggest something, please send an email to info@carpe-noctem.no.
