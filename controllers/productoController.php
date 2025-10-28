<?php

class productoController{
    
    public function index(){
        $producto = new ProductoModels();
        $productos = $producto->getAll(6);
        include 'views/producto/destacados.php';
    }
}
?>