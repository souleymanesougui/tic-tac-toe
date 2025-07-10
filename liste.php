<?php
include 'connexion.php';

$result = $conn->query("SELECT * FROM joueurs ORDER BY id DESC");

echo "<h2>Liste des joueurs</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Joueur 1</th><th>Joueur 2</th><th>Date</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nom1"] . "</td>";
    echo "<td>" . $row["nom2"] . "</td>";
    echo "<td>" . $row["date_jeu"] . "</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
?>
