<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/styles.css">
    <title>Purchase Page</title>
</head>
<body>
    
<div class="purchase_page_container">
       <header class="purchase_page__header">
        <nav class="purchase_page__nav">
          <span class="purchase_page__logo"><a href="home/home.php" class="seller_page__logo">Online Music Retailer</a> </span>
          <ul class="purchase_page__ul">
            <li class="purchase_page__list"><a href="#"       id="bag_number"  class="bag_number"> </a></li> 
            <li class="purchase_page__list"><a href="cart.php"         class="seller_page__anchor"><img class="purchase_page_add_to_bag" src="../images/bag.png" alt="Bag"></a></li>
            <li class="purchase_page__list"><a href="home/home.php"         class="seller_page__anchor">Home</a></li>
            <li class="purchase_page__list"><a href="account/buyer_login.php"         class="seller_page__anchor">Logout</a></li>
            <li class="purchase_page__list"><a href="home/contact.html"     class="seller_page__anchor">Contact</a></li>
            <li class="purchase_page__list"><a href="about.html"       class="seller_page__anchor">About</a></li>
          </ul>
        </nav>
       </header>
         <!-- Header Section  -->


        <div class="purchase_page_section">
             <div class="purchase_page_clear_cart"> <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="purchase_page_clear_cart_form"> <button type="submit" name="pp_remove_button" class="purchase_page_clear_cart_btn">Clear Cart</button></form></div>
        </div>

      <div class="purchase_page_product_list" id="purchase_page_product_list">
  
      <?php
        session_start();
         // Connectivity to DB 
         include 'php/conn.php';
      
         // Display Insturment Details 
         include 'php/user_disp.php';

        // Clear Cart 
         include 'php/clear_cart.php';

        
      
        ?>


      </div>

      <footer class="purchase_page_footer">
      <div class="purchase_page_copyright">
          &copy; 2023 - Online Music Retailer 
      </div>
    </footer>
    
</div>
</body>
</html>