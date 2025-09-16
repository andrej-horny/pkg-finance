<?php

namespace Dpb\Packages\Finance\Providers;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FinanceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('pkg-finance')
            ->hasConfigFile()
            ->hasMigrations([
                '0001_create_finance_tables',
            ])
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->publishConfigFile()
                    ->askToRunMigrations()
                    ->endWith(function () {
                        // Artisan::call('db:seed', [
                        //     '--class' => \Dpb\Packages\Finance\Database\Seeders\DatabaseSeeder::class,
                        //     '--force' => true,
                        // ]);
                    });
            });
    }    
}
