<?php

namespace App\Providers;

use App\Http\Controllers\bvn\BVNVerificationAPIController;
use App\Http\Services\BVNService;
use App\Http\Services\MediaManagerService;
use App\Http\Services\ServiceImpl\CloudinaryServiceImpl;
use App\Http\Services\ServiceImpl\YouVerifyBVNServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BVNService::class,YouVerifyBVNServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
