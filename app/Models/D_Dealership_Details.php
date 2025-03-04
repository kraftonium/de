<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Dealership_Details extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__dealership__details';
    protected $primarykey = 'id';

    public function user()
    {
        return $this->belongsTo(D_Users::class, 'user_id');
    }

    public function whoseuser()
    {
        return $this->belongsTo(D_Users::class, 'whose_dealer');
    }
}
