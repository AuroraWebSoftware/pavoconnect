<?php

namespace aurorawebsoftware\Pavoconnect;

use aurorawebsoftware\Pavoconnect\Commands\PavoconnectCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PavoconnectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pavoconnect')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_pavoconnect_table')
            ->hasCommand(PavoconnectCommand::class);
    }
}
