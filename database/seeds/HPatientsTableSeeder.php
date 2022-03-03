<?php

use Illuminate\Database\Seeder;

class HPatientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('h_patients')->delete();
        
        \DB::table('h_patients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Talemul Islam',
                'phone' => '01937517989',
                'emergency_phone' => NULL,
                'address' => 'Tristar Imazuddin,Cha-134/2,North Badda, Gopiapara, Dhaka-1212.',
                'permanent_address' => NULL,
                'photo' => NULL,
                'city' => 'Dhaka',
                'permanent_city' => 'Dhaka',
                'marital_status' => NULL,
                'spouse_name' => NULL,
                'spouse_phone' => NULL,
                'father_name' => NULL,
                'mother_name' => NULL,
                'father_phone' => NULL,
                'mother_phone' => NULL,
                'date_of_birth' => NULL,
                'occupation' => NULL,
                'hobby' => NULL,
                'created_at' => '2020-07-25 13:49:30',
                'updated_at' => '2020-07-25 13:49:30',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tarek Mahmud',
                'phone' => '012345643543',
                'emergency_phone' => NULL,
                'address' => 'Tristar Imazuddin,Cha-134/2,North Badda, Gopiapara, Dhaka-1212.',
                'permanent_address' => NULL,
                'photo' => NULL,
                'city' => 'Dhaka',
                'permanent_city' => 'Dhaka',
                'marital_status' => NULL,
                'spouse_name' => NULL,
                'spouse_phone' => NULL,
                'father_name' => NULL,
                'mother_name' => NULL,
                'father_phone' => NULL,
                'mother_phone' => NULL,
                'date_of_birth' => NULL,
                'occupation' => NULL,
                'hobby' => NULL,
                'created_at' => '2020-07-25 13:50:03',
                'updated_at' => '2020-07-25 13:50:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}