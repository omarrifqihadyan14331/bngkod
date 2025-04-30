<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
    }
}
