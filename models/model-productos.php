<?php declare( strict_types=1 );

// Todas las Categorias
function getCategorias(){
    $conn = require_once __DIR__.'/../models/connectDB.php';
    $sql = 'SELECT * FROM categories';
    try{
        $stm = $conn->prepare($sql);
        if(!$stm->execute()){
            return false;
        }
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $ex){
        echo "Error: ".$ex->getMessage;
    }
    // Cerramos conexion DB y STM.
    $stm = null;
    $conn = null;
    return $result;
};// ******* END

// Productos
function getProductos( $id ){
    
    $conn = require_once __DIR__.'/../models/connectDB.php';

    $sql = 'SELECT * FROM productos WHERE categoria_id=:id';

    try{
        $stm = $conn->prepare($sql);
        $stm->bindParam(':id', $id);
        if(!$stm->execute()){
            return false;
        }

        $result =  $stm->fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $ex){
        echo "Error: ".$ex->getMessage;
    }

    $stm = null;
    $conn = null;
    return $result;   
}

// deatail Productos
function getDetailProducto( $id ){
    
    $conn = require_once __DIR__.'/../models/connectDB.php';

    $sql = 'SELECT * FROM productos WHERE id=:id';

    try{
        $stm = $conn->prepare($sql);
        $stm->bindParam(':id', $id);
        if(!$stm->execute()){
            return false;
        }

        $result =  $stm->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $ex){
        echo "Error: ".$ex->getMessage;
    }

    $stm = null;
    $conn = null;
    return $result;   
}

