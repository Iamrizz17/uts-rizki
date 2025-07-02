<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Contact;
use App\Models\Post;

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
        // Share variable contact ke semua view
        View::composer('*', function ($view) {
            $contact = Contact::where('status_publish', 1)->first();
            $view->with('contact', $contact);
        });

        // Share sliderPost ke semua view
        View::composer('front-end.master', function ($view) {
            $sliderPost = Post::whereRaw('LOWER(title) = ?', ['homepage'])->latest()->first();
            $view->with('sliderPost', $sliderPost);
        });
    }
}
