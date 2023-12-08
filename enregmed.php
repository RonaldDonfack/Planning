<?php
// Database connection details
$dsn = 'mysql:host=localhost;dbname=planmed';
$username = 'root';
$password = '';

// Form data
$nomprenom = $_POST["nomprenom"];
$plage = $_POST["plage"];
$date = $_POST["dateInput"]; // Date input from the form

// Calculate the day from the date
$dateObject = new DateTime($date);
$day = $dateObject->format("l");


try {
    // Create a new PDO instance
    $conn = new PDO($dsn, $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO planning (Jour, plage, Nommed, Nomjour) VALUES (:dateInput , :plage,:nomprenom, :day )");

    // Bind the form data and day to the parameters in the prepared statement
    $stmt->bindParam(':dateInput', $date);
    $stmt->bindParam(':plage', $plage);
    $stmt->bindParam(':nomprenom', $nomprenom);
    $stmt->bindParam(':day', $day);

    // Execute the prepared statement to insert the form data and day into the database
    $stmt->execute();

    echo "Les données ont été insérées avec succès dans la base de données.";

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Close the connection
// $conn = null;
?>
