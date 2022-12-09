<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   use Uuid;
    protected $fillable = [


        'name',
        'license_plate',
        'model',
        'manufacturer',
    ];
}
