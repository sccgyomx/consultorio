<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical_patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'gender',
        'date_of_birth',
        'address',
        'phone',
        'weight',
        'height',
    ];
}
