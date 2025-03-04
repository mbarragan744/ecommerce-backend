<?php

namespace App\Http\Controllers;



class ProductController extends Controller
{
    public function __index(){//este metodo es para listar los productos
        return view('products.index');
    }
    public function create(){//formulario para crear un producto
        return view('products.create');
    }
    public function show(){//mostrar un produto el detalle
        return view('products.show');
    }
}
