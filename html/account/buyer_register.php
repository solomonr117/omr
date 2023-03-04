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
<div class="buyer_register_container">

<header class="buyer_register_header">
  <nav class="buyer_register_navbar">
     <span class="buyer_register_logo"><a href="../home/home.php" class="buyer_register_anchor">Online Music Retailer</a></span>
  </nav>
</header>

<main class="buyer_register_main">
  <div class ="buyer_register_form">

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      <div class="buyer_register_formholder">    
       <span class="buyer_register_heading">Register ( User )</span>
      <div class="buyer_register_section">
      <label for="name">Name</label>
      <input type="text" class="buyer_register_input" name="usr_name" placeholder="Enter your Name here.."> 
      <label for="name">Username</label>
      <input type="text" class="buyer_register_input" name="usr_username" placeholder="Enter Username here..">
      <label for="name">Password</label>
      <input type="text" class="buyer_register_input" name="usr_pwd" placeholder="Enter Password here..">
      <label for="name">Address </label>
      <input type="text" class="buyer_register_input" name="usr_address" placeholder="Enter your Address here..">
      <label for="name">Contact </label>
      <input type="text" class="buyer_register_input" name="usr_contact" placeholder="Enter your Phone Number here..">
      <button type="submit" name="buyer_register_submit" class="buyer_register_btn">Create</button>
      </div>
      </div>   
    </form>  
  </div>

</main>

<footer class="buyer_register_footer">
<div class="buyer_register_copyright">
  &copy; 2023 - Online Music Retailer 
</div>
</footer>

<?php



if(isset($_POST['buyer_register_submit'])){

   // connect to db 
 include '../php/conn.php';
 echo "<script> console.log('Connected Successfull.. !'); </scirpt>";


 // Inserting values to db
$user_name=$_POST['usr_name'];
$user_username=$_POST['usr_username'];
$user_password=$_POST['usr_pwd'];
$user_address=$_POST['usr_address'];
$user_contact=$_POST['usr_contact'];

$buyer_details_insert = "INSERT INTO buyer_details(Name,Username,Password,Address,Contact) VALUES('$user_name','$user_username','$user_password','$user_address','$user_contact');";
$buyer_table_name= $_POST['usr_name']."_table";
$buyer_details_create_table = "CREATE TABLE $buyer_table_name (Id INT(11) AUTO_INCREMENT PRIMARY KEY,Name varchar(255), Price varchar(255), Type varchar(255), Pic varchar(255), Seller_name varchar(255), Quantity integer)";
header("Location:buyer_login.php");

$conn->query($buyer_details_insert);
$conn->query($buyer_details_create_table);


}

?>

</div>
</body>
</html>