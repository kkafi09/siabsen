<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class TeacherExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::where('role', 'guru')->select('name', 'nis', 'email', 'jenis_kelamin', 'kelas', 'email')->get();
    }
}
