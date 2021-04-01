<?php

namespace Smartisan\Presenter;

use Illuminate\Support\ServiceProvider;
use Smartisan\Presenter\Commands\MakePresenterCommand;

class PresenterServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/presenter.php', 'presenter');
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakePresenterCommand::class,
            ]);

            $this->publishes([
                __DIR__ . '/../config/presenter.php' => config_path('presenter.php'),
            ], 'config');
        }
    }
}
