<?php

namespace App\Providers;


use App\Http\Repositories\CountryRepositoryInterface;
use App\Http\Repositories\Eloquent\CityEloquentRepository;
use App\Http\Repositories\CityRepositoryInterface;
use App\Http\Repositories\Eloquent\CountryEloquentRepository;
use App\Http\Services\CityServiceInterface;
use App\Http\Services\CountryServiceInterface;
use App\Http\Services\Imple\CityService;
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

        $this->app->singleton(
            CityServiceInterface::class,
            CityService::class
        );

        $this->app->singleton(
            CityRepositoryInterface::class,
            CityEloquentRepository::class
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
