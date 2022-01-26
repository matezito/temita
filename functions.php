<?php
require __DIR__ . '/vendor/autoload.php';

use Temita\ThemeFunctions;

define('ASSETS_VERSION', '1.0.1');

class Theme_Functions
{
    private static $init = false;

    public static function init()
    {
        if (self::$init) 
            return;
        self::$init = true;

        self::functions();
    }

    public static function functions()
    {
        return new ThemeFunctions();
    }
}

Theme_Functions::init();