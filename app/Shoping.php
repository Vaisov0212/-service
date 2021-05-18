<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoping extends Model
{
   public $table='shoppings';
   public $fillable=[
    'name',
    'description',
    'money',
    'shop_img',
    'id_cat'
   ];

   public function category(){
       return $this->hasOne(Category::class, 'id_cat', 'id');
   }

}
