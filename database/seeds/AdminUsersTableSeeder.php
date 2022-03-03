<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$tTgd5lsY7Ef1LpmgagOEJ.Twuplw4QDcDB3w4B/MjJAD1Y258Jei6',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'UOfBsD4uuKBQNYU0ST4a7ktyR0ixzERl3tZVsEJpj392boe10tQjFN5lkkTQ',
                'created_at' => '2020-07-25 09:28:09',
                'updated_at' => '2020-07-25 09:28:09',
            ),
        ));
        
        
    }
}