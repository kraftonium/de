<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Contact_Us extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__contact__us';
    protected $primarykey = 'id';
}
