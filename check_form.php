
<?php
session_start();
if(isset($_POST['email'])){
require('conn.php');
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];
$_SESSION["e"]=$EMAIL;


$sql="SELECT * FROM spygroup Where email='".$EMAIL."' and password='".$PASSWORD."' ";
$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if(mysqli_num_rows($objQuery)==1){
 
  $row = mysqli_fetch_array($objQuery);

  $_SESSION["first"] = $row["fname"];
  $_SESSION["lastname"] = $row["lname"];
  $_SESSION["status"] = $row["status"];

  if($_SESSION["status"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
    
    
    Header("Location: addmin.php");


  }

  if ($_SESSION["status"]=="m"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

    Header("Location: member.php");

  }

}else{
echo "<script>";
    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
    echo "window.history.back()";
echo "</script>";

}

}else{


Header("Location: form.php"); //user & password incorrect back to login again







}
    ?>
   

