<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="../dist/styles.css">
    
</head>
<body>
    
<div class="cart_page_container">
       <header class="cart_page__header">
        <nav class="cart_page__nav">
          <span class="cart_page__logo"><a href="home/home.php" class="cart_page__logo">Online Music Retailer</a> </span>
          <ul class="cart_page__ul">
            <li class="cart_page__list"><a href="home/home.php"         class="cart_page__anchor">Home</a></li>
            <li class="cart_page__list"><a href="account/buyer_login.php"         class="cart_page__anchor">Logout</a></li>
            <li class="cart_page__list"><a href="purchase.php"         class="cart_page__anchor">Purchase</a></li>
            <li class="cart_page__list"><a href="home/contact.html"     class="cart_page__anchor">Contact</a></li>
            <li class="cart_page__list"><a href="about.html"            class="cart_page__anchor">About</a></li>
          </ul>
        </nav>
       </header>



       <!-- Display cart Items  -->

<div class="cart_page_items">
<?php 
        session_start();
       // Connect to DB 
       include 'php/conn.php';
      
       include 'php/cart_disp.php';
      ?> 
      
    <div class="cart_page_total">
      <div class="cart_page_total_">  Order Total - <?php 
      
      include 'php/cart_total.php';
      
      ?></div>
      <button class="cart_page_checkout" id="confirm_order"> Place your Order </button> 
    </div>
</div>


   

      <footer class="cart_page_footer">
      <div class="cart_page_copyright">
          &copy; 2023 - Online Music Retailer 
      </div>
    </footer>
<script src="../js/seller.js"></script>
    
</div>


</body>
</html>