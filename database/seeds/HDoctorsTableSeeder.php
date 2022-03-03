<?php

use Illuminate\Database\Seeder;

class HDoctorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('h_doctors')->delete();
        
        \DB::table('h_doctors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dr. Horora Awar',
                'description' => '•  He is trained in implant prosthesis from his home country & abroad.

•  He has worked in a good number of reputed institutions for the last 20 years. 

•  He has also been in the teaching profession for the last 18 years and working as Professor currently.

•  As a Prosthodontist, his special expertise is in artificial replacement of missing teeth 
such as crown, bridge, implant & maxillofacial prosthesis. 

•  He is also expert in high tech endodontic procedures such as root canal treatment & 
endo-surgery.',
                'specialty' => 'Dentist',
                'title' => 'Consultant  Dental & Maxillofacial Surgery',
            'degrees' => 'BDS (Bachelor of Dental Surgery)',
                'departnemt_id' => 1,
                'date_of_birth' => NULL,
                'photo' => NULL,
                'phone' => '01234567890',
                'emergency_phone' => NULL,
                'serial_phone' => NULL,
                'office_phone' => NULL,
                'address' => 'Tristar Imazuddin,Cha-134/2,North Badda, Gopiapara, Dhaka-1212., Badda, Dhaka - North, Dhaka
Tristar Imazuddin,Cha-134/2,North Badda, Gopiapara, Dhaka-1212., Badda, Dhaka - North, Dhaka',
                'permanent_address' => 'Tristar Imazuddin,Cha-134/2,North Badda, Gopiapara, Dhaka-1212., Badda, Dhaka - North, Dhaka',
                'marital_status' => NULL,
                'spouse_phone' => NULL,
                'spouse_name' => NULL,
                'experienced_details' => NULL,
                'created_at' => '2020-07-25 13:47:30',
                'updated_at' => '2020-07-25 13:47:30',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
            'name' => 'Prof. (Dr.) Motiur Rahman Molla',
                'description' => '•	The most reputed senior Dental Surgeon in Bangladesh. 

•	With multiple publications in the most highly reputed medical journals around the world. 

•	He is the choice doctor for all dental and oral procedures including oral cancer, dental implants, facial bone trauma/fractures, jaw tumors, and dental reconstruction. 

•	Obtained his Bachelor of Dental Surgery from Dhaka University. Received his post-graduate diploma in Oral and Maxillofacial Surgery from the world-renowned Osaka University in Japan.

•	Achieved his FCPS in Oral and Maxillofacial Surgery from BCPS. After which he received specialized training in the field from hospitals in Australia and Canada.',
                'specialty' => 'Dental Surgeon',
                'title' => 'Coordinator & Senior Consultant  Dental & Maxillofacial Surgery',
                'degrees' => 'Bachelor of Dental Surgery',
                'departnemt_id' => 2,
                'date_of_birth' => '1960-04-15',
                'photo' => NULL,
                'phone' => NULL,
                'emergency_phone' => NULL,
                'serial_phone' => NULL,
                'office_phone' => NULL,
                'address' => NULL,
                'permanent_address' => NULL,
                'marital_status' => NULL,
                'spouse_phone' => NULL,
                'spouse_name' => NULL,
                'experienced_details' => NULL,
                'created_at' => '2020-07-25 13:49:15',
                'updated_at' => '2020-07-25 13:49:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}