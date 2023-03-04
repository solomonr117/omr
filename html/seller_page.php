<!DOCTYPE html>
<html lang
="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/styles.css">
    <title>Seller's Panel</title> 
    
</head>
<body>

<div class="seller_page_container">
       <header class="seller_page__header">
        <nav class="seller_page__nav">
          <span class="seller_page__logo"><a href="home/home.php" class="seller_page__logo">Online Music Retailer</a> </span>
          <ul class="seller_page__ul">
            <li class="seller_page__list"><a href="home/home.php"         class="seller_page__anchor">Home</a></li>
            <li class="seller_page__list"><a href="account/seller_login.php"         class="seller_page__anchor">Log out</a></li>
            <li class="seller_page__list"><a href="home/contact.html"     class="seller_page__anchor">Contact</a></li>
            <li class="seller_page__list"><a href="about.html"       class="seller_page__anchor">About</a></li>
          </ul>
        </nav>
       </header>
      
       <div class="seller_page_btn_container"> <button class="seller_page_button" >Add Instrument</button></div>
     
      <div class="seller_page_popupdialog">
        <h3 class="seller_page_popupdialog_heading">Instrument Details</h3>
        <form action="<?php $_SERVER['PHP_SELF']?> " method="POST"  class="seller_page_form" enctype="multipart/form-data">
        <label for="product_name" class="seller_page_label">Name</label>
        <input type="text" class="seller_page_input" name="inst_name">
        <label for="product_price" class="seller_page_label">Price</label>
        <input type="number" class="seller_page_input" name="inst_price">
        <label for="product_type" class="seller_page_label">Type</label>
        <select name="inst_types" id="p_types" class="seller_page_product_type" >
           <option value="" class="seller_page_option" > </option>
           <option value="string" class="seller_page_option" >String</option>
           <option value="wind" class="seller_page_option" >Wind</option>
           <option value="skin" class="seller_page_option" >Skin</option>
           <option value="electric" class="seller_page_option" >Electric</option>
       </select>
        <label for="product_picture" class="seller_page_label" >Image</label>
        <input type="file" class="seller_page_input" name="file">
        <input type="submit" value="Add" class="seller_page_input_button"  id="submit_btn" name="submit">
      </form>
      </div>
        <!-- dialog -->

<script src="../js/seller.js"></script>
        

      <div class="seller_page_product_list" id="seller_page_product_list">
  
      <?php
        session_start();
         // Connectivity to DB 
         include 'php/conn.php';

         $slr_usrname = $_SESSION['seller_name_'];
        //  echo $slr_usrname;
         

        if(isset($_POST['submit'])){

         
        
          // Adding Instrument Details 
          include 'php/add.php';
         
         

         } 

         // Display Insturment Details 
         include 'php/disp.php';

         
      
        ?>


      </div>

      <footer class="seller_page_footer">
      <div class="seller_page_copyright">
          &copy; 2023 - Online Music Retailer 
      </div>
    </footer>
    
</div>

</body>
</html>