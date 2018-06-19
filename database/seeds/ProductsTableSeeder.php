<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'price' => '20000',
                'name' => 'test',
                'intro' => 'test',
                'content' => 'test content',
                'image' => 'image001.jpg',
                'category_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'price' => '30000',
                'name' => 'test',
                'intro' => 'test',
                'content' => 'test content',
                'image' => 'image002.jpg',
                'category_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ]);
    }
}
