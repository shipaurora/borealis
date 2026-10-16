<?php

namespace Aurora\Theme;

use Filament\Support\Assets\Theme;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;

/**
 * Aurora's admin theme, prebuilt (resources/dist/theme.css): what the panel uses unless the
 * site builds its own on resources/css/index.css (config('aurora.theme')).
 */
class ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        FilamentAsset::register([
            Theme::make('aurora', __DIR__.'/../resources/dist/theme.css'),
        ], package: 'aurora/aurora');
    }
}
