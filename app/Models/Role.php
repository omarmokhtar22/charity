<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','slug'];
    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission','roles_permissions');
    }

    public function users()
    {
        return $this->belongsToMany('App\User','users_roles');
    }
}
