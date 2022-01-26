<?php

namespace Temita\Theme;

class ThemeMenus
{
    private static $init = false;

    public static function init()
    {
        if(self::$init)
            return;
        self::$init = true;

        self::theme_menus();
    }

    public static function theme_menus()
    {
        register_nav_menus(array(
            'primary'   => __('Primary Menu', 'myfirsttheme'),
            'secondary' => __('Secondary Menu', 'myfirsttheme')
        ));
    }
}