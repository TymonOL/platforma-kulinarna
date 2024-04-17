<?php
// połączenie z bazą danych
include "db_connetion.php";

// pobranie danych z formularza
$title = $_POST["title"];
$price = $_POST["price"];
echo $title;
// przygotowanie sql - insert into
$sql = "INSERT INTO `product` (`name`, `price`) VALUES ('$title',$price);";

// sql wykonanie sql
if($conn->query($sql) === TRUE) {
    echo "Dodałeś ogłoszenie";
} else {
    echo "Coś poszło nie tak :/";

}

$conn->close();
?>