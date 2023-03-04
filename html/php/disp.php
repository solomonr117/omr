<?php
   // Display Instruments
   $disp_query = "SELECT * FROM inst_details WHERE Seller_name='$slr_usrname'; ";

   $result = $conn->query($disp_query);
   $sno = 1;
         
   if($result->num_rows>0){
    while($row = $result->fetch_assoc()){

   
   echo "<div class='seller_page_card'>".$sno." ."." <img class='card_image' src='uploads/".$row['Pic']."'>"."<div class='card_content'>"."<div class='card_name'>".$row['Name']."</div>"."<div class='card_type'>"."Instrument Type : ".$row['Type']."</div>"."<div class='card_price'>"."₹ ".$row['Price']."</div>"."<form method='POST' action='".$_SERVER['PHP_SELF']."'> <input type='hidden' value='".$row['Id']."' name='id'><button class='seller_page_remove_btn' id='".$row['Id']."' name ='remove_submit' >Remove</button> </form>"."</div>"."</div></br>";
   
   $sno+=1;
}
}


if(isset($_POST['remove_submit'])){
   $id = $_POST['id'];
   $rmv = "DELETE FROM inst_details WHERE Id =$id ";
   $delete = $conn->query($rmv);
   header("Location: seller_page.php");
   
}




?>


