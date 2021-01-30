<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone','address','email','whatsapp','telegram','youtube','twitter','facebook','map','logo'];
}
