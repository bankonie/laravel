<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;

class BackendController extends Controller
{
    public function dashboard(){
        return view('backend.pages.dashboard');
    }

    public function employees(){
       
        // การอ่านข้อมูลจากตาราง employees ทั้งหมด
       // $employees =  DB::table('employees')->get(); // select * from employees

       // การอ่านข้อมูลจากตาราง employees เพียงรายการเดียว
       // $employees =  DB::table('employees')->first(); // select * from employees limit 1

       // อ่านข้อมูลทั้งหมดระบุฟิลด์
       // $employees =  DB::table('employees')->first(['fullname','gender','email']);

       // อ่านข้อมูลแบบระบุเงื่อนไข
    //    $employees = DB::table('employees')
    //                     ->where('age','>','18')
    //                     ->where('gender','Female')
    //                     ->get(['fullname','gender','age']);
       
       // ค้นหาโดยระบุ id โดยตรง
       // $employees = DB::table('employees')->find(5);

       // การนับจำนวน record ที่พบ
       // $employees = DB::table('employees')->count();

       // การหาค่าสูงสุด ต่ำสุด และค่าเฉลี่ย
        // $employees = DB::table('employees')->max('age');
        // $employees = DB::table('employees')->min('age');
        // $employees = DB::table('employees')->avg('age');

        // การจัดเรียนข้อมูล และการเลือกข้อมูลบางส่วน
        // $employees = DB::table('employees')->orderBy('age')->get(); // order asc

        /// $employees = DB::table('employees')->orderByDesc('age')->get(); // order desc

        // $employees = DB::table('employees')->orderByDesc('age')->limit(3)->get();

        // การเพิ่มข้อมูลเข้าไปในตาราง --------------------------------------------
        // $data = [
        //     'fullname' => 'Wichai Jaidee',
        //     'gender' => 'Male',
        //     'email' => 'wichai@email.com',
        //     'tel' => '0898938889389',
        //     'age' => 38,
        //     'address' => '20/2 moo.2 bangkok',
        //     'avartar' => 'noavatar.jpg',
        //     'status' => 1
        // ];
        // $employees = DB::table('employees')->insert($data);

        // การแก้ไขข้อมูลเข้าไปในตาราง --------------------------------------------
        // $data = array(
        //     'email' => 'samitkk@gmail.com',
        //     'tel' => '02222333444',
        //     'age' => 42
        // );

        // $employees = DB::table('employees')->where('id', 7)->update($data);

        // การลบข้อมูลเข้าไปในตาราง --------------------------------------------
        $employees = DB::table('employees')->where('id',1003)->delete();

       return $employees;
    }

    public function employeelist(){
        // อ่านข้อมูลทั้งหมดจากตาราง employees
        // $employees = Employee::all();
        // การอ่านแบบแบ่งหน้าข้อมูล
        $employees = Employee::orderBy('id','desc')->paginate(25);
        // อ่านแบบระบุเงื่อนไข
        // $employees = Employee::where('age','>','18')->orderBy('age')->get();

        // การส่งข้อมูลที่ได้ไปยัง view

        return view('backend.pages.employeelist', compact('employees'));
    }

}
