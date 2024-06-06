<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
                'name' => 'Earthen Bottle',
                'price' => 48.00,
                'description' => 'Tall slender porcelain bottle with natural clay textured body and cork stopper.',
                'image_src' => 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg',
                'image_alt' => 'Tall slender porcelain bottle with natural clay textured body and cork stopper.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nomad Tumbler',
                'price' => 35.00,
                'description' => 'Olive drab green insulated bottle with flared screw lid and flat top.',
                'image_src' => 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg',
                'image_alt' => 'Olive drab green insulated bottle with flared screw lid and flat top.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Añadir más productos según sea necesario
        ]);
    }
}
