<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'h_hospitals';

    public function services()
    {
        return $this->hasMany(Service::class, 'hospital_id', 'id');
    }
}
