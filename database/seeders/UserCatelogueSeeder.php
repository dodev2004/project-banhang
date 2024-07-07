<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserCatelogue;

class UserCatelogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserCatelogue::create([
            "name"=> "quản trị viên",
            "description" =>"Là người quản lý tất cả các chức năng có trên admin",
            "status"=>"1"
        ]);
    }
}
