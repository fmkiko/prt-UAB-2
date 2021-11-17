<?php

require_once __DIR__.'/../models/model-productos.php';
// Consultamos los categorías en el modelo listar
$categorias =  getCategorias();

if(!$categorias){
    echo "No se ha podido encontrar Categorias";
}else{
    include __DIR__.'/../views/listar.php';
}


?>