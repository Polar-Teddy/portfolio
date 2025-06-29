<?php
$servername = "localhost";
$username = "root";  // Standardbenutzername für MySQL
$password = "";      // Standardpasswort für XAMPP ist leer
$dbname = "portfolio";

// Verbindung erstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
?>