<?php

use Illuminate\Database\Seeder;

class AppointmentStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('appointment_status')->delete();
        
        
        
    }
}