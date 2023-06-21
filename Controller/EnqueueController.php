<?php

class EnqueueController
{
    public static function init()
    {
        add_action('wp_enqueue_scripts', [__CLASS__, 'enqueueScript']);
    }

    public static function enqueueScript()
    {
        wp_enqueue_script('sm-service-worker', plugins_url('/js/service-worker.js', __FILE__), [], false, true);
        wp_enqueue_script('sm-pwa-main', plugins_url('/js/main.js', __FILE__), [], false, true);
        wp_enqueue_style('sm-style', plugins_url('/css/style.css', __FILE__), [], false);
    }
}

EnqueueController::init();
