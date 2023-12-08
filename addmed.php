<?php
// Database connection details
$dsn = 'mysql:host=localhost;dbname=planmed';
$username = 'root';
$password = '';

// Form data
$id = $_POST["id"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$tel = $_POST["tel"];

try {
    // Create a new PDO instance
    $conn = new PDO($dsn, $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO medecin (ID, Nom, Prenom, Email, Tel) VALUES (:id, :nom, :prenom, :email, :tel)");

    // Bind the form data to the parameters in the prepared statement
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tel', $tel);

    // Execute the prepared statement to insert the form data into the database
    $stmt->execute();

    echo "Les données ont été insérées avec succès dans la base de données.";

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Close the connection
// $conn = null;
?>
