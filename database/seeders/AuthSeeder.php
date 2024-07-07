<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "Fullname" => "Bui Ngoc Do",
            "email"=>"dobnph33400@fpt.edu.vn",
            "password" => Hash::make("buingocdo2004@")
        ]);
        User::factory(1000)->create();
    }
}
