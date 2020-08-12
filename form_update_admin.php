
<?php
session_start();
?>
<htmal>
<?php
require('conn.php');
$_SESSION["p"]="pass";


       


    ?> <br>
    <?php if($_SESSION["e"]!=""||$_SESSION["p2"]!="")
{ 
    ?>
    <center>
 <img src="spy_g.png" width="300">
   



                    <table border="0" bordercolor="#FFFFFF"  border-width: 0px;>
<tbody>
<tr>
<td style="width: 50px;">select</td>
<td style="width: 50px;"> <form action="update_admin.php" method="post" name="admin">
    <?php
              
                require('conn.php');
                $sql = '
    SELECT email 
    FROM spygroup;
    ';
                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                
              <select name="email2">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["email"]; ?>><?php echo $objResult["email"]; ?></option>
                        <?php
                        }
                        ?>
                    </select></td>
</tr>
</tbody>
</table>

                    
                   

    <table border="10" bordercolor="#528B8B" cellspacing="0" style="border-collapse:collapse;border-color:#528B8B;border-width:12px">
            
            
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">first name : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="fname2"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">last name : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="lname2"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">age : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="age2"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">height : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="height2"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:200px;height:50.0208px;color:#E8E8E8;border-width:5px ">weight : </td>
                <td style="background-color:#FFFFFF;text-align:center;width:100px;height:50.0208px;color:#E8E8E8;border-width:5px "><input type="text" name="weight2"></td>
            </tr>
           
        </table>

        <br>
        <input type="submit" value="save">
        

       
    </form>
    
    </center>
    <?php } else Header("Location: form.php");
?>
   <center> 
   <table border="0" bordercolor="#FFFFFF"  border-width: 0px;>
<tbody>
<tr>
<td style="width: 60px;"><a href= addmin.php><img src="back.png" width="92"></a></td>
<td style="width: 60px;"><a href= Logout.php><img src="logout.png" width="92"></a></td>
</tr>
</tbody>
</table>

</center>
    </html>
    <?php
    mysqli_close($conn); 
   
    ?>