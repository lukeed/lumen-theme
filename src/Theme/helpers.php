<?php

if (!function_exists('theme_url')) {
    /**
     * Generate an theme path url for the application.
     *
     * @param  string $path
     * @param  bool $secure
     * @return string
     */
    function theme_url($path, $secure = null)
    {
        $currentTheme = Theme::get()->getDirectory();

        return app('url')->asset('themes' . '/' . $currentTheme . '/' . $path, $secure);
    }
}
