<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('h_departments')->delete();

        \DB::table('h_departments')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Dental Care',
                'picture' => NULL,
                'details' => 'Department of Dental Care offers full scope of the dental specialty, including general dentistry and specialist services. Our aim is to deliver oral health care of the highest standard to our patients through  modern technology. The department provides diagnosis, management  and injuries related to the function and aesthetics of the teeth, gums and jaws',
                'main_specialist' => 'Dr. Horora Awar',
                'created_at' => '2020-07-25 13:11:39',
                'updated_at' => '2020-07-25 13:11:39',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Dental Maxillofacial Surgery',
                'picture' => NULL,
            'details' => 'Department of Dental & Maxillofacial Surgery of Evercare Hospital Dhaka offers full scope of the dental specialty, including general dentistry and specialist services in oral & maxillofacial surgery, orthodontics and restorative dentistry (endodontics and prosthodontics). Our aim is to deliver oral health care of the highest standard to our patients through experienced dental surgeons and modern technology. The department provides diagnosis, management and surgical treatment of defects and injuries related to the function and aesthetics of the teeth, gums and jaws',
            'main_specialist' => 'Prof. (Dr.) Motiur Rahman Molla',
                'created_at' => '2020-07-25 13:12:35',
                'updated_at' => '2020-07-25 13:12:35',
                'deleted_at' => NULL,
            ),
        ));


    }
}
