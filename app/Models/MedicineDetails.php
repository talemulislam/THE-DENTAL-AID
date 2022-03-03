<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicineDetails extends Model
{
    use SoftDeletes;

    protected $table = 'h_medicine_details';
    public function medicine()
    {
        return $this->belongsTo(Medicine::class,'brand_name','id');
    }
}
