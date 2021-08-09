<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $staffRole = Role::where('name', 'staff')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@sains.com',
            'password' => Hash::make('12345678'),
            'department' => '',
            'office' => '',
        ]);

        $staff = User::create([
            'name' => 'Staff User',
            'email' => 'staff@sains.com',
            'password' => Hash::make('12345678'),
            'department' => '',
            'office' => '',
        ]);

        $admin->roles()->attach($adminRole);
        $staff->roles()->attach($staffRole);

    }
}
