<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'productCode';
    public $incrementing = false;
    public $timestamps = false;

    public function getProductLine() {
        return $this->belongsTo(ProductLine::class, 'productLine', 'productLine');
    }
}
