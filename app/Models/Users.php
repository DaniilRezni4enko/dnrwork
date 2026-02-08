<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name',
        'surname',
        'patronymic',
        'login',
        'email',
        'password',
        'age',
        'work experience',
        'photo',
        'phone number',
        'specialization',
        'summary',
        'number of responses',
        'responses',
        'users vacancies',
        'responses to user vacancies',
        'the number of responses to user vacancies',
        'chats',
        'viewed vacancies',
        'favourites'
    ];
}
