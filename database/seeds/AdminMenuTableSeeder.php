<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Dashboard',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 7,
                'title' => 'Helpers',
                'icon' => 'fa-gears',
                'uri' => '',
                'permission' => NULL,
                'created_at' => '2020-07-25 09:32:49',
                'updated_at' => '2020-07-25 09:32:49',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 8,
                'order' => 8,
                'title' => 'Scaffold',
                'icon' => 'fa-keyboard-o',
                'uri' => 'helpers/scaffold',
                'permission' => NULL,
                'created_at' => '2020-07-25 09:32:49',
                'updated_at' => '2020-07-25 09:32:49',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 8,
                'order' => 9,
                'title' => 'Database terminal',
                'icon' => 'fa-database',
                'uri' => 'helpers/terminal/database',
                'permission' => NULL,
                'created_at' => '2020-07-25 09:32:49',
                'updated_at' => '2020-07-25 09:32:49',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 8,
                'order' => 10,
                'title' => 'Laravel artisan',
                'icon' => 'fa-terminal',
                'uri' => 'helpers/terminal/artisan',
                'permission' => NULL,
                'created_at' => '2020-07-25 09:32:49',
                'updated_at' => '2020-07-25 09:32:49',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 8,
                'order' => 11,
                'title' => 'Routes',
                'icon' => 'fa-list-alt',
                'uri' => 'helpers/routes',
                'permission' => NULL,
                'created_at' => '2020-07-25 09:32:49',
                'updated_at' => '2020-07-25 09:32:49',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'Appointment',
                'icon' => 'fa-bars',
                'uri' => 'appointment',
                'permission' => NULL,
                'created_at' => '2020-07-25 12:57:13',
                'updated_at' => '2020-07-25 12:57:13',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'Department',
                'icon' => 'fa-bars',
                'uri' => 'department',
                'permission' => NULL,
                'created_at' => '2020-07-25 12:57:56',
                'updated_at' => '2020-07-25 12:57:56',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'Doctor',
                'icon' => 'fa-bars',
                'uri' => 'doctor',
                'permission' => NULL,
                'created_at' => '2020-07-25 12:58:20',
                'updated_at' => '2020-07-25 12:58:20',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'hospital',
                'icon' => 'fa-hospital-o',
                'uri' => 'hospital',
                'permission' => NULL,
                'created_at' => '2020-07-25 12:58:40',
                'updated_at' => '2020-07-25 12:58:40',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'medicine',
                'icon' => 'fa-bars',
                'uri' => 'medicine',
                'permission' => NULL,
                'created_at' => '2020-07-25 12:58:58',
                'updated_at' => '2020-07-25 12:58:58',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'patient',
                'icon' => 'fa-bars',
                'uri' => 'patient',
                'permission' => NULL,
                'created_at' => '2020-07-25 12:59:08',
                'updated_at' => '2020-07-25 12:59:08',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'prescription',
                'icon' => 'fa-asl-interpreting',
                'uri' => 'prescription',
                'permission' => NULL,
                'created_at' => '2020-07-25 12:59:40',
                'updated_at' => '2020-07-25 12:59:40',
            ),
        ));
        
        
    }
}