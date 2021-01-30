<?php
namespace App\Traits;

use App\Models\Permission;
use App\Models\Role;

trait HasRoles {
    public function hasRole(... $roles) {
        
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }
    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role){

            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }
}