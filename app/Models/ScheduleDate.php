<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleDate extends Model
{
    protected $table = 'h_schedule_date';
    public $fillable=['date','open_time','close_time','status'];
}
