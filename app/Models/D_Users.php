<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Users extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__users';
    protected $primarykey = 'id';
}