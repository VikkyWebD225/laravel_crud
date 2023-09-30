<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [

        'image',
        'firstname',
        'lastname',
        'dob',
        'mobileno',
        'gender',

    ];

    protected $table = "students";
}