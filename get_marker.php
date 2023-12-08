<?php

$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=localhost;dbname=gemeente",$username, $password);
}catch(PDOexception $error){
    echo $error->getMessage();
}

$get_markers = $conn->prepare("SELECT * FROM klachten");
$get_markers->execute();
$markers = $get_markers->fetchAll();

//Zorg ervoor dat de response in json wordt geplaatst
echo json_encode($markers);