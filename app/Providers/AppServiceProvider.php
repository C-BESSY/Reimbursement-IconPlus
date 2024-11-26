<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\Notifications\Livewire\DatabaseNotifications;

DatabaseNotifications::trigger('filament.notifications.database-notifications-trigger');
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        FilamentAsset::register([
            Css::make('app-styles', 'resources/css/app.css'),
        ]);
    }
}
