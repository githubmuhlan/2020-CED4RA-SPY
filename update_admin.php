
<?php

require('conn.php');



$efname = $_POST['fname2'];
$elname = $_POST['lname2'];
$eage = $_POST['age2'];
$eheight = $_POST['height2'];
$eweight = $_POST['weight2'];
$eemail = $_POST['email2'];




$sql = "
	UPDATE spygroup
	SET fname = ' $efname ',  
	lname = '$elname ', 
	age = '$eage ', 
	height = '$eheight ', 
	weight = ' $eweight ' 
	WHERE email = '$eemail' ";

	echo $sql;
	
$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "Record " . $EMAIL . " Updated.";
	Header("Location: addmin.php");

} else {
	echo "Update " . $EMAIL . " error .";
	echo "<br> " . $efname ;
	echo "<br> " . $elname ;
	echo "<br> " . $eage ;
}
mysqli_close($conn); 

?>



