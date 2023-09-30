<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermodel extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'address',
        'phoneno',
    ];
    protected $table = "school";
}