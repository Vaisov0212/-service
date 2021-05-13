<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $table='feedback';
    public $fillable=[
        'name',
        'phone',
        'organization',
        'service_type',
        'address',
        'report'
    ];
}
