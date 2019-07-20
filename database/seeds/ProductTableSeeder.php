<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
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
                'id'=>1,
                'cate_id'=>1,
                'name'=>'iphone XS Max',
                'price'=>'40.000.000 VND',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQKU0Ww3xEa4rQhOmgJBvfWWka-InP1pixRcnaF_Q4pXYYNiuBsw',
                'description'=>'dep ma moi toi dat qua',
            ],
            [
                'id'=>2,
                'cate_id'=>2,
                'name'=>'Samsung galaxy s10',
                'price'=>'41.000.000 VND',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQKU0Ww3xEa4rQhOmgJBvfWWka-InP1pixRcnaF_Q4pXYYNiuBsw',
                'description'=>'dep ma moi toi dat qua',
            ],

        ]);
    }
}
