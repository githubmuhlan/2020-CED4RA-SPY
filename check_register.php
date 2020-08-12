<?php
require('conn.php');
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$age = $_REQUEST['age'];
$height = $_REQUEST['height'];
$weight = $_REQUEST['weight'];
$email = $_REQUEST['email'];
$password = MD5($_REQUEST['password']);

$sql = "
	INSERT INTO spygroup
	VALUES ('$fname','$lname','$age','$height','$weight','$email','$password','m');
    ";
    $objQuery = mysqli_query($conn, $sql);
    if ($objQuery) {
        echo "Already registered";
        Header("Location: form.php");
    } else {
        echo "Error : Input";
    }
    
    mysqli_close($conn); 
  
    ?>

