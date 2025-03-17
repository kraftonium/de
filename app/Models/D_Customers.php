<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Customers extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__customers';
    protected $primarykey = 'id';

    public function user()
    {
        return $this->belongsTo(D_Users::class, 'user_id');
    }

    public function whoseuser()
    {
        return $this->belongsTo(D_Users::class, 'whose_customer');
    }

    public function vehicle()
    {
        return $this->belongsTo(D_Vehicles::class, 'vehicle_id');
    }

    // Customer.php
    public function orders()
    {
        return $this->hasMany(D_Orders::class, 'customer_id', 'id');
    }
}