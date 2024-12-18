<?php

namespace Database\Seeders;

use App\Models\kotaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                "provinsi_id" =>"1",
                "nama_kota" => "Kota Surakarta",
            ],
            [
                "provinsi_id" =>"2",
                "nama_kota" => "Kota Surabaya",
            ]
        ];


        kotaModel::insert($posts);
    }
}
