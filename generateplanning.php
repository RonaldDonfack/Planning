
<?php
// Database connection details
$dsn = 'mysql:host=localhost;dbname=planmed';
$username = 'root';
$password = '';



try {
     // Create a new PDO instance
     $conn = new PDO($dsn, $username, $password);

     // Set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $data = $conn->prepare('SELECT * from planning');
   
    $data->execute();
    $use = $data->fetchAll();

    
    

} catch (\Throwable $th) {
    throw $th;
}
?>