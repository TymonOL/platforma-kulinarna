<?php 
 $servername = "localhost"; // nazwa serwera (komputer lokalny to localhost)
 $username = "root"; // nazwa użytkownika bazy danych 
 $password = ""; // hasło do bazy danych
 $dbname = "scamlegro"; // nazwa bazy danych 

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
   die("Połączenie nieudane: ". $conn->connect_error);
 }
?>