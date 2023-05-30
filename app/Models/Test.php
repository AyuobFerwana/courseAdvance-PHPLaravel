<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory , SoftDeletes;
    // const DELETED_AT = 'deleted_at';
    protected $fillable=[
        'name',
        'content'
    ];

    public function getCreatedAtAttribute($value){
        return date('d-m / h:i' , strtotime($value));
    }

    public function getUpdatedAtAttribute($value){
        return date('D:m \ H:i' , strtotime($value));
    }
}
