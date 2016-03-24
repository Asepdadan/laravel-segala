<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model as Eloquent;


class User extends Eloquent  
{
    protected $table = 'users';
    

    protected $fillable = [
        'name', 'email', 'password',
    ];


    
}
