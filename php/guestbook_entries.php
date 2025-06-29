<?php
// Verbindung zur Datenbank herstellen
include('db.php');

// SQL-Abfrage, um alle Einträge aus der Tabelle "kontakte" zu holen
$sql = "SELECT * FROM guestbook ORDER BY id DESC"; // Du kannst auch eine andere Reihenfolge wählen

// Abfrage ausführen
$result = $conn->query($sql);

// Prüfen, ob Ergebnisse vorhanden sind
if ($result->num_rows > 0) {
    // Jede Zeile der Ergebnisse ausgeben
    while($row = $result->fetch_assoc()) {
        $name = htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($row['message'], ENT_QUOTES, 'UTF-8');
        
        // Ausgabe in HTML (z. B. als Liste oder in einem div)
        echo "<div class='entry'>";
        echo "<h3>$name</h3>";
        echo "<p><strong>Nachricht:</strong> $message</p>";
        echo "</div>";
    }
} else {
    echo "Keine Einträge gefunden.";
}

// Verbindung schließen
$conn->close();
?>