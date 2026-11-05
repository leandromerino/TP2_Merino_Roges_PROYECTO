<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $cafeCaliente = Category::factory()->create([
            'name' => 'Café caliente',
            'description' => 'Cafés clásicos, suaves e intensos para disfrutar calientes.'
        ]);

        $cafeHelado = Category::factory()->create([
            'name' => 'Café helado',
            'description' => 'Bebidas frías con café, hielo y opciones cremosas.'
        ]);

        $bakery = Category::factory()->create([
            'name' => 'Bakery',
            'description' => 'Opciones dulces y de panadería para acompañar.'
        ]);

        $sanguches = Category::factory()->create([
            'name' => 'Sánguches y preparados',
            'description' => 'Opciones saladas y comidas preparadas.'
        ]);

        Product::factory()->create([
            'category_id' => $cafeCaliente->id,
            'name' => 'Café espresso',
            'price' => 2000,
            'image' => 'cafe_espresso.jpg',
            'description' => 'Café corto, fuerte y concentrado, perfecto para los amantes del café intenso.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $cafeCaliente->id,
            'name' => 'Café americano',
            'price' => 2200,
            'image' => 'cafe_americano.jpg',
            'description' => 'Café clásico e intenso, ideal para disfrutar en cualquier momento.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $cafeCaliente->id,
            'name' => 'Café latte',
            'price' => 2500,
            'image' => 'cafe_caliente.jpg',
            'description' => 'Café con leche suave y espuma cremosa.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $cafeHelado->id,
            'name' => 'Café helado',
            'price' => 3000,
            'image' => 'cafe_helado.jpg',
            'description' => 'Café frío con hielo, refrescante y suave.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $cafeHelado->id,
            'name' => 'Frappuccino',
            'price' => 3800,
            'image' => 'frappucino.jpg',
            'description' => 'Bebida fría y cremosa a base de café.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $bakery->id,
            'name' => 'Medialunas',
            'price' => 1800,
            'image' => 'bakery.jpg',
            'description' => 'Medialunas dulces recién horneadas para acompañar el café.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $bakery->id,
            'name' => 'Croissant',
            'price' => 2300,
            'image' => 'bakery.jpg',
            'description' => 'Croissant hojaldrado, liviano y crocante.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $bakery->id,
            'name' => 'Torta red velvet',
            'price' => 4200,
            'image' => 'torta_redvelvet.jpg',
            'description' => 'Porción de torta red velvet con crema suave.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $sanguches->id,
            'name' => 'Tostado de jamón y queso',
            'price' => 3900,
            'image' => 'tostado.jpg',
            'description' => 'Tostado clásico de jamón y queso servido caliente.',
            'available' => true
        ]);

        Product::factory()->create([
            'category_id' => $sanguches->id,
            'name' => 'Sánguche de pollo',
            'price' => 4800,
            'image' => 'sanguches_y_preparados.jpg',
            'description' => 'Sánguche preparado con pollo, vegetales frescos y pan.',
            'available' => true
        ]);
    }
}