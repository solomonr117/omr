<?php

$byr_nme = $_SESSION['buyer_name']."_table";
strtolower($byr_nme);

$cart_total_query = "SELECT SUM(Price*Quantity) AS total_price FROM $byr_nme;";
$cart_query = $conn->query($cart_total_query);

while($total = $cart_query->fetch_assoc()){
    echo $total['total_price'];
}

?>