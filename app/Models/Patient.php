<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $table = 'h_patients';
    public function medical_history()
    {
        return $this->belongsToMany(MedicalHistory::class);
    }
    public function home_care()
    {
        return $this->belongsToMany(HomeCare::class);
    }
    public function habit()
    {
        return $this->belongsToMany(Habit::class);
    }
}
