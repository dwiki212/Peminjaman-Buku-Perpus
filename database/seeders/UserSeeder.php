<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'dwiki',
            'email' => 'dwiki@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'andi',
            'email' => 'andi@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');
    }
}
