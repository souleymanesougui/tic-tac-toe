<?php
include 'connexion.php';

$nom1 = $_POST['joueur1'];
$nom2 = $_POST['joueur2'];

$sql = "INSERT INTO joueurs (nom1, nom2) VALUES ('$nom1', '$nom2')";
$conn->query($sql);

$conn->close();

// Redirection après enregistrement
header("Location: index.html");
exit();
?>
