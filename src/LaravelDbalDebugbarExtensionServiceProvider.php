<?php declare(strict_types=1);

namespace Xtcat\LaravelDbalDebugbarExtension;

use DebugBar\Bridge\DoctrineCollector;
use DebugBar\DebugBarException;
use Doctrine\DBAL\Logging\DebugStack;
use Illuminate\Support\ServiceProvider;

class LaravelDbalDebugbarExtensionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.debug', false)) {
            $debugStack = new DebugStack();

            $this->app->make('Doctrine\Dbal\Connection')->getConfiguration()->setSQLLogger($debugStack);

            $debugbar = $this->app->make('debugbar');

            try {
                $debugbar->addCollector(new DoctrineCollector($debugStack));
            } catch (DebugBarException $exception) {
                //something went wrong, ignore for now
            }
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
