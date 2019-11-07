<?php

namespace App\Providers;

use App\Http\Repositories\CountryRepositoryInterface;
use App\Http\Repositories\Eloquent\CountryEloquentRepository;
use App\Http\Services\CountryServiceInterface;
use App\Http\Services\Imple\CountryService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CountryServiceInterface::class,
            CountryService::class
        );

        $this->app->singleton(
            CountryRepositoryInterface::class,
            CountryEloquentRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
