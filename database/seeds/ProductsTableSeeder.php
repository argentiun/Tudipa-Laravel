<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model factory para poder crear datos ficticios
        // Luego del -> tenemos dos metodos para crear la cantidad de elementos que necesitamos
        // El metodo make, que crea objetos, y el create hace lo mismo y ademas lo guarda en la base da datos.

        // factory(Product::class)->create(); Utilizando esta sola linea creamos solo un producto

        // Con la siguiente creamos mas de un 1 producto.

        factory(Category::class, 5)->create();
        factory(Product::class, 100)->create();
        factory(ProductImage::class, 200)->create();


    }
}
