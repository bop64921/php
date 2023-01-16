<?php



$servidor="localhost"; //172.0.0.1
$baseDeDatos="app";
$usuario="root";
$password="";


try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDator;",$usuario,$password);
}catch (Exception $ex){
    echo $ex ->getMessage();
}

?>