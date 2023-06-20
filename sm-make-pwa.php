<?php
/*
Plugin Name: SM Make PWA
Plugin URI: https://sulaimanmisri.com
Description: This a powerful WordPress plugin that enable your WordPress site to support PWA.
Version: 1.0
Author: Sulaiman Misri
Author URI: https://bit.ly/daftar-kelas-design
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

function enqueueScript()
{
    wp_enqueue_script('sm-service-worker', plugins_url('/js/service-worker.js', __FILE__), [], false, true);
    wp_enqueue_script('sm-pwa-main', plugins_url('/js/main.js', __FILE__), [], false, true);
    wp_enqueue_style('sm-style', plugins_url('/css/style.css', __FILE__), [], false);
}

function addManifestLink()
{
    echo '<link rel="manifest" href="' . esc_url(plugins_url('manifest.json', __FILE__)) . '">';
}

function addThemeColor()
{
    echo '<meta name="theme-color" media="(prefers-color-scheme: light)" content="white">';
}

add_action('wp_enqueue_scripts', 'enqueueScript');
add_action('wp_head', 'addManifestLink');
add_action('wp_head', 'addThemeColor');
