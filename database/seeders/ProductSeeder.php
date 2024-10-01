<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            [
                'company_id' => '101',
                'product_name' => 'コーラ',
                'price' => '130',
                'stock' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
            [
                'company_id' => '102',
                'product_name' => 'お茶',
                'price' => '130',
                'stock' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
            [
                'company_id' => '103',
                'product_name' => '水',
                'price' => '110',
                'stock' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
        ]);
    }
}
