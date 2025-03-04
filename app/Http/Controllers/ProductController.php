<?php

namespace App\Http\Controllers;



class ProductController extends Controller
{
    public function __index(){//este metodo es para listar los productos
        echo "LISTADO DE PRODUCTOS DEL ECOMMERCE";
    }
    public function create(){//formulario para crear un producto
        echo "FORMULARIO PARA CREAR UN PRODUCTO";
    }
    public function show($name,$categoria=null){//mostrar un produto el detalle
        if ($categoria=null){
            echo "EL PRODUCTO ES: $name";
        }
        else{
            echo "El producto es: $name, y su categoria es: $categoria";
        }
    }
}
