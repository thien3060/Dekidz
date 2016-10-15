<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    protected $fillable = [
          "name",
          "number",
          "gender",
          "dob",
          "identity_card",
          "religion",
          "address",
          "department_id",
          "issued_by",
          "date_range",
          "phone",
          "email",
          "position",
          "degree",
          "father_name",
          "mother_name",
          "is_leaguer",
          "working_status",
          "start_day",
          "type_of_contract",
    ];
}
