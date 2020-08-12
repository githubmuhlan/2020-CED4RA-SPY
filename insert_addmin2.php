<?php 

require_once('conn.php'); 


$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$age = $_REQUEST['age'];
$height = $_REQUEST['height'];
$weight = $_REQUEST['weight'];
$email = $_REQUEST['email'];
$password = MD5($_REQUEST['password']);


    

$l="SELECT * FROM spygroup Where email='".$email."'  ";
$obj = mysqli_query($conn, $l) or die("Error Query [" . $l . "]");

if(mysqli_num_rows($obj)==0)
         
    {
        $sql = "
                INSERT INTO spygroup
                VALUES ('$fname','$lname','$age','$height','$weight','$email','$password','m');
                ";
                $objQuery = mysqli_query($conn, $sql);
                Header("Location: addmin.php");
             

    }else{
        echo "<script>";
        echo "alert('มีการใช้งานเเล้ว !');";
        echo "window.location='register.php';";
          echo "</script>";		
}
mysqli_close($conn);				   
?>
