<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap'      => 'Noviani Saputri',
            'email'      => 'nopi@gmail.com',
            'username'  => 'nopii',
            'alamat'      => 'Korea Selatan',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'nama_lengkap'      => 'Jiro',
            'email'      => 'jiro@gmail.com',
            'username'  => 'jiroo',
            'alamat'      => 'Jepang',
            'password' => bcrypt('1234'),
        ]);
    }
}
