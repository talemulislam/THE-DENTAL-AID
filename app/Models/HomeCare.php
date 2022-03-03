<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeCare extends Model
{
    use SoftDeletes;
    protected $table = 'h_home_cares';
}
