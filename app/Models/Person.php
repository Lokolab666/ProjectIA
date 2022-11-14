<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Person extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'person';

    protected $fillable = [
        'card_Id',
        'name',
        'last_name',
        'age',
        'user_person',
        'address',
        'phone'
    ];
/*
    protected $hidden = [
        'password',
        'remember_token',
    ];
*/
}
