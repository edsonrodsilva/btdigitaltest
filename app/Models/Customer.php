<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customerNumber';
    public $incrementing = false;
    public $timestamps = false;

    public function employer() {
        return $this->belongsTo(Employer::class, 'salesRepEmployeeNumber', 'employeeNumber');
    }

    public function orders() {
        return $this->hasMany(Order::class, 'customerNumber', 'customerNumber');
    }

    public function payments() {
        return $this->hasMany(Payment::class, 'customerNumber', 'customerNumber');
    }
}
