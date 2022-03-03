<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '18',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '19',
                'title' => 'task_management_access',
            ],
            [
                'id'    => '20',
                'title' => 'task_status_create',
            ],
            [
                'id'    => '21',
                'title' => 'task_status_edit',
            ],
            [
                'id'    => '22',
                'title' => 'task_status_show',
            ],
            [
                'id'    => '23',
                'title' => 'task_status_delete',
            ],
            [
                'id'    => '24',
                'title' => 'task_status_access',
            ],
            [
                'id'    => '25',
                'title' => 'task_tag_create',
            ],
            [
                'id'    => '26',
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => '27',
                'title' => 'task_tag_show',
            ],
            [
                'id'    => '28',
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => '29',
                'title' => 'task_tag_access',
            ],
            [
                'id'    => '30',
                'title' => 'task_create',
            ],
            [
                'id'    => '31',
                'title' => 'task_edit',
            ],
            [
                'id'    => '32',
                'title' => 'task_show',
            ],
            [
                'id'    => '33',
                'title' => 'task_delete',
            ],
            [
                'id'    => '34',
                'title' => 'task_access',
            ],
            [
                'id'    => '35',
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => '36',
                'title' => 'hospital_create',
            ],
            [
                'id'    => '37',
                'title' => 'hospital_edit',
            ],
            [
                'id'    => '38',
                'title' => 'hospital_show',
            ],
            [
                'id'    => '39',
                'title' => 'hospital_delete',
            ],
            [
                'id'    => '40',
                'title' => 'hospital_access',
            ],
            [
                'id'    => '41',
                'title' => 'patient_create',
            ],
            [
                'id'    => '42',
                'title' => 'patient_edit',
            ],
            [
                'id'    => '43',
                'title' => 'patient_show',
            ],
            [
                'id'    => '44',
                'title' => 'patient_delete',
            ],
            [
                'id'    => '45',
                'title' => 'patient_access',
            ],
            [
                'id'    => '46',
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);

    }
}
