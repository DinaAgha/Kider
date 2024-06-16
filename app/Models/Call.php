<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Join extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tname',
        'temail',
        'level',
        'exp',
        'tphone'
    ];

}
