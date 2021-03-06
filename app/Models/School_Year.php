<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School_Year extends Model
{
    use SoftDeletes;
    protected $table = 'school_years';
    protected $fillable = ['id','title','status'];
    protected $dates = ['deleted_at'];
}
