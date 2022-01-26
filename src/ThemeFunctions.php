<?php

namespace Temita;

use Temita\Theme\ThemeSupport;
use Temita\Theme\ThemeMenus;
use Temita\Theme\ThemeStyles;
use Temita\Theme\ThemeScripts;

class ThemeFunctions
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'main_styles']);
        $this->theme_support();
        $this->theme_menus();
        $this->theme_styles();
        $this->theme_scripts();
    }

    public function main_styles()
    {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    public function theme_support()
    {
        return ThemeSupport::init();
    }

    public function theme_menus()
    {
        return ThemeMenus::init();
    }

    public function theme_styles()
    {
        return ThemeStyles::init();
    }

    public function theme_scripts()
    {
        return ThemeScripts::init();
    }
}
