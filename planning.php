
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
        // Database connection details
            $dsn = 'mysql:host=localhost;dbname=planmed';
            $username = 'root';
            $password = '';

          // Create a new PDO instance
             $conn = new PDO($dsn, $username, $password);

            $data = $conn->prepare('SELECT * from planning');

            $data->execute();
            $use = $data->fetchAll();

          

               echo json_encode($use);
           

            // // <!-- changing the data received from the backend to a json file file to ease the manipulation in the javasctipt  -->
        
            // $data = array(
            //     'name' => 'John',
            //     'age' => 30,
            //     'city' => 'New York'
            // );

            // $json = json_encode($data);
            // echo "<script>var data = $json;</script>";
            // var_dump($json);
        ?>
        <!-- javascript to manipulate the data by putting themm in corresponding colunmes  -->
        <script>
        
        </script>
    </tbody>
</table>
</body>
</html>