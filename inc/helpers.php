<?php

// Block direct access
if(!defined('ABSPATH'))exit;

/*
 * This file is part of the logo-switcher package.
 * (c) Iversen - Carpe Noctem <info@carpe-noctem.no>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Get the logo url
 *
 * 
 * @return string
 */
function logo_switcher_url() {
    return class_Logo_Switcher::getLogoUrl();
}

/**
 * Print logo url
 * 
 * @param string $path the url target
 * @param string $description the logo image description
 *
 */
function logo_switcher_print($path = null, $description = null) {
    class_Logo_Switcher::printLogo($path, $description);
}