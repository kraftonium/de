<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Orders extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__orders';
    protected $primarykey = 'id';

    //means aa order kone lidho hato dealer/admin mathi ?
    public function orderByWhom()
    {
        return $this->belongsTo(D_Users::class, 'user_id');
    }

    public function customerDetails()
    {
        // customer_id in D_Orders matches user_id in D_Customers
        return $this->belongsTo(D_Customers::class, 'customer_id', 'id');
    }

    // Actual user relationship (customer_id is really a user id)
    public function orderByCustomer()
    {
        // return $this->belongsTo(D_Users::class, 'customer_id', 'id');
        return $this->belongsTo(D_Customers::class, 'customer_id', 'id');
    }
}
