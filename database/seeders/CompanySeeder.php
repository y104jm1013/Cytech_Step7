<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('companies')->insert([
            [
                'company_name' => 'コカコーラ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
            [
                'company_name' => 'サントリー',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
            [
                'company_name' => 'キリン',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
            ],
        ]);
    }
}
