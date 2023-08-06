<?php

namespace App\Providers;

use App\Http\Controllers\bvn\YouVerifyBVNVerificationAPIController;
use App\Http\Services\BVNService;
use App\Http\Services\ServiceImpl\YouVerifyBVNServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when(YouVerifyBVNVerificationAPIController::class)
            ->needs(BVNService::class)
            ->give(YouVerifyBVNServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
