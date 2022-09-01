<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeacherImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'name' => $row['nama'],
            'nis' => $row['nis'],
            'email' => $row['email'],
            'role' => "guru",
            'jk' => $row['jenis_kelamin'],
            'kelas' => "Guru " . $row['kelas'],
            'password' => Hash::make("12345678")
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}
