<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackEndServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Note\NoteRepositoryInterface',
            'App\Repositories\Note\NoteRepository'
        );
    }
}
