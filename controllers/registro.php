<?php

if(!isset($_POST['name'])){
    require_once __DIR__.'/../views/formRegistro.php';
    return;
}

require_once __DIR__.'/../models/user.php';
// password encriptado
$pass = password_hash( $_POST['psw'], PASSWORD_DEFAULT, ['salt' => '@un día vi una vaca vestida de uniforme!!!']);

$datos = [
    'nombre' => $_POST['name'],
    'email' => $_POST['email'],
    'psw'=> $pass,
    'direccion' => $_POST['address'],
    'poblacion' => $_POST['pbl'],
    'codigo_postal' => (int) $_POST['codigo']

];

$result = addRegistro($datos);

if(!$result){
    echo "Error al guardar el registro!!!";
}else{
    echo "Datos guardados con exito!!!";
}



