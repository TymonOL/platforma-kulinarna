<?php
include "db_connetion.php";
$sql = "SELECT `name` , `opis` FROM `product`";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()) {
    echo '<div class="card text-center">';
    echo '<h3>' . $row["name"] . '</h3>';
    echo '<p>' . $row["opis"] . ' zł</p>';
    echo '</div>';
}

$conn->close();

?>