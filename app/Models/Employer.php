<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'employeeNumber';
    public $incrementing = false;
    public $timestamps = false;

    public function office() {
        return $this->belongsTo(Office::class, 'officeCode', 'officeCode');
    }

    public function getReportsTo() {
        return $this->belongsTo(Employer::class, 'reportsTo', 'employeeNumber');
    }

}
