<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;
class Permission extends EntrustPermission
{
    protected $table = 'permission';
    protected $fillable = ['id','name','display_name','description'];
}
