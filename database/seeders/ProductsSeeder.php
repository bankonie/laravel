<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ลบข้อมูลในตารางออกก่อน seed
        DB::table('products')->delete();

        $data = [
            [
                'name' => 'Samsung Galaxy S21',
                'slug' => 'samsung-galaxy-s21',
                'description' => 'Similique molestias exercitationem officia aut. Itaque doloribus et rerum voluptate iure. Unde veniam magni dignissimos expedita eius',
                'price' => 18500.00,
                'image' => 'https://via.placeholder.com/800x600.png/008876?text=samsung',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Product::insert($data);
        // Product::create($data);

        // ทำการเรียก ProductFactory เพื่อการ fake ข้อมูล
        Product::factory(4999)->create();
        
    }
}
