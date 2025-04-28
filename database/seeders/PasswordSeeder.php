<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasswordSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("passwords")->insert([
            'password'=>bcrypt("12345")
        ]);
    }
}
