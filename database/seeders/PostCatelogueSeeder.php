<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostCatelogue;
class PostCatelogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostCatelogue::create([
            "name"=>"Bóng đá tronhg nicc",
            "slug"=>"Bong-da-trong-nuocdấds-d",
            "user_id" =>1,
            "parent_id" => 0
           
           
        ]);
    }
}
