<?php
namespace Temita\Theme;

class ThemeScripts 
{
    private static $init = false;

    public static function init()
    {
        if(self::$init)
            return;
        self::$init = true;

        add_action('wp_enqueue_scripts', [self::class, 'default_script']);
        add_action('wp_enqueue_scripts', [self::class, 'home_script']);
    }

    public static function default_script()
    {
        wp_enqueue_script('app-script', get_stylesheet_directory_uri(  ).'/assets/js/app.min.js', [], ASSETS_VERSION, true);
    }

    public static function home_script()
    {
        wp_enqueue_script('home-script', get_stylesheet_directory_uri(  ).'/assets/js/home.min.js', [], ASSETS_VERSION, true);
    }

}