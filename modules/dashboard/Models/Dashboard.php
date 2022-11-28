<?php

namespace Modules\Dashboard\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dashboard extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
     
    ];
    
    protected static function newFactory()
    {
        // return \Modules\Signin\Database\factories\SigninFactory::new();
    }
}
