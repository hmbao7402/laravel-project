<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [
                'id' => 1,
                'firstName' => 'Bao',
                'lastName' => 'Hua',
                'email' => 'bao@admin.com',
                'username' => 'humiba',
                'password' => '$2a$12$LlLZ1g5TgAAzQzYZE7ffXuOE7lvCWCpgrULgMrEeYa88d4T4gQAc2',
                'phone' => '0932611774',
                'address' => '206/1A Binh Quoi, P28, Binh Thanh',
                'isSuperAdmin' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"), 
            ],
            [
                'id' => 2,
                'firstName' => 'Hoang Gia',
                'lastName' => 'Tran',
                'email' => 'hoanggia@admin.com',
                'username' => 'royal',
                'password' => '$2a$12$LlLZ1g5TgAAzQzYZE7ffXuOE7lvCWCpgrULgMrEeYa88d4T4gQAc2',
                'phone' => '0835060707',
                'address' => 'Thu Duc, TPHCM',
                'isSuperAdmin' => false,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 3,
                'firstName' => 'Lavi',
                'lastName' => 'Sar',
                'email' => 'sarlavi@admin.com',
                'username' => 'sarlavi',
                'password' => '$2a$12$LlLZ1g5TgAAzQzYZE7ffXuOE7lvCWCpgrULgMrEeYa88d4T4gQAc2',
                'phone' => '0782434221',
                'address' => 'Hoc Mon, TPHCM',
                'isSuperAdmin' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 4,
                'firstName' => 'Phong',
                'lastName' => 'Nguyen',
                'email' => 'phong@admin.com',
                'username' => 'phong',
                'password' => '$2a$12$LlLZ1g5TgAAzQzYZE7ffXuOE7lvCWCpgrULgMrEeYa88d4T4gQAc2',
                'phone' => '0988061763',
                'address' => 'Thu Duc, TPHCM',
                'isSuperAdmin' => false,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ];
        Admin::insert($adminRecords);
    }
}
