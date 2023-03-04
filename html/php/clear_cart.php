<?php

if(isset($_POST['pp_remove_button'])){
    $byr_nme = $_SESSION['buyer_name']."_table";
    $delete_query="TRUNCATE TABLE $byr_nme;";
    $conn->query($delete_query);
    $zero='0';
    $clear_cart_query="UPDATE item_table SET Items='$zero' WHERE Id=1";
    $conn->query($clear_cart_query);
   

    echo "<script> document.querySelector('.purchase_page_add_to_bag').style.visibility = 'hidden'; </script>";
}

?>