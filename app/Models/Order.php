<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'orderNumber';
    public $incrementing = false;
    public $timestamps = false;

    public function customer() {
        return $this->belongsTo(Customer::class, 'customerNumber', 'customerNumber');
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'orderNumber', 'orderNumber');
    }
}
