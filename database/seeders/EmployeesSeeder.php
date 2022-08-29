<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use DB;

// เรียกใช้งาน Model Employee
use App\Models\Employee;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ลบข้อมูลเก่าออกก่อน
        DB::table('employees')->delete();

        $data = [
            [
                'fullname' => 'John Deo',
                'gender' => 'Male',
                'email' => 'john@email.com',
                'tel' => '0889999999',
                'age' => 30,
                'address' => '8/80 moo.8 bagnkok',
                'avartar' => 'noavatar.jpg',
                'status' => 1
            ]
        ];

        Employee::insert($data);

        // การ faker ข้อมูล
        Employee::factory(1000)->create();

    }
}
