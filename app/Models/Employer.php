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
}
