
<?php
// Database connection details
$dsn = 'mysql:host=localhost;dbname=planmed';
$username = 'root';
$password = '';

$date = "2023-12-05";

try {
     // Create a new PDO instance
     $conn = new PDO($dsn, $username, $password);

     // Set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $data = $conn->prepare('SELECT * from planning');
   
    $data->execute();
    $use = $data->fetchAll();
     var_dump($use[0]);
    foreach ($use as $med){
        echo "<br>" .$med [0] . "\n" . $med [1]. "\n" . $med [2]. "\n" . $med [3]."</br>";
    }
    // echo "</select>";


} catch (\Throwable $th) {
    throw $th;
}
?>