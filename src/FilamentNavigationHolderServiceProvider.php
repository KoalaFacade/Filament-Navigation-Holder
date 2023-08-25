<?php

namespace KoalaFacade\FilamentNavigationHolder;

use Filament\Support\Assets\Js;
use Spatie\LaravelPackageTools\Package;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentNavigationHolderServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-navigation-holder';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasAssets();

            FilamentAsset::register(
                assets: [
                    Js::make(static::$name, __DIR__ . '/../resources/dist/app.js'),
                ],
                package: 'koalafacade/filament-navigation-holder'
            );
    }
}
