<?php

namespace App\Providers;

use App\Http\Resources\Properties\PropertyResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

use function PHPUnit\Framework\isReadable;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->environment('testing')) {
            DB::listen(function ($query) {
                info($query->sql);
            });
        }
    }
}
