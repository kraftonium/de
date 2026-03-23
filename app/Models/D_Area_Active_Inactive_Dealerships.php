<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Area_Active_Inactive_Dealerships extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__area__active__inactive__dealerships';
    protected $primarykey = 'id';

    public function whoseDealer()
    {
        return $this->belongsTo(D_Users::class, 'whose_dealer');
    }

    public function underDealer()
    {
        return $this->belongsTo(D_Users::class, 'under_whom');
    }

    public function Taluka()
    {
        return $this->belongsTo(D_Taluka_Active_Inactive_Dealerships::class, 'taluka');
    }
}
