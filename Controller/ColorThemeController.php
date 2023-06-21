<?php

class ColorThemeController
{
    public static function init()
    {
        add_action('wp_head', [__CLASS__, 'addThemeColor']);
    }

    public static function addThemeColor()
    {
        echo '<meta name="theme-color" media="(prefers-color-scheme: light)" content="white">';
    }
}

ColorThemeController::init();
