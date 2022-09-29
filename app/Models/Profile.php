<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    protected $fillable = [
        'id',
        'name',
        'studID',
        'year',
        'course',
        'phoneNum',
        'gender',
        'image',
    ];
}
