<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JoinModel;

class Cls extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'class',
    ];

    public function kids(){
        return $this->hasMany(JoinModel::class);
    }
}


