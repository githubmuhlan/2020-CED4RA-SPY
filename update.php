
<?php
session_start();
require('conn.php');

$EMAIL = $_SESSION["e"];

$efname = $_POST['fname'];
$elname = $_POST['lname'];
$eage = $_POST['age'];
$eheight = $_POST['height'];
$eweight = $_POST['weight'];





$sql = "
	UPDATE spygroup
	SET fname = ' $efname ',  
	lname = '$elname ', 
	age = '$eage ', 
	height = '$eheight ', 
	weight = ' $eweight ', 
	WHERE email = '$EMAIL' ";



$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "Record " . $EMAIL . " Updated.";
} else {
	echo "Update " . $EMAIL . " error .";

	echo "<br> " . $efname ;
	echo "<br> " . $elname ;
	echo "<br> " . $eage ;




}
mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>



