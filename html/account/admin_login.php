<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../dist/styles.css">
</head>
<body>
<div class="login_container">

<header class="login_header">
  <nav class="login_navbar">
     <span class="login_logo"><a href="../home/home.php" class="login_anchor">Online Music Retailer</a></span>
  </nav>
</header>

<div class="login_main">
  <div class ="login_form">

    <form action="../seller_page.php" method="POST">
      <div class="login_formholder">    
       <span class="login_signin">Sign In ( Admin )</span>
      <div class="login_section">
        <input type="text" class="login_input" name="username" placeholder="Enter Username here..">
      <input type="password" class="login_input" name="password" placeholder="Enter Password here..">
      <button type="submit" class="login_btn">Login</button>

      <div class="login_register">Not a member?  <a href="seller_register.php">  Register here..</a></div>
      </div>
      </div>   
    </form>  
  </div>

</div>

<footer class="login_footer">
<div class="login_copyright">
  &copy; 2023 - Online Music Retailer 
</div>
</footer>

</div>
</body>
</html>