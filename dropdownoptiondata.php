
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
 
    $data = $conn->prepare('SELECT id ,Nom, Prenom,nbre_heure from medecin where nbre_heure > 0 ');
   
    $data->execute();
    $use = $data->fetchAll();
    // echo "<select>";
    foreach ($use as $med){
        if ($med[3] > 0 ){
            echo"<option value=\"".$med['1']."\n"  .$med[2]."\">".$med['1']."\n" .$med[2]."</option>" ;
        }
    }
    // echo "</select>";


} catch (\Throwable $th) {
    throw $th;
}
?>