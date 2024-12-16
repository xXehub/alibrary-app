<?php

namespace App\Providers;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Custom rendering for HTTP exceptions
        $this->app->bind(HttpResponseException::class, function ($app, $parameters) {
            $status = $parameters['status'] ?? 500;

            if ($status === 404) {
                return redirect()->route('not-found');
            }

            return response()->view('errors.500', [], 500);
        });
    }
}
