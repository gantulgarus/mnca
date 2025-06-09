<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Хүндэт ерөнхийлөгч',
            'Ерөнхийлөгч',
            'Дэд ерөнхийлөгч',
            'Удирдах зөвлөлийн гишүүн',
            'Хяналтын зөвлөлийн гишүүн',
            'Гишүүн',
            'Ажлын алба',
            'БҮАТЗХ',
        ];

        foreach ($departments as $name) {
            Department::create(['name' => $name]);
        }
    }
}
