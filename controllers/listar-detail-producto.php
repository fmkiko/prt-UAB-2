<?php

require_once __DIR__.'/../models/model-productos.php';

$id = (int) $_POST['id'];

// Consultamos los produtos en el modelo listar
$productos =  getDetailProducto( $id );

if(!$productos){
   $result = ['message'=>'No hay productos'];
}else{
    $result = $productos;
}
// Devolvemos el resultado al AJAX
echo json_encode($result);


?>