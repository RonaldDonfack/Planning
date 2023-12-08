<?php   
                 $db = new PDO("mysql:host=localhost;dbname=planningmed;charset=utf8", "root", "");
                 $fetchpers= $db ->prepare ('SELECT matricule,nom  FROM medecin');
                 $fetchpers->execute();
                 $pers=$fetchpers->fetchAll();
                 foreach ($pers as $medecin){
                     echo"<option value=\"".$medecin['id'] ."\">".$medecin['nom'] ."</option>" ;
                 }
                 ?>