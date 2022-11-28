<?php

namespace Modules\Login\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Login extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'business_email',
        'password'
    ];
    
    protected static function newFactory()
    {
        // return \Modules\Signin\Database\factories\SigninFactory::new();
    }
}
