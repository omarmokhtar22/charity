<?php

namespace App\Providers;
use App\Models\Page;
use App\Models\Contact;
use Illuminate\Support\Facades\View;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       // $pages=Page::Where('parent_id',0)->where('menu',1)->orderBy('order','Asc')->get();
        //View::share('pages', $pages);

        $shareddata['contact']= Contact::findorfail(1);
        $shareddata['menus']= Page::Where('parent_id',0)->where('menu',1)->orderBy('order','Asc')->get();
        View::share('shareddata', $shareddata);
    }
}
