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
            'penerbit_id' => 1,
            'kategori_id' => 1,
        ]);

        Data::create([
            'judul' => 'Kumtua Tondano',
            'nomor' => '001',
            'slug' => Str::of('Kumtua Tondano')->slug('-'),
            'penerbit_id' => 2,
            'kategori_id' => 2,
        ]);
    }
}
