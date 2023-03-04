

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Login  </title>
    <link rel="stylesheet" href="../../dist/styles.css">
</head>
<body>

<div class="login_container">

<header class="login_header">
  <nav class="login_navbar">
     <span class="login_logo"><a href="../home/home.php" class="login_anchor">Online Music Retailer</a></span>
  </nav>
</header>

<main class="login_main">
  <div class ="login_form">

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
      <div class="login_formholder">    
       <span class="login_signin">Sign In ( Seller )</span>
      <div class="login_section">
        <input type="text" class="login_input" name="seller_username" placeholder="Enter Username here..">
      <input type="password" class="login_input" name="seller_password" placeholder="Enter Password here..">
      <button type="submit" name="seller_login_submit" class="login_btn">Login</button>

      <div class="login_register">Not a member?  <a href="seller_register.php">  Register here..</a></div>
      <?php echo $login_error=""; ?> 
      </div>
      </div>   
    </form>  
  </div>

</main>

<footer class="login_footer">
<div class="login_copyright">
  &copy; 2023 - Online Music Retailer 
</div>
</footer>
<?php
    session_start();
    if(isset($_POST['seller_login_submit'])){
      //connect to db 
    include '../php/conn.php';

    $seller_username = $_POST['seller_username'];
    $seller_password = $_POST['seller_password'];

    $check_seller_query= "SELECT Username,Password FROM seller_details;";
    $brc = $conn->query($check_seller_query);
    
    if($brc->num_rows>0){
      while($row_s = $brc->fetch_assoc()){
           if($row_s['Username']==$seller_username && $row_s['Password']==$seller_password ){
                  // echo "<div> You can log in </div>";
                  header("Location: ../seller_page.php");
                  $seller_username_ = $row_s['Username'];
                  $_SESSION['seller_name_'] = $seller_username;
                  // echo "<form method='POST' action='../seller_page.php'> <input type='hidden' value='$seller_username_' name='seller_username_'> </form>";  
           }else{
                  header("Location: seller_login.php?incorrect username or password");                  
           }
      }
    }
    }
    
    ?>

</div>


</body>
</html>