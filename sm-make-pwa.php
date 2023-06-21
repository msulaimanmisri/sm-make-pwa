<?php
/*
Plugin Name: SM Make PWA
Plugin URI: https://sulaimanmisri.com
Description: This a powerful WordPress plugin that enable your WordPress site to support PWA.
Version: 1.1
Author: Sulaiman Misri
Author URI: https://bit.ly/daftar-kelas-design
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

require 'Controller/EnqueueController.php';
require 'Controller/ManifestController.php';
require 'Controller/ColorThemeController.php';
