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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'creditLimit'
    ];

    /**
     * Get the customer's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->lastName}";
    }

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
