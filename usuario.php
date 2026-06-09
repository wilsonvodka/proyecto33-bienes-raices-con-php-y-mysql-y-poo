<?php 

require 'includes/app.php';
$db = conectarDB();


//crear un email y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$query = "INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$passwordHash}');";


mysqli_query($db, $query);
//agregarlo a la base de datos