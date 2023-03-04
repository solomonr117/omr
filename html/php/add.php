<?php
  
$inst_name = $_POST['inst_name'];
$inst_types = $_POST['inst_types'];
$inst_price = $_POST['inst_price'];

// Image Field 
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','png','pdf');

if(in_array($fileActualExt, $allowed)){
  if($fileError === 0){
        
             $fileNameNew = uniqid('',true).".".$fileActualExt;
             $fileDestination = 'uploads/'.$fileNameNew;
             move_uploaded_file($fileTmpName, $fileDestination);

             echo "<script type = 'text/javascript'> console.log('Uploaded Successfull.. !');</script>";

              header("Location: seller_page.php?uploadsuccess");
        
  } else{
  echo "<script type = 'text/javascript'> alert('There was an error uploading file 🥲 ');</script>";
  }
      
}else{
  echo "<script type = 'text/javascript'> alert('You cannot upload files of this type ❌');</script>";
}

// Send Details to DB 
$send_data = "INSERT INTO inst_details(Name,Price,Type,Pic,Seller_name) VALUES('$inst_name', '$inst_price','$inst_types','$fileNameNew','$slr_usrname')";
if ($conn->query($send_data) === TRUE) {
echo "<script type = 'text/javascript'> console.log('Uploaded Query.. !');</script>";

} else {
  echo "Error creating database: " . $conn->error;
}

