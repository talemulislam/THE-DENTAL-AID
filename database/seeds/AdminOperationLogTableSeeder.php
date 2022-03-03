<?php

use Illuminate\Database\Seeder;

class AdminOperationLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_operation_log')->delete();
        
        \DB::table('admin_operation_log')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'path' => 'admin/auth/users',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 09:28:49',
                'updated_at' => '2020-07-25 09:28:49',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 09:32:06',
                'updated_at' => '2020-07-25 09:32:06',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 09:32:54',
                'updated_at' => '2020-07-25 09:32:54',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 09:33:10',
                'updated_at' => '2020-07-25 09:33:10',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 09:33:24',
                'updated_at' => '2020-07-25 09:33:24',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'path' => 'admin/locale',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"_token":"HgqjSf43jPoGbRxn16d9pXbYlqYMVDDeJA6gfPGk","locale":"zh-CN"}',
                'created_at' => '2020-07-25 09:33:27',
                'updated_at' => '2020-07-25 09:33:27',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 09:33:27',
                'updated_at' => '2020-07-25 09:33:27',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 09:34:01',
                'updated_at' => '2020-07-25 09:34:01',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'path' => 'admin/helpers/routes',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 12:53:36',
                'updated_at' => '2020-07-25 12:53:36',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'path' => 'admin/helpers/routes',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:53:49',
                'updated_at' => '2020-07-25 12:53:49',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 12:53:56',
                'updated_at' => '2020-07-25 12:53:56',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 12:54:07',
                'updated_at' => '2020-07-25 12:54:07',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:54:10',
                'updated_at' => '2020-07-25 12:54:10',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'path' => 'admin/auth/logout',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 12:54:17',
                'updated_at' => '2020-07-25 12:54:17',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'path' => 'admin/auth/login',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:55:13',
                'updated_at' => '2020-07-25 12:55:13',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'path' => 'admin/locale',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"locale":"en"}',
                'created_at' => '2020-07-25 12:55:42',
                'updated_at' => '2020-07-25 12:55:42',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'path' => 'admin/auth/login',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:55:42',
                'updated_at' => '2020-07-25 12:55:42',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'path' => 'admin/auth/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin","remember":"1","_token":"ImJ9WV8cX4ROuGzB0i30lLA75UfljYKYCohOe0co"}',
                'created_at' => '2020-07-25 12:55:51',
                'updated_at' => '2020-07-25 12:55:51',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:55:52',
                'updated_at' => '2020-07-25 12:55:52',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 12:56:16',
                'updated_at' => '2020-07-25 12:56:16',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"parent_id":"0","title":"Appointment","icon":"fa-bars","uri":"appointment","roles":[null],"permission":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9"}',
                'created_at' => '2020-07-25 12:57:13',
                'updated_at' => '2020-07-25 12:57:13',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:57:13',
                'updated_at' => '2020-07-25 12:57:13',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:57:16',
                'updated_at' => '2020-07-25 12:57:16',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'path' => 'admin/appointment',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:57:28',
                'updated_at' => '2020-07-25 12:57:28',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"parent_id":"0","title":"Department","icon":"fa-bars","uri":"department","roles":[null],"permission":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9"}',
                'created_at' => '2020-07-25 12:57:55',
                'updated_at' => '2020-07-25 12:57:55',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:57:56',
                'updated_at' => '2020-07-25 12:57:56',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"parent_id":"0","title":"Doctor","icon":"fa-bars","uri":"doctor","roles":[null],"permission":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9"}',
                'created_at' => '2020-07-25 12:58:20',
                'updated_at' => '2020-07-25 12:58:20',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:58:21',
                'updated_at' => '2020-07-25 12:58:21',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"parent_id":"0","title":"hospital","icon":"fa-hospital-o","uri":"hospital","roles":[null],"permission":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9"}',
                'created_at' => '2020-07-25 12:58:40',
                'updated_at' => '2020-07-25 12:58:40',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:58:41',
                'updated_at' => '2020-07-25 12:58:41',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"parent_id":"0","title":"medicine","icon":"fa-bars","uri":"medicine","roles":[null],"permission":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9"}',
                'created_at' => '2020-07-25 12:58:58',
                'updated_at' => '2020-07-25 12:58:58',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:58:59',
                'updated_at' => '2020-07-25 12:58:59',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"parent_id":"0","title":"patient","icon":"fa-bars","uri":"patient","roles":[null],"permission":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9"}',
                'created_at' => '2020-07-25 12:59:08',
                'updated_at' => '2020-07-25 12:59:08',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:59:09',
                'updated_at' => '2020-07-25 12:59:09',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"parent_id":"0","title":"prescription","icon":"fa-asl-interpreting","uri":"prescription","roles":[null],"permission":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9"}',
                'created_at' => '2020-07-25 12:59:40',
                'updated_at' => '2020-07-25 12:59:40',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'path' => 'admin/auth/menu',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 12:59:40',
                'updated_at' => '2020-07-25 12:59:40',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'path' => 'admin/composer-viewer',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:00:21',
                'updated_at' => '2020-07-25 13:00:21',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'path' => 'admin/department',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:00:56',
                'updated_at' => '2020-07-25 13:00:56',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'path' => 'admin/doctor',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:00:58',
                'updated_at' => '2020-07-25 13:00:58',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'path' => 'admin/hospital',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:00:59',
                'updated_at' => '2020-07-25 13:00:59',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'path' => 'admin/hospital/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:01:01',
                'updated_at' => '2020-07-25 13:01:01',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'path' => 'admin/hospital',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"name":"Modern Dental Clinic","address":"Nurjahan road, Mohammadpur dhaka.","phone":"01937517989","email":"info@talemul.com","descriptions":"Modern dentistry involves medical science and medical procedures, and both are focused on the prevention and treatment of our dental parts, including our mouth, gums, and teeth. Dentistry also involves the diagnosing of gum and tooth disease. However, modern day dentistry is much more!","_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9","_previous_":"http:\\/\\/localhost:8000\\/admin\\/hospital"}',
                'created_at' => '2020-07-25 13:05:18',
                'updated_at' => '2020-07-25 13:05:18',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'path' => 'admin/hospital',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:05:18',
                'updated_at' => '2020-07-25 13:05:18',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'path' => 'admin/department',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:05:35',
                'updated_at' => '2020-07-25 13:05:35',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'path' => 'admin/department/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:05:37',
                'updated_at' => '2020-07-25 13:05:37',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'path' => 'admin/doctor',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:05:39',
                'updated_at' => '2020-07-25 13:05:39',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'path' => 'admin/department',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:05:42',
                'updated_at' => '2020-07-25 13:05:42',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'path' => 'admin/department/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:05:46',
                'updated_at' => '2020-07-25 13:05:46',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'path' => 'admin/department/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:07:48',
                'updated_at' => '2020-07-25 13:07:48',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'path' => 'admin/department',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"name":"Dental Care","details":"Department of Dental Care offers full scope of the dental specialty, including general dentistry and specialist services. Our aim is to deliver oral health care of the highest standard to our patients through  modern technology. The department provides diagnosis, management  and injuries related to the function and aesthetics of the teeth, gums and jaws","main_specialist":"Dr. Horora Awar","_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9"}',
                'created_at' => '2020-07-25 13:11:39',
                'updated_at' => '2020-07-25 13:11:39',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'path' => 'admin/department',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:11:40',
                'updated_at' => '2020-07-25 13:11:40',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'path' => 'admin/department/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:11:43',
                'updated_at' => '2020-07-25 13:11:43',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'path' => 'admin/department',
                'method' => 'POST',
                'ip' => '127.0.0.1',
            'input' => '{"name":"Dental Maxillofacial Surgery","details":"Department of Dental & Maxillofacial Surgery of Evercare Hospital Dhaka offers full scope of the dental specialty, including general dentistry and specialist services in oral & maxillofacial surgery, orthodontics and restorative dentistry (endodontics and prosthodontics). Our aim is to deliver oral health care of the highest standard to our patients through experienced dental surgeons and modern technology. The department provides diagnosis, management and surgical treatment of defects and injuries related to the function and aesthetics of the teeth, gums and jaws","main_specialist":"Prof. (Dr.) Motiur Rahman Molla","_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9","_previous_":"http:\\/\\/localhost:8000\\/admin\\/department"}',
                'created_at' => '2020-07-25 13:12:35',
                'updated_at' => '2020-07-25 13:12:35',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'path' => 'admin/department',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:12:35',
                'updated_at' => '2020-07-25 13:12:35',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:12:42',
                'updated_at' => '2020-07-25 13:12:42',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:12:53',
                'updated_at' => '2020-07-25 13:12:53',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'path' => 'admin/doctor',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:13:21',
                'updated_at' => '2020-07-25 13:13:21',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'path' => 'admin/doctor/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:45:20',
                'updated_at' => '2020-07-25 13:45:20',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 1,
                'path' => 'admin/department',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:45:27',
                'updated_at' => '2020-07-25 13:45:27',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 1,
                'path' => 'admin/doctor',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:45:35',
                'updated_at' => '2020-07-25 13:45:35',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 1,
                'path' => 'admin/doctor/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:45:36',
                'updated_at' => '2020-07-25 13:45:36',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 1,
                'path' => 'admin/doctor',
                'method' => 'POST',
                'ip' => '127.0.0.1',
            'input' => '{"name":"Dr. Horora Awar","description":"\\u2022  He is trained in implant prosthesis from his home country & abroad.\\r\\n\\r\\n\\u2022  He has worked in a good number of reputed institutions for the last 20 years. \\r\\n\\r\\n\\u2022  He has also been in the teaching profession for the last 18 years and working as Professor currently.\\r\\n\\r\\n\\u2022  As a Prosthodontist, his special expertise is in artificial replacement of missing teeth \\r\\nsuch as crown, bridge, implant & maxillofacial prosthesis. \\r\\n\\r\\n\\u2022  He is also expert in high tech endodontic procedures such as root canal treatment & \\r\\nendo-surgery.","specialty":"Dentist","title":"Consultant  Dental & Maxillofacial Surgery","degrees":"BDS (Bachelor of Dental Surgery)","departnemt_id":"1","date_of_birth":null,"phone":"01234567890","emergency_phone":null,"serial_phone":null,"office_phone":null,"address":"Tristar Imazuddin,Cha-134\\/2,North Badda, Gopiapara, Dhaka-1212., Badda, Dhaka - North, Dhaka\\r\\nTristar Imazuddin,Cha-134\\/2,North Badda, Gopiapara, Dhaka-1212., Badda, Dhaka - North, Dhaka","permanent_address":"Tristar Imazuddin,Cha-134\\/2,North Badda, Gopiapara, Dhaka-1212., Badda, Dhaka - North, Dhaka","marital_status":null,"spouse_phone":null,"spouse_name":null,"experienced_details":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9","_previous_":"http:\\/\\/localhost:8000\\/admin\\/doctor"}',
                'created_at' => '2020-07-25 13:47:30',
                'updated_at' => '2020-07-25 13:47:30',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 1,
                'path' => 'admin/doctor',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:47:31',
                'updated_at' => '2020-07-25 13:47:31',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 1,
                'path' => 'admin/doctor/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:47:36',
                'updated_at' => '2020-07-25 13:47:36',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 1,
                'path' => 'admin/doctor',
                'method' => 'POST',
                'ip' => '127.0.0.1',
            'input' => '{"name":"Prof. (Dr.) Motiur Rahman Molla","description":"\\u2022\\tThe most reputed senior Dental Surgeon in Bangladesh. \\r\\n\\r\\n\\u2022\\tWith multiple publications in the most highly reputed medical journals around the world. \\r\\n\\r\\n\\u2022\\tHe is the choice doctor for all dental and oral procedures including oral cancer, dental implants, facial bone trauma\\/fractures, jaw tumors, and dental reconstruction. \\r\\n\\r\\n\\u2022\\tObtained his Bachelor of Dental Surgery from Dhaka University. Received his post-graduate diploma in Oral and Maxillofacial Surgery from the world-renowned Osaka University in Japan.\\r\\n\\r\\n\\u2022\\tAchieved his FCPS in Oral and Maxillofacial Surgery from BCPS. After which he received specialized training in the field from hospitals in Australia and Canada.","specialty":"Dental Surgeon","title":"Coordinator & Senior Consultant  Dental & Maxillofacial Surgery","degrees":"Bachelor of Dental Surgery","departnemt_id":"2","date_of_birth":"1960-04-15","phone":null,"emergency_phone":null,"serial_phone":null,"office_phone":null,"address":null,"permanent_address":null,"marital_status":null,"spouse_phone":null,"spouse_name":null,"experienced_details":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9","_previous_":"http:\\/\\/localhost:8000\\/admin\\/doctor"}',
                'created_at' => '2020-07-25 13:49:15',
                'updated_at' => '2020-07-25 13:49:15',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 1,
                'path' => 'admin/doctor',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:49:15',
                'updated_at' => '2020-07-25 13:49:15',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 1,
                'path' => 'admin/patient',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:49:21',
                'updated_at' => '2020-07-25 13:49:21',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'path' => 'admin/patient/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:49:23',
                'updated_at' => '2020-07-25 13:49:23',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'path' => 'admin/patient',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"name":"Talemul Islam","phone":"01937517989","emergency_phone":null,"address":"Tristar Imazuddin,Cha-134\\/2,North Badda, Gopiapara, Dhaka-1212.","permanent_address":null,"city":"Dhaka","permanent_city":"Dhaka","marital_status":null,"spouse_name":null,"spouse_phone":null,"father_name":null,"mother_name":null,"father_phone":null,"mother_phone":null,"date_of_birth":null,"occupation":null,"hobby":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9","_previous_":"http:\\/\\/localhost:8000\\/admin\\/patient"}',
                'created_at' => '2020-07-25 13:49:30',
                'updated_at' => '2020-07-25 13:49:30',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'path' => 'admin/patient',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:49:31',
                'updated_at' => '2020-07-25 13:49:31',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'path' => 'admin/patient/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:49:33',
                'updated_at' => '2020-07-25 13:49:33',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'path' => 'admin/patient',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"name":"Tarek Mahmud","phone":"012345643543","emergency_phone":null,"address":"Tristar Imazuddin,Cha-134\\/2,North Badda, Gopiapara, Dhaka-1212.","permanent_address":null,"city":"Dhaka","permanent_city":"Dhaka","marital_status":null,"spouse_name":null,"spouse_phone":null,"father_name":null,"mother_name":null,"father_phone":null,"mother_phone":null,"date_of_birth":null,"occupation":null,"hobby":null,"_token":"jhd4PsvGUbN8diMMU6AK48dVHjdb44KMkxdgJod9","_previous_":"http:\\/\\/localhost:8000\\/admin\\/patient"}',
                'created_at' => '2020-07-25 13:50:03',
                'updated_at' => '2020-07-25 13:50:03',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'path' => 'admin/patient',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:50:04',
                'updated_at' => '2020-07-25 13:50:04',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'path' => 'admin/appointment',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:50:08',
                'updated_at' => '2020-07-25 13:50:08',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'path' => 'admin/appointment/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2020-07-25 13:50:11',
                'updated_at' => '2020-07-25 13:50:11',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'path' => 'admin/appointment/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:50:58',
                'updated_at' => '2020-07-25 13:50:58',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'path' => 'admin/appointment/create',
                'method' => 'GET',
                'ip' => '127.0.0.1',
                'input' => '[]',
                'created_at' => '2020-07-25 13:51:03',
                'updated_at' => '2020-07-25 13:51:03',
            ),
        ));
        
        
    }
}