<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Gps extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'd__gps';
    protected $primarykey = 'id';
}
