<?php

$localhost = "localhost";
$username = "root";
$password = "";
$db = "bdcurso";

try {
    $connect= new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
    //var_dump($connect); // debugar - Descobrir o que está sendo respondido
}
catch (PDOException $e) {
    echo "Conexão falha: ".$e->getMessage();
}