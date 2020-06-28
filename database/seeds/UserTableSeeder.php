<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // Tạo dữ liệu tài khoản admin
        $superadmin = new User();
        $superadmin->name = 'admin';
        $superadmin->email = 'admin@gmail.com';
        $superadmin->password = bcrypt('admin');
        $superadmin->gender = 1;
        $superadmin->phone = '0386496611';
        $superadmin->level = 2;
        $superadmin->status = 1;
        $superadmin->email_verified_at = Carbon::now();
        $superadmin->save();

        $admin = new User();
        $admin->name = 'nhanvien';
        $admin->email = 'nhanvien@gmail.com';
        $admin->password = bcrypt('nhanvien');
        $admin->gender = 1;
        $admin->phone = '0914253698';
        $admin->level = 1;
        $admin->status = 1;
        $admin->email_verified_at = Carbon::now();
        $admin->save();
    }

}
