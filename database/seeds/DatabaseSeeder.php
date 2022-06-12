<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(CategorySeeder::class); //jalankan category dulu, baru isi data products
        //$this->call(ProductSeeder::class); //karena jika ada foreign key maka nilai default harus ada
        $this->call(CategoryMedSeeder::class);
        $this->call(MedicineSeeder::class);
    }
}
