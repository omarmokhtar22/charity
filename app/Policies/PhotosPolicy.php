<?php

namespace App\Policies;

use App\Models\Photo;
use App\User;
use App\Models\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotosPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        $permission = Permission::where('slug','view_all_photos')->first();
       return $user->hasPermissionThroughRole($permission);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Admin\Photo  $photo
     * @return mixed
     */
    public function view(User $user, Photo $photo)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $permission = Permission::where('slug','add_photos')->first();
       return $user->hasPermissionThroughRole($permission);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Admin\Photo  $photo
     * @return mixed
     */
    public function update(User $user, Photo $photo)
    {
        $permission = Permission::where('slug','edit_photos')->first();
        return $user->hasPermissionThroughRole($permission);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Admin\Photo  $photo
     * @return mixed
     */
    public function delete(User $user, Photo $photo)
    {
        $permission = Permission::where('slug','delete_photos')->first();
        return $user->hasPermissionThroughRole($permission);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Admin\Photo  $photo
     * @return mixed
     */
    public function restore(User $user, Photo $photo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Admin\Photo  $photo
     * @return mixed
     */
    public function forceDelete(User $user, Photo $photo)
    {
        //
    }
}
