<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
 /*       $this->mapAdminRoutes();
        $this->generalManager();
        $this->QualityManager();
        $this->maintenanceManager();
        $this->supervisor();
        $this->employee();
        //*/
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }
/*    protected function mapAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
    protected function mapGeneralManagerRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }//generalManager
    protected function mapgeneralManager()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/generalManager.php'));
    }//generalManager
    protected function mapQualityManager()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/QualityManager.php'));
    }//QualityManager
    protected function mapmaintenanceManager()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/maintenanceManager.php'));
    }//maintenanceManager
    protected function mapsupervisor()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/supervisor.php'));
    }//supervisor*/



    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
