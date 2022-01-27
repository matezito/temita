<?php

namespace Temita\Theme;

class ThemeSupport
{
    private static $init = false;

    public static function init()
    {
        if (self::$init)
            return;
        self::$init = true;

        self::theme_support();
    }

    public static function theme_support()
    {
        add_theme_support('title-tag');
        add_theme_support('responsive-embeds');
        add_theme_support('custom-logo');
    }
}
