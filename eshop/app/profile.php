<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'firstname','lastname','birthdate', 'gender', 'email', 'country','user_id'
    ];
}
