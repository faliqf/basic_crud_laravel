<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Personal extends Model{
    protected $table = 'personal_infos';

    protected $fillable = [
		'name', 'email', 'phone_no', 'address'
    ];
}
