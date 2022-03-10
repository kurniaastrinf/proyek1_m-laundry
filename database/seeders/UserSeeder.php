<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'Admin',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin'
            ],
            [
                'username' => 'Mari Adhari',
                'email' => 'mariadhari6@gmail.com',
                'password' => Hash::make('mariadhari6'),
                'role' => 'pelanggan'
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
