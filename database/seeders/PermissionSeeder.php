<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\PermissionUser;
use App\Models\Role;
use App\Models\RoleUser;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        مدیریت کاربران
        */
        Permission::create([
           'name' => 'view-users',
            'label'=>'دیدن کاربران'
        ]);

        Permission::create([
           'name' => 'add-users',
            'label'=>'اضافه کردن کاربر'
        ]);

        Permission::create([
           'name' => 'edit-users',
            'label'=>'ویرایش کاربران'
        ]);

        Permission::create([
           'name' => 'delete-users',
            'label'=>'حذف کاربران'
        ]);
        /*
        مدیریت کارمندان
        */
        Permission::create([
           'name' => 'add-staff',
            'label'=>'اضافه کردن کارمند'
        ]);

        Permission::create([
           'name' => 'edit-staff',
            'label'=>'ویرایش کارمندان'
        ]);

        Permission::create([
           'name' => 'edit-staff-permissions',
            'label'=>'ویرایش دسترسی های کارمندان'
        ]);

        Permission::create([
           'name' => 'delete-staff',
            'label'=>'حذف کارمندان'
        ]);
        /*
        مدیریت درخواست ها
        */

        Permission::create([
           'name' => 'view-submission',
            'label'=>'دیدن درخواست ها'
        ]);

        Permission::create([
           'name' => 'status-submission',
            'label'=>'امکان ثبت وضعیت برای درخواست ها'
        ]);

        Permission::create([
           'name' => 'view-submission',
            'label'=>'امکان دسترسی به فایل کتاب ها'
        ]);

        /*
        roles
        */

        /*
        مدیر کاربران
        */
        $role = Role::create([
            'name' => 'user-manager',
            'label' => 'مدیریت کاربران'
        ]);
        $role->permissions()->sync([1,2,3,4]);

        /*
        مدیر کارمندان
        */
        $role = Role::create([
            'name' => 'staff-manager',
            'label' => 'مدیریت کارمندان'
        ]);
        $role->permissions()->sync([5,6,7,8]);
        /*
        مدیر درخواست ها
        */
        $role = Role::create([
            'name' => 'staff-manager',
            'label' => 'مدیریت درخواست ها'
        ]);
        $role->permissions()->sync([9,10,11]);
    }
}
