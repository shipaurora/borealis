<?php

namespace Aurora\Borealis;

use Aurora\Support\Themes;
use Illuminate\Support\ServiceProvider;

/**
 * Borealis, Aurora's default admin theme, prebuilt (resources/dist/theme.css), in Aurora's theme
 * registry: the admin's look unless another is chosen under Settings › Appearance.
 */
class ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Themes::register(
            'borealis',
            name: 'Borealis',
            description: __('Deep violet and night blue, with a glowing sidebar.'),
            stylesheet: __DIR__.'/../resources/dist/theme.css',
            // A picture of each mode: the theme picker shows the one people are in.
            preview: ['light' => __DIR__.'/../resources/preview-light.webp', 'dark' => __DIR__.'/../resources/preview-dark.webp'],
            // Published where sites have always loaded it from (public/css/shipaurora/borealis-theme),
            // from before the package was renamed: a site that updates keeps its styles.
            package: 'shipaurora/borealis-theme',
            // Made for both: people switch in the user menu.
            modes: ['light', 'dark'],
        );
    }
}
