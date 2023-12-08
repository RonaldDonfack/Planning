<?php
// Database connection details
$dsn = 'mysql:host=localhost;dbname=planmed';
$username = 'root';
$password = '';

// $idlog = $_POST['idlog'];
// $id = $_POST['identifiant'];
// $statut = $_POST['statut'];

try {
     // Create a new PDO instance
     $conn = new PDO($dsn, $username, $password);

     // Set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $data = $conn->prepare('SELECT * from user');
    echo " data after the execute statement";
    $data->execute();
    var_dump($data);

    $use = $data->fetchAll();
    echo " data after the fetch statement";
    
    var_dump($use);

    




} catch (\Throwable $th) {
    throw $th;
}