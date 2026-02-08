<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'specialization',
        'minimum age',
        'maximum age',
        'photo',
        'type of payment',
        'address',
        'town',
        'the ability to work remotely',
        'description',
        'work experience',
        'work schedule',
        'phone number',
        'telegram'
    ];
}
