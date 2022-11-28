<?php

namespace Modules\Register\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Register extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'business_name',
        'business_email',
        'phone_no',
        'user_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
    
    protected static function newFactory()
    {
        // return \Modules\Signup\Database\factories\SignupFactory::new();
    }
}
