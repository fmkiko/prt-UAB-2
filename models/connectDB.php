<?php
    // Conexión con DB.
    $dns = 'mysql:host=localhost;port=3306;dbname=segunda_mano;charset=utf8mb4';
    $user = 'root';
    $psw = 'bitnami';
    try{
        $conn = new PDO($dns,$user,$psw);
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
   
    return $conn;

?>