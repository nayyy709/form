<?php

namespace App\Models;

use CodeIgniter\Model;

class Assessment_model extends Model
{

    protected $table = 'pasien';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['no_registration', 'class_room_id', 'examination_date', 'ageyear', 'agemonth', 'ageday', 'thename', 'theaddress', 'gender', 'alloanamnesis_contact', 'thenik', 'date_of_birth'];
}
