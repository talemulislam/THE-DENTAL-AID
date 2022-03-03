<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescription extends Model
{
    use SoftDeletes;

    protected $table = 'h_prescriptions';
//    protected $casts = [
//        'problem_details' =>'json',
//        'test_details' =>'json',
//        'medicine_details' =>'json',
//        'instruction_details' =>'json',
//        'next_test_details' =>'json',
//    ];

//    public function getProblemDetailsAttribute($value)
//    {   // dd($value);
//        return array_values(json_decode($value, true) ?: []);
//    }
//
//    public function setProblemDetailsAttribute($value)
//    {
//        $this->attributes['problem_details'] = json_encode(array_values($value));
//    }
    public function test_details()
    {
        return $this->hasMany(TestDetails::class, 'prescription_id', 'id');
    }
    public function medicine_details()
    {
        return $this->hasMany(MedicineDetails::class, 'prescription_id', 'id');
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id','id');
    }
}
