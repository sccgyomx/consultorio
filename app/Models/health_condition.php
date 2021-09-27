<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class health_condition extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',            
        'systolic_pressure',
        'diastolic_pressure',
        'oxigen_saturation',
        'temperature',
        'fasting_glucose',
        'postprandial_glucose',        
    ];
}
