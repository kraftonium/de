<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Vehicles extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__vehicles';
    protected $primarykey = 'id';

    public function vehicletype()
    {
        return $this->belongsTo(D_Vehicle_Type::class, 'type_of_vehicle_id');
    }
}