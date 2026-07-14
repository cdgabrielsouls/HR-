<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   protected $fillable = [
    'employee_id',
    'first_name',
    'middle_name',
    'last_name',
    'suffix',
    'gender',
    'marital_status',
    'nationality',
    'profile_picture',
    'address',
    'phone',
    'department',
    'position',
    'hire_date',
    'work_schedule',
    'email',
    'company_email',
    'temporary_password',
    'birth_certificate',
    'curriculum_vitae',
    'valid_id',
    'medical_certificate',
    'signature',
];
   
}