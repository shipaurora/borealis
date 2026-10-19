<?php

namespace Aurora\Theme;

use Aurora\Support\Themes;
use Illuminate\Support\ServiceProvider;

/**
 * Aurora's admin theme, prebuilt (resources/dist/theme.css), in Aurora's theme registry: the
 * admin's look unless another is chosen under Settings › Appearance.
 */
class ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Themes::register(
            'aurora',
            name: 'Aurora',
            description: __('Deep violet and night blue, with a glowing sidebar.'),
            stylesheet: __DIR__.'/../resources/dist/theme.css',
            preview: __DIR__.'/../resources/preview.webp',
            package: 'aurora/aurora',
            // Made for both: people switch in the user menu.
            modes: ['light', 'dark'],
        );
    }
}
