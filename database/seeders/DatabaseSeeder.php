<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Kehadiran;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kehadiran::factory("10")->create();

        User::create([
            'name' => "Admin SIAKAD",
            'role' => "admin",
            'kelas' => "Admin Siakad",
            'email' => "admin@gmail.com",
            'password' => bcrypt("admin123")
        ]);


        User::create([
            'name' => "M. Chusni Agus",
            'role' => "guru",
            'kelas' => "Guru X RPL 1",
            'email' => "chusni_agus@gmail.com",
            'password' => bcrypt("12345678")
        ]);

        User::create([
            'name' => "M. Kafanal Kafi",
            'kelas' => "X RPL 6",
            'email' => "kafanal_kafi@gmail.com",
            'password' => bcrypt("12345678")
        ]);

    }
}
