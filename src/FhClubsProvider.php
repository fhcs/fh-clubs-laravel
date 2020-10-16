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

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/clubs.php' => config_path('clubs.php'),
        ], 'clubs');
    }

}