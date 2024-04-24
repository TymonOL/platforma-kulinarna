<?php
// połączenie z bazą danych
include "db_connetion.php";

// pobranie danych z formularza
$title = $_POST["title"];
$opis = $_POST["opis"];
// przygotowanie sql - insert into
$sql = "INSERT INTO `product` (`name`, `opis`) VALUES ('$title','$opis');";

// sql wykonanie sql
if($conn->query($sql) === TRUE) {
    echo "Dodałeś ogłoszenie";
} else {
    echo "Coś poszło nie tak :/";

}

$conn->close();
?>