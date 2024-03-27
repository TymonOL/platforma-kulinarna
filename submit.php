<?php
// połączenie z bazą danych 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platforma_kulinarna";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die ("Połączenie do bazy danych nieudane: " . $conn->connect_error);
}
// pobranie danych z  formularza
$title = $_POST["title"];
$description = $_POST["description"];

// przygotowanie kwerendy 

$sql = "INSERT INTO przepisy(tytul, opis) VALUES ('$title', '$description')";


// wykonanie kwerendy
if ($conn->query($sql) === TRUE) {
  echo "Gratulacje dodałeś przepis!";
} else {
  echo "Coś poszło nie tak!";
}
// zamknięcie połączenia z db
$conn->close();
?>