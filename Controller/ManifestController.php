<?php

class ManifestController
{
    public static function init()
    {
        add_action('wp_head', [__CLASS__, 'addManifestLink']);
    }

    public static function addManifestLink()
    {
        echo '<link rel="manifest" href="' . esc_url(plugins_url('manifest.json', __FILE__)) . '">';
    }
}

ManifestController::init();
