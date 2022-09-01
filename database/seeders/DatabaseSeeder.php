<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Kehadiran;
use App\Models\User;
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
        // Kehadiran::factory("100")->create();
        // User::factory('50')->create();

        User::create([
            'name' => "Admin SIAKAD",
            'nis' => 1232132,
            'role' => "admin",
            'kelas' => "Admin Siakad",
            'email' => "admin@gmail.com",
            'password' => bcrypt("admin123")
        ]);

        User::create([
            'name' => "Guru SIAKAD",
            'nis' => 213234234,
            'role' => "guru",
            'kelas' => "Guru X RPL 1",
            'email' => "guru@gmail.com",
            'password' => bcrypt("guru123")
        ]);

        User::create([
            'name' => "Siswa SIAKAD",
            'nis' => 1231242342,
            'kelas' => "X RPL 6",
            'email' => "siswa@gmail.com",
            'password' => bcrypt("siswa123")
        ]);
    }
}
