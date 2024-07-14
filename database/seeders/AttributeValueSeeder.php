<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attribute_values')->insert([
            [
                "attribute_id" => 1,
                "name" => "Màu đỏ",
            ],
            [
                "attribute_id" => 1,
                "name" => "Màu xanh",
            ],
            [
                "attribute_id" => 1,
                "name" => "Màu đen",
            ],
        ]);
    }
}
