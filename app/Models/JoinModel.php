<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Cls;
class JoinModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'gname',
        'email',
        'cname',
        'age',
        'phone',
        'class_id'
    ];

    public function class(){
        return $this->belongsTo(Cls::class);
    }
}
