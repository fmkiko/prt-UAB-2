<?php

function addRegistro($datos){

    $conn = require_once __DIR__.'/../models/connectDB.php';
   /*
    echo '<pre>';
    echo var_dump($datos);
    echo '</pre>';
    return true;
   */

    $sql = 'INSERT INTO users (nombre, email, psw, direccion, poblacion, codigo_postal ) VALUES (:nombre, :email, :psw, :direccion, :poblacion, :codigo_postal)';

    try{
        $stm = $conn->prepare($sql);
        $stm->bindParam(':nombre', $datos['nombre']);
        $stm->bindParam(':email', $datos['email']);
        $stm->bindParam(':psw', $datos['psw']);
        $stm->bindParam(':direccion', $datos['direccion']);
        $stm->bindParam(':poblacion', $datos['poblacion']);
        $stm->bindParam(':codigo_postal', $datos['codigo_postal']);
        if(!$stm->execute()){
            list(,,$error) = $stm->errorInfo();
            return $error;
        }

        $result =  true;

    }catch(PDOException $ex){
        echo "Error: ".$ex->getMessage;
    }

    $stm = null;
    $conn = null;
    return $result;  

}

