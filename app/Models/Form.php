<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'useremail',
        'password',
        'mobilenumber',
        'phonenumber',
        'userage',
        'usercity',
        'imageupload'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
