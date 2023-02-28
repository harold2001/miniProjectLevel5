<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Harold Carazas Mires",
            "email" => "admin@admin.com",
            "password" => bcrypt("admin")
        ])->assignRole("admin");
        User::create([
            "name" => "Cathryn Kris",
            "email" => "maestro@maestro.com",
            "password" => bcrypt("maestro")
        ])->assignRole("maestro");
        User::create([
            "name" => "Francisca Stark",
            "email" => "alumno@alumno.com",
            "password" => bcrypt("alumno")
        ])->assignRole("alumno");

        User::factory(50)->create();
    }
}
