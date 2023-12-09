
<?php
include 'conndb.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning des medecin</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th scope="col" > JOURS <br> PLAGE</th>
        <th scope="col" > LUNDI</th>
        <th scope="col" > MARDI</th>
        <th scope="col" > MERCREDI</th>
        <th scope="col" > JEUDI</th>
        <th scope="col" > VENDREDI</th>
        <th scope="col" > SAMEDI</th>
        <th scope="col" > DIMANCHE</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $data = $conn->prepare('SELECT * from planning');

            $data->execute();
            $use = $data->fetchAll();

            foreach($use as $med){
               
            }
        
        ?>

<!-- changing the data received from the backend to a json file file to ease the manipulation in the javasctipt  -->
        <?php
            $data = array(
                'name' => 'John',
                'age' => 30,
                'city' => 'New York'
            );

            $json = json_encode($data);
            echo "<script>var data = $json;</script>";
            var_dump($json);
        ?>
        <!-- javascript to manipulate the data by putting themm in corresponding colunmes  -->
        <script>
            // Your JavaScript code goes here
            var table = document.queryselector("table");
            
            const jourDeLeSemaine = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];

            for (var i = 0; i < table.rows.length; i++) {

            if (table.rows[].cells[0].innerHTML === 'Jane') {
                table.rows[i].cells[1].innerHTML = '32'; // Update Jane's age to 32
                break;
            }
        }
        </script>
    </tbody>
</table>
</body>
</html>