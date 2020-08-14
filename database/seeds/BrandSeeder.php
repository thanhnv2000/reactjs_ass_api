<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert(
            [
                [   
                    'id' => 1,
                    'name_brand' => 'Nike',
                    'image' => '',
                ],
                [   
                    'id' => 2,
                    'name_brand' => 'Adidas',
                    'image' => '',
                ],
                [   
                    'id' => 3,
                    'name_brand' => 'Vans',
                    'image' => '',
                ]
            ]
        );
    }
}
