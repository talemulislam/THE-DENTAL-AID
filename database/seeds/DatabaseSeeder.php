<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
        $this->call(AdminConfigTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(AdminOperationLogTableSeeder::class);
        $this->call(AdminPermissionsTableSeeder::class);
        $this->call(AdminRoleMenuTableSeeder::class);
        $this->call(AdminRolePermissionsTableSeeder::class);
        $this->call(AdminRoleUsersTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(AdminUserPermissionsTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
       // $this->call(AppointmentStatusTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(HAppointmentsTableSeeder::class);
        $this->call(HDoctorsTableSeeder::class);
        $this->call(HHospitalsTableSeeder::class);
        $this->call(HMedicinesTableSeeder::class);
        $this->call(HPatientsTableSeeder::class);
        $this->call(HPrescriptionsTableSeeder::class);
        $this->call(HUsersTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
    }
}
