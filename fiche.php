<!-- <?php

try {
 $db = new PDO("mysql:host=localhost;dbname=planmed;charset=utf8", "root", "");
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Handle connection errors here (e.g., log the error, display an error message to the user)
    echo "Connection failed: " . $e->getMessage();
}

 $heure = filter_input(INPUT_POST, 'heure', FILTER_SANITIZE_STRING);
 $objet = filter_input(INPUT_POST, 'objet', FILTER_SANITIZE_STRING);
 $nompatient = filter_input(INPUT_POST, 'nompatient', FILTER_SANITIZE_STRING);


 if($heure && $objet && $nompatient ) {
    // Prepare the SQL statement to insert data
    $insert = $db->prepare('INSERT INTO tache (Heure, Objet, NomPatient, ) VALUES (?, ?, ?)');
    // Execute the SQL statement with the sanitized data
    $insert->execute([$heure, $objet, $nompatient]);
    
    // Output a success message
    echo 'insertion reussite';
} else {
    // Handle the case when form data is missing or invalid
    echo 'enregistrement erronee';
}
$fetchpers= $db ->prepare ('SELECT * FROM tache');
$fetchpers->execute();
$pers=$fetchpers->fetchAll();
if(count($pers)!=0){
    echo "<table border=4 align center>";
    echo "<thead>";
    echo "<th> heure</th>";
    echo "<th> objet</th>";
    echo "<th> nompatient</th>";
    echo "</thead>";

for ($t=count($pers) -1;$t>0 ;$t--){
    echo"<tr>";
    echo"<td>".$pers[$t]['heure']."</td>";
    echo"<td>".$pers[$t]['objet']."</td>";
    echo"<td>".$pers[$t]['nompatient']."</td>";
    echo"</tr>";

} echo"</table>";
}
?> -->
<?php
var_dump($_POST);
?>