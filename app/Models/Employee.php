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
    'civil_status',
    'nationality',
    'profile_picture',

     'address',
    'phone',

    'department',
    'position',
    'hire_date',
    'work_schedule',

    'email',
    'temporary_password',

    'birth_certificate',
    'curriculum_vitae',
    'valid_id',
    'medical_certificate',

  
'company_email',
'temporary_password',

'policy_1',
'policy_2',
'policy_3',
'policy_4',
'policy_5',
'policy_6',
];
   
}