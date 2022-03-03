<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'h_services';
    public $fillable=['service_name','service_description','service_time'];
}
