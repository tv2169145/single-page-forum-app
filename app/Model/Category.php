<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
//    protected $fillable = [
//        'name',
//        'slug',
//    ];
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPathAttribute()
    {
        return asset("/api/category/$this->slug");
    }
}
