<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::create([
            'judul' => 'Polsek Tondano',
            'nomor' => '001',
            'slug' => Str::of('Polsek Tondano')->slug('-'),
            'keterangan' => 'Daftar buronan',
            'kategori_id' => 1,
            'status_type' => 1,
        ]);

        Data::create([
            'judul' => 'Kumtua Tondano',
            'nomor' => '002',
            'slug' => Str::of('Kumtua Tondano')->slug('-'),
            'keterangan' => 'Giat Babin',
            'kategori_id' => 2,
            'status_type' => 1,
        ]);

        Data::create([
            'judul' => 'Kelurahan Tondano',
            'nomor' => '003',
            'slug' => Str::of('Kelurahan Tondano')->slug('-'),
            'keterangan' => 'Sosialisasi di Kelurahan',
            'kategori_id' => 3,
            'status_type' => 1,
        ]);
    }
}
