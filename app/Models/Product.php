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

    //primary key is not an integer,
    protected $keyType = 'string';

    public function getProductLine() {
        return $this->belongsTo(ProductLine::class, 'productLine', 'productLine');
    }
}
