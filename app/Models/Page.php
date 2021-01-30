<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable= ['parent_id','title','content','user_id','published','menu','order','level','slug'];
    
    public function pages()
    {
        return $this->hasMany(Page::class,'parent_id');
    }

    public function childrenPages()
    {
        return $this->hasMany(Page::class,'parent_id')->with('Pages');
    }
}
