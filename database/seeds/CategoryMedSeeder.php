<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryMedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Analgesik Narkotik',
            'description' => 'Pereda nyeri narkotik'],
            ['name' => 'Analgesik Non Narkotik',
            'description' => 'Pereda nyeri non narkotik'],
            ['name' => 'Antipirai',
            'description' => 'Pereda asam urat'],
            ['name' => 'Nyeri Neuropatik',
            'description' => 'Pereda gangguan saraf'],
            ['name' => 'Anestetik Lokal',
            'description' => 'Menghentikan kerja saraf untuk sementara'],
            ['name' => 'Anestetik Umum dan Oksigen',
            'description' => 'Menghentikan nyeri secara sentral serta menghilangkan kesadaran sementara'],
            ['name' => 'Obat untuk Prosedur Pre Oparatif',
            'description' => 'Pre Oparatif'],
            ['name' => 'Antialergi dan Obat untuk Anafilaksis',
            'description' => 'Meredakan alergi berat'],
            ['name' => 'Antidot Khusus',
            'description' => 'Penawar racun khusus'],
            ['name' => 'Antidot Umum',
            'description' => 'Penawar racun umum']
        ]);
    }
}
