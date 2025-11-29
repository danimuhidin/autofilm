<?php

namespace App\Providers;

use App\Models\Bio;
use App\Models\Contact;
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
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $bio = Bio::first();
            $waBubble = Contact::all();
            $view->with('bio', $bio)->with('waBubble', $waBubble);
        });
    }
}
