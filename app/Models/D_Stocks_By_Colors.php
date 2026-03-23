<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Stocks_By_Colors extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__stocks__by__colors';
    protected $primarykey = 'id';

    public function whoseStockColor()
    {
        return $this->belongsTo(D_Users::class, 'whose_stocks_id');
    }
}