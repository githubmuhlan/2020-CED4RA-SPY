
<?php
session_start();
?>
<htmal>
<?php
require('conn.php');

$EMAIL = $_SESSION["e"];
       


    ?><center>
 <img src="SPY.png" width="150">
    <form action="update.php" method="post" name="member">
    <table border="1" bordercolor="#00cc99" cellspacing="0" style="border-collapse:collapse;border-color:rgb(0,204,153);border-width:5px">
            
            <tr>
                <td>first name : </td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>last name : </td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>age : </td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>height : </td>
                <td><input type="text" name="height"></td>
            </tr>
            <tr>
                <td>weight : </td>
                <td><input type="text" name="weight"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Update Data">
    </form>
    </center>
    <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
   
    ?>