<?php

namespace App\Policies;

use App\User;
use App\Models\Permission;
use App\Models\Number;
use Illuminate\Auth\Access\HandlesAuthorization;

class NumberPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
       $permission = Permission::where('slug','view_number')->first();
       return $user->hasPermissionThroughRole($permission);
    }

    public function update(User $user, Number $number)
    {
        $permission = Permission::where('slug','edit_number')->first();
       return $user->hasPermissionThroughRole($permission);
    }
}
