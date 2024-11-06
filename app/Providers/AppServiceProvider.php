<?php

namespace App\Providers;

use App\Models\Domain;
use App\Models\Link;
use App\Observers\DomainObserver;
use App\Observers\LinkObserver;
use App\Observers\PixelObserver;
use App\Observers\SpaceObserver;
use App\Observers\UserObserver;
use App\Models\Pixel;
use App\Models\Space;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Fix for utf8mb migration @https://laravel.com/docs/master/migrations#creating-indexes
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        if(config('settings.force_https')) {
            // If the request comes from a remote source
            if (parse_url(config('app.url'))['host'] == $request->getHost()) {
                \URL::forceScheme('https');
            }
        }

        Paginator::useBootstrap();

        User::observe(UserObserver::class);
        Space::observe(SpaceObserver::class);
        Link::observe(LinkObserver::class);
        Domain::observe(DomainObserver::class);
        Pixel::observe(PixelObserver::class);
    }
}
