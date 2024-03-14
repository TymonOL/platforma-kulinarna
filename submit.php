<?php
// połączenie z bazą danych 
$servername = "localhost";
$username = "root";
$password = "";
$servername = "Blog"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
  die("Połączenie do bazy danych nieudane: " . $conn->connect_error);
// pobranie danych z  formularza
$title = $_POST["title"];
$description = $_POST["description"];
// przygotowanie kwerendy 

// wykonanie kwerendy

// zamknięcie połączenia z db
?>