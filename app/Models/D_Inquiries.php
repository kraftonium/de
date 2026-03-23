<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Inquiries extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'd__inquiries';
    protected $primarykey = 'id';

    public function whoseInquiry()
    {
        return $this->belongsTo(D_Users::class, 'whose_inquiry');
    }
}
