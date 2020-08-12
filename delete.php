<?php

$delete_email  = $_REQUEST['email'];

require('conn.php');

$sql = "
    DELETE FROM spygroup
    WHERE email = '$delete_email' 
    ";


$objQuery = mysqli_query($conn, $sql);


if ($objQuery) {
    Header("Location: addmin.php");
} else {
    echo "Error : Delete";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>