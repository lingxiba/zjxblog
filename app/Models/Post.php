<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
//    protected $fillable = ['created_at','deleted_at','started_at','updated_at'];
    protected $dates = ['created_at','deleted_at','started_at','updated_at'];
    protected $table='tasks';
    protected $primaryKey='id';
    public $timestamps = false;
}
