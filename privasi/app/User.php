<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Eloquent  
{
    protected $table = 'users';

    public function articles() {
        return $this->hasMany('Article');
    }

    public function address() {
        return $this->hasOne('Address');
    }

    public function roles() {
        return $this->belongsToMany('Role','role_users');
    }

    public function city() {
        return $this->belongsTo('City');
}
