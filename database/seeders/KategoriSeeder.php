<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = ['Data Polsek', 'Data Kumtua', 'Data Buronan'];

        foreach ($kategori as $value) {
            Kategori::create([
                'nama' => $value,
                'slug' => Str::of($value)->slug('-')
            ]);
        }
    }
}
