<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HospitalUser extends Model
{
    use SoftDeletes;

    protected $table = 'h_users';
}
