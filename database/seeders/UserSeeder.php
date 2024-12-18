<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //  'name' => 'John Doe',
        //     'no_rm' => "1232132131321",
        //     'nim_pasien' => 12345678,
        //     'alamat' => 'Jl. Kebon Jeruk No. 123',
        //     'tgl_lahir' => '1990-01-01',
        //     'alergi' => 'Debu',
        //     'kelamin' => 'Laki-laki',
        //     'pendapatan' => '5000000',
        //     'golongan_darah' => 'a',
        //     'email' => 'johndoe@example.com',
        //     'password' => Hash::make('password123'),
        // ]);
    }
}
