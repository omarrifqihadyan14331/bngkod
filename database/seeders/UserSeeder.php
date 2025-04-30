<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
<<<<<<< HEAD
                'name' => 'Dr.Omar',
                'alamat' => 'Jl Baru Undip',
                'no_hp' => '081837355',
                'role' => 'dokter',
                'email' => 'dokter_omar@gmail.com',
                'password' => 'password' // password asli sebelum hash
            ],
            [
                'name' => 'Tono',
                'alamat' => 'Jl Pelan-pelan',
                'no_hp' => '0879361478',
                'role' => 'pasien',
                'email' => 'pasien_tono@gmail.com',
=======
                'name' => 'Syifa Dokter',
                'alamat' => 'Jl ini',
                'no_hp' => '081234567',
                'role' => 'dokter',
                'email' => 'dokter_syifa@gmail.com',
                'password' => 'password' // password asli sebelum hash
            ],
            [
                'name' => 'Syifa Pasien',
                'alamat' => 'Jl itu',
                'no_hp' => '087654321',
                'role' => 'pasien',
                'email' => 'pasien_syifa@gmail.com',
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
                'password' => 'password' // password asli sebelum hash
            ],
        ];

        foreach($data as $d){
            User::create([
                'name' => $d['name'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
                'email' => $d['email'],
                'password' => Hash::make($d['password']),
            ]);
        }
<<<<<<< HEAD
=======
=======

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
>>>>>>> e3104d0cc82be6935792b089fb27d42c43e8b9b3
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }
}
