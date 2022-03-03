<?php

use Illuminate\Database\Seeder;

class HHospitalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('h_hospitals')->delete();
        
        \DB::table('h_hospitals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Modern Dental Clinic',
                'address' => 'Nurjahan road, Mohammadpur dhaka.',
                'phone' => '01937517989',
                'email' => 'info@talemul.com',
                'descriptions' => 'Modern dentistry involves medical science and medical procedures, and both are focused on the prevention and treatment of our dental parts, including our mouth, gums, and teeth. Dentistry also involves the diagnosing of gum and tooth disease. However, modern day dentistry is much more!',
                'created_at' => '2020-07-25 13:05:18',
                'updated_at' => '2020-07-25 13:05:18',
            ),
        ));
        
        
    }
}