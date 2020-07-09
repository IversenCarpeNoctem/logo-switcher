# Logo Switcher
Logo Switcher allows you to easily implement your own logo in your WordPress theme.

- Contributors: leanderiversen
- Tags: logo, custom logo, logo controller, logo switcher, login logo
- Requires at least: 4.0
- Tested up to: 5.4.2
- Stable tag: 2.1
- Requires PHP: 5.6
- License: GPLv2 or later
- License URI: https://www.gnu.org/licenses/gpl-2.0.html

## Description
Logo Switcher is a super lightweight plugin that easily allow the implementation of a chosen logo in your theme. By default, the plugin automatically includes the chosen logo on the login screen, but the plugin behavior can be controlled by a simple filter. To get started, simply download and activate the plugin, then hover over **Appearance** and click on **Customize**.

## Installation
1. Upload the `logo-switcher` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to **Appearance**, then click on **Customize** to upload your logo. Note that this will only add the logo to the login page of your website. To include the logo on your actual website, use one of the functions provided in the **How to use** section.


## How to use

```php
<?php

// https://www.example.com/wp-content/uploads/YYYY/MM/logo.png
echo logo_switcher_url();

// <a href="https://www.example.com/" title="Your Website Name" rel="home"><img src="https://www.example.com/wp-content/uploads/YYYY/MM/logo.png" alt="Your Website Name"></a>		
logo_switcher_link_tag();

// <img src="https://www.example.com/wp-content/uploads/YYYY/MM/logo.png" class="example-class" alt="Your Website Name">
logo_switcher_image_tag(array $classes);
```

## Changelog

### 2.1
* General maintenance and optimisation of the plugin.

### 2.0
* Introduces logo_switcher_image_tag(), which produces the img-tag, with the option to add classes.
* Introduces logo_switcher_link_tag(), which is an alias of logo_switcher_print().
* Introduces a cleaner uninstalling process.
* Compatibility with WordPress 5.0.

### 1.2.3
* Optimisation of the CSS on the "Log In" page.
* Updated minimum version of WordPress to 4.0 to ensure future compatibility for the plugin.

### 1.2.2
* Streamlined the process of uploading a logo
* Updated translations

### 1.2.1
* Added functionality to see the uploaded logo directly from the plugin's settings page
* Updated translations
* Other minor improvements

### 1.2
* New options page located under the "General" settings, which allows you to easily switch on or off the logo on the login screen
* Updated translations with better explanations
* Various minor improvements

### 1.1.4
* Updated the readme and made it more understandable
* The plugin is now compatible with version 4.7 of WordPress

### 1.1.3
* Various bugfixes
* Updated translations
* Compatible up to version 4.7-alpha-38618 of Wordpress

### 1.1.2
* Various bugfixes

### 1.1.1
* Updated translations
* Updated readme

### 1.1
* Added options to include the logo in your theme
* Added filters
* Bugfixes

### 1.0
* Initial release

## Like the plugin?
If you like the plugin, please review it! Every review is highly appreciated, but if you want to suggest something, please send an email to info@carpe-noctem.no.