<?php
session_start();
?>
<html>

<head></head>

<body>
    <?php
    require('conn.php');

    $sql = '
    SELECT * 
    FROM spygroup;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>
    <br>
    <br>
    <?php if($_SESSION["e"]!="")
{ 
    ?>
    <center>
    <img src="spy_g.png" width="200">
    
    <form action="delete.php" method="post" name="email">
        <table border="1">
            <tr>
                <td>select email </td>
                <td><select name="email">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["email"]; ?>><?php echo $objResult["email"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Delete Data">
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

</body>

</html>