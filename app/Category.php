<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table='category';
    public $fillable=[
        'name',
        'slug'
    ];

    public function shoping(){
       return $this->hasMany(Shoping::class,'id','id_cat');
    }
}
