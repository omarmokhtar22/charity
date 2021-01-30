<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Role' => 'App\Policies\RolePolicy',
        'App\Models\Permission' => 'App\Policies\PermissionPolicy',
        'App\Models\Post' => 'App\Policies\PostPolicy',
        'App\Models\Photo' => 'App\Policies\PhotosPolicy',
        'App\Models\Video' => 'App\Policies\VideosPolicy',
        'App\Models\Page' => 'App\Policies\PagesPolicy',
        'App\Models\Number' => 'App\Policies\NumberPolicy',
        'App\Models\Slider' => 'App\Policies\SliderPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
