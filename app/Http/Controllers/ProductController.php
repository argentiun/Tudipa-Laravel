<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
      return view('admin.products.index'); // Nos va permitir ver el listado de productos. admin.products.index nos va a delvolver la vista que se creo.
    }

    public function create()
    {
      return view('admin.products.create'); // Nos va a permitir ver el listado de productos
    }

    public function store() // Va a registrar el nuevo producto a la base de datos
    {

    }
}
