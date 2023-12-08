<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="enregmed.php" method="post">
        <fieldset>
        <legend>Details du medecin</legend>
        <select name="nomprenom" id="nomprenom">
    
            <?php
            require ('dropdownoptiondata.php')
            ?>
        </select>
        </fieldset>
        <fieldset>
            <legend>Entrer la plage de travail</legend>
            <input type="radio" name="plage" id="plage1" value="jour" checked>
            <label for="plage1">Jour</label>
            <input type="radio" name="plage" id="plage2" value="soir">
            <label for="plage2">Soir</label>
            <input type="radio" name="plage" id="plage3" value="nuit">
            <label for="plage3">Nuit</label>
        </fieldset>
        <fieldset>
            <legend>Jour de travail</legend>
            <label for="dateInput">Selectionner un date:</label>
            <input type="date" id="dateInput" name="dateInput" required>
            <!-- <label for="displayday">Nom du jour</label>
            <input type="text" id="displayday" name="displayday" required>

            <button type="button" onclick="getDay()">recupere le jour</button> -->
        </fieldset>
        <input type="submit" value="soumettre">
    </form>
   
  
</body>

</html>