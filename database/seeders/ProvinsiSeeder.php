<?php

namespace Database\Seeders;

use App\Models\provinsiModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                "nama_provinsi" => "Jawa Tengah",
            ],
            [
                "nama_provinsi" => "Jawa Timur",
            ],
        ];

        provinsiModel::insert($posts);

    }
}
