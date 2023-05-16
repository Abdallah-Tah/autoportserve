<?php
//C:\laragon\www\amohamed\src\AutoPortServeServiceProvider.php
namespace Amohamed\AutoPortServe;
use Illuminate\Support\ServiceProvider;
use Amohamed\AutoPortServe\Console\ServeCommand;

/**
 * Class AutoPortServeServiceProvider
 * @package Amohamed\AutoPortServe
 */
class AutoPortServeServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ServeCommand::class,
            ]);
        }
    }
}
