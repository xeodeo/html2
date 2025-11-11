<?php

class productoController{
    
    public function index(){
        $producto = new productoModels();
        $productos = $producto->getAll(6);
        include 'views/producto/destacados.php';
    }
}
?>