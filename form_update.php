
<?php
session_start();
?>
<htmal>
<?php
require('conn.php');


$EMAIL = $_SESSION["e"];
$_SESSION["p"]="pass";
       


    ?> 
    

    <?php if($_SESSION["e"]!="")


{   echo "<br>";
    echo "<h2><center>User :  $EMAIL</center></h2>";?> 
    <center>
    
 <img src="spy_g.png" width="300">
    <form action="update.php" method="post" name="member">
    <table border="10" bordercolor="#528B8B" cellspacing="0" style="border-collapse:collapse;border-color:#528B8B;border-width:12px">
            
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">first name : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">last name : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">age : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="age"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">height : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="height"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">weight : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="weight"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="save">
        

        
    </form>
    
    

    <table border="0" bordercolor="#FFFFFF"  border-width: 0px;>
<tbody>
<tr>
<td style="width: 60px;"><a href= member.php><img src="back.png" width="92"></a></td>
<td style="width: 60px;"><a href= Logout.php><img src="logout.png" width="92"></a></td>
</tr>
</tbody>
</table>

    </center>
    <?php } else Header("Location: form.php");
?>

    </html>
    <?php
    mysqli_close($conn); 
   
    ?>