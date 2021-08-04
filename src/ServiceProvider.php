<?php

namespace CustomD\LaravelExperian;

use Spatie\LaravelPackageTools\Package;
use CustomD\LaravelExperian\Clients\DelphiSelect;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-experian')
            ->hasConfigFile()
            ->hasTranslations();
        $this->registerBindings();
    }

    protected function registerBindings(): self
    {

        $this->app->bind(DelphiSelect::class, function () {
            return new DelphiSelect();
        });

        return $this;
    }
}
