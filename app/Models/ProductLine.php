<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    use HasFactory;

    protected $table = 'productlines';
    protected $primaryKey = 'productLine';
    public $incrementing = false;
    public $timestamps = false;

    //primary key is not an integer,
    protected $keyType = 'string';
}
