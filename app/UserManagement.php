<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{
    protected $fillable=['fullname','email','gender','phonenumber','address','zipcode'];
}
