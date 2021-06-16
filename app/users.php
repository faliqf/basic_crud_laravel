<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = 'users';

    protected $fillable = [
		'name', 'email', 'password'
    ];
}
