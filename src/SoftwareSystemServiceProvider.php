<?php
namespace PureIntento\SoftwareSystem;

use Illuminate\Support\ServiceProvider;

class SoftwareSystemServiceProvider extends ServiceProvider{
    
    public function register(): void{
        
    }

    public function boot(): void{
        $this->loadMigrationsFrom(__DIR__ . DIRECTORY_SEPARATOR . "migrations");
        
        $this->publishModels();
        $this->publishes([
            __DIR__ . DIRECTORY_SEPARATOR . "migrations" => database_path('migrations'),
        ], 'migrations');
    }

    protected function publishModels()
    {
        $this->publishes([
            __DIR__. DIRECTORY_SEPARATOR . "Models" => app_path('Models'),
        ], 'models');
    }
}