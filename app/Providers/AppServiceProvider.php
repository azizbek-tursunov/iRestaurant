<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\SocialLink;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFour();

        $gallery = Gallery::latest()->paginate(12);
        view()->share('gallery', $gallery);

        $socials = SocialLink::all();
        view()->share('socials', $socials);
    }
}
