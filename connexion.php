<?php
$conn = new mysqli("localhost", "root", "", "morpion");

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
