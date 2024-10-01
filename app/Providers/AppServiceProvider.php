<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\FinancialAccountRepository;
use App\Repositories\FinancialAccountRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FinancialAccountRepositoryInterface::class, FinancialAccountRepository::class);
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
