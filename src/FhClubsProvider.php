<?php

namespace Fh\Clubs;

use Illuminate\Support\ServiceProvider;

class FhClubsProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/clubs.php', 'clubs'
        );
    }

    /**
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(
            __DIR__ . '/../database/migrations'
        );


        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/clubs.php' => config_path('clubs.php'),
            ], 'clubs-config');

            $this->publishes([
                __DIR__ . '/../database/migrations' => database_path('migrations'),
            ], 'clubs-migrations');
        }
    }
}