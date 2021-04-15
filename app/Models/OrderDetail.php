<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'orderdetails';
    protected $primaryKey = 'orderNumber';
    public $incrementing = false;
    public $timestamps = false;

    public function product() {
        return $this->belongsTo(Product::class, 'productCode', 'productCode');
    }
}
