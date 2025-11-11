<?php

class categoriaController
{
    public function index()
    {
        $categoriaModel = new categoriaModels();   // ✅ usa el modelo correcto
        $categorias = $categoriaModel->getAll();   // ✅ no le pases parámetros
        include 'views/categoria/categoria.php';
    }
}
