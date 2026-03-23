<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Taluka_Active_Inactive_Dealerships extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__taluka__active__inactive__dealerships';
    protected $primarykey = 'id';
    
    public function whoseDealer()
    {
        return $this->belongsTo(D_Users::class, 'whose_dealer');
    }

    public function underDealer()
    {
        return $this->belongsTo(D_Users::class, 'under_whom');
    }

    public function District()
    {
        return $this->belongsTo(D_District_Active_Inactive_Dealerships::class, 'district');
    }
}