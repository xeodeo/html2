<?php

require_once 'configs/db.php';

class categoriaModels
{
    private $id_categoria;
    private $nombre_categoria;

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function getNombreCategoria()
    {
        return $this->nombre_categoria;
    }

    public function setIdProducto($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    public function setNombreProducto($nombre_categoria)
    {
        $this->nombre_categoria = $nombre_categoria;
    }

    public function getAll()
    {
        $categoria = $this->db->query("SELECT * FROM t_categorias ORDER by id_categoria DESC");
        return $categoria;
    }

}
