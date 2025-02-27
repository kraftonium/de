<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class D_Users extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__users';
    protected $primarykey = 'id';

    public function usertype()
    {
        return $this->belongsTo(D_Userstype::class, 'usertype_id');
    }
}