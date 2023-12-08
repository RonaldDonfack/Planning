<!DOCTYPE html>
 <html>

 <?php
                    try {
                        $db = new PDO("mysql:host=localhost;dbname=planmed;charset=utf8", "root", "");
                        // Set the PDO error mode to exception for better error handling
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch(PDOException $e) {
                        // Handle connection errors here (e.g., log the error, display an error message to the user)
                        echo "Connection failed: " . $e->getMessage();
                    }
                    $fetchpers= $db ->prepare ('SELECT id ,nom  FROM medecin');
                    $fetchpers->execute();
                    $pers=$fetchpers->fetchAll();
                    ?>
     <head>

     </head>
     <body>
         <h2> liste_medecin</h2>
         <table border ='1'>
             <tr>
                 <th> PLAGES</th>
                 <th> LUNDI</th>
                 <th> MARDI</th>
                 <th> MERCREDI</th>
                 <th> JEUDI</th>
                 <th> VENDREDI</th>
                 <th> SAMEDI</th>
                 <th> DIMANCHE</th>
             </tr>
             <tr> 
                 <td>MATIN</td>
                 <td> <select name="medecin"> 
                    <?php
                    try {
                        $db = new PDO("mysql:host=localhost;dbname=planmed;charset=utf8", "root", "");
                        // Set the PDO error mode to exception for better error handling
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch(PDOException $e) {
                        // Handle connection errors here (e.g., log the error, display an error message to the user)
                        echo "Connection failed: " . $e->getMessage();
                    }
                    $fetchpers= $db ->prepare ('SELECT id ,nom  FROM medecin');
                    $fetchpers->execute();
                    $pers=$fetchpers->fetchAll();
                    foreach ($pers as $medecin){
                        echo"<option value=\"".$medecin['id'] ."\">".$medecin['nom'] ."</option>" ;
                    }
                    ?>
                 </select></td>
                 <td> <select name ='medecin'>
                 <?php 
                     require('selectmbel.php');
                     ?>
                 </select></td>
                 <td>  <td> <select name ='medecin'>
                 <?php 
                     require('selectmbel.php');
                     ?>
                 </select></td>
                      
             </tr>
         </table>
     </body>
 </html>