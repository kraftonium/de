<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Stocks extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__stocks';
    protected $primarykey = 'id';

    public function whoseStock()
    {
        return $this->belongsTo(D_Users::class, 'whose_stock');
    }

    public function vehicle()
    {
        return $this->belongsTo(D_Vehicles::class, 'vehicle_id');
    }
}
