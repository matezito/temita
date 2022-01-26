<?php

namespace Temita\Theme;

class ThemeStyles 
{
    private static $init = false;

    public static function init()
    {
        if(self::$init)
            return;
        self::$init = true;

        add_action('wp_enqueue_scripts', [self::class, 'default_style']);
    }

    public static function default_style()
    {
        wp_enqueue_style('app-style', get_stylesheet_directory_uri(  ).'/assets/css/app.min.css', [], ASSETS_VERSION, 'all');
    }
}