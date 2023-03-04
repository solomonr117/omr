<?php
   // Display Instruments
   $byr_nme = $_SESSION['buyer_name']."_table";
   strtolower($byr_nme);
   $disp_query = "SELECT * FROM $byr_nme";

   $result = $conn->query($disp_query);

   $sno=1;

   if($result->num_rows>0){
    while($row = $result->fetch_assoc()){

   
   echo "<div class='cart_page_card'>".$sno."."." <img class='cart_card_image' src='uploads/".$row['Pic']."'>"."<div class='cart_card_content'>"."<div class='cart_card_name'>".$row['Name']."</div>"."<div class='cart_card_type'>"."Instrument Type : ".$row['Type']."</div>"."<div class='cart_card_price'>"."₹ ".$row['Price']."</div>"."<form method='POST' class='cart_form' action='".$_SERVER['PHP_SELF']."'> <input type='hidden' value='".$row['Id']."' name='inst_id'> <button class='cart_function_btn' type='submit' id='".$row['Id']."' name ='cart_plus' onclick='remove_onclick' >+</button> <span class='cart_quantity_content' id='cart_quantity_content".$row['Id']."'>".$row['Quantity']."</span> <button class='cart_function_btn' type='submit' id='".$row['Id']."' name ='cart_minus' onclick='remove_onclick' >-</button> </form>"."</div>"."</div></br>";

   $sno+=1;


}
}



 // Increment 
if(isset($_POST['cart_plus'])){
   
   $inst_id = $_POST['inst_id'];

   //Geting Increment value from DB 
   $q_s_query = "SELECT Quantity FROM $byr_nme WHERE Id=$inst_id;";
   $q_select_after = $conn->query($q_s_query);  
   while($q_val = $q_select_after->fetch_assoc()){
        $get_val = $q_val['Quantity'];
   }

  $get_val +=1;
  //Sending Increment value to DB 
   $q_send_query = "UPDATE $byr_nme SET Quantity='$get_val' WHERE Id=$inst_id;";
   $q_send_after = $conn->query($q_send_query);


   $increment_select_again = "SELECT Quantity FROM $byr_nme WHERE Id=$inst_id;";
   $increment_echo = $conn->query($increment_select_again);

   while($iord_val = $increment_echo->fetch_assoc()){
      $quantity_val_ = $iord_val['Quantity'];
   }

   $content_id = "cart_quantity_content".$inst_id;

   echo "<script> document.getElementById('$content_id').innerHTML = '$quantity_val_';
   </script>";
}


// Decrement 
if(isset($_POST['cart_minus'])){
   
   $inst_id = $_POST['inst_id'];

   //Geting Increment value from DB 
   $q_s_query = "SELECT Quantity FROM $byr_nme WHERE Id=$inst_id;";
   $q_select_after = $conn->query($q_s_query);  
   while($q_val = $q_select_after->fetch_assoc()){
        $get_val = $q_val['Quantity'];
   }

  $get_val -=1;
  //Sending Increment value to DB 
   $q_send_query = "UPDATE $byr_nme SET Quantity='$get_val' WHERE Id=$inst_id;";
   $q_send_after = $conn->query($q_send_query);


   $increment_select_again = "SELECT Quantity FROM $byr_nme WHERE Id=$inst_id;";
   $increment_echo = $conn->query($increment_select_again);

   while($iord_val = $increment_echo->fetch_assoc()){
      $quantity_val_ = $iord_val['Quantity'];
   }

   $content_id = "cart_quantity_content".$inst_id;

   echo "<script> document.getElementById('$content_id').innerHTML = '$quantity_val_';
   </script>";

}

?>