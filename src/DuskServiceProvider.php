<?php

namespace BigPictureMedical\Dusk;

use Illuminate\Support\ServiceProvider;

class DuskServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->commands([
            MakeCommand::class,
        ]);
    }
}
