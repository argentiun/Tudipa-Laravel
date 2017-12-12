<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::paginate(15); // Si dejamos All(); nos va a tirar todos los productos, por eso vamos a usar paginate para que nos muestre menos cantidad.
      return view('admin.products.index')->with(compact('products')); // Nos va permitir ver el listado de productos. admin.products.index nos va a delvolver la vista que se creo.
    }

    public function create()
    {
      return view('admin.products.create'); // Nos va a permitir ver el listado de productos
    }

    public function store(Request $request) // Va a registrar el nuevo producto a la base de datos
    {
      // dd($request->all());
      $product = new Product();
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->long_description = $request->input('long_description');
      $product->save(); // Con el metodo save lo que hacemos es insertarlo en la base de datos.

      return redirect('/admin/products'); // Con redirect, cuando se termine de insertar el nuevo curso, nos va a redireccionar a la ruta que le indiquemos.

    }
}
