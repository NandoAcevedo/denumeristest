<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'suburb',
        'suburb_type',
        'township',
        'state',
        'city',
        'cp',
        'state_code',
        'office_code',
        'township_code',
        'suburb_code',
        'zone',
        'city_code'
    ];
}