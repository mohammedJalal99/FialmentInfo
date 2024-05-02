<?php

namespace MohammedHamad\FilamentInfo;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentInfoServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        $package->name('filament-info')
        ->hasViews()
        ->hasTranslations()
        ->hasAssets();
    }
}
