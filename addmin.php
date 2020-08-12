
<?php
require('conn.php');
session_start();
error_reporting( error_reporting() & ~E_NOTICE );
$_SESSION["p2"]="pass";


        $sql = '
    SELECT * 
    FROM spygroup;
    ';
       
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");


    ?>
   
   <htmal>
<header><title>ADMIN</title>
<style>
    

body  {
                background-color:#FFFFFF;
                color: #2F4F4F	;
                font-family: Consolas;
                font-size: 20px;
            }
            
            
   </style>
</header>

<body>
<br>
<?php if($_SESSION["e"]!=""||$_SESSION["p"]!="")
{?>
<center>

<img src="spy_g.png" width="200">


<table border="10" bordercolor="#528B8B" cellspacing="0" style="border-collapse:collapse;border-color:#528B8B;border-width:30px">
    <tr>
    <th style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px " >
        <div align="center">first name</div>
      </th>
      <th style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px " >
        <div align="center">last name</div>
      </th>
      <th style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px " >
        <div align="center">age</div>
      </th>
      <th style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px " >
        <div align="center">height</div>
      </th>
      <th style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px " >
        <div align="center">weight</div>
      </th>
      <th style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px " >
        <div align="center">email</div>
      </th>
    </tr>
    <?php
    
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        
        <td style="background-color:#FFF5EE;text-align:center;width:150px;height:50.0208px;color:#2F4F4F;border-width:3px  "><?php echo $objResult["fname"]; ?></td>
        <td style="background-color:#FFF5EE;text-align:center;width:150px;height:50.0208px;color:#2F4F4F;border-width:3px  "> <?php echo $objResult["lname"]; ?></td>
        <td style="background-color:#FFF5EE;text-align:center;width:150px;height:50.0208px;color:#2F4F4F;border-width:3px  "><?php echo $objResult["age"]; ?></td>
        <td style="background-color:#FFF5EE;text-align:center;width:150px;height:50.0208px;color:#2F4F4F;border-width:3px  "><?php echo $objResult["height"]; ?></td>
        <td style="background-color:#FFF5EE;text-align:center;width:150px;height:50.0208px;color:#2F4F4F;border-width:3px  "><?php echo $objResult["weight"]; ?></td>
        <td style="background-color:#FFF5EE;text-align:center;width:150px;height:50.0208px;color:#2F4F4F;border-width:3px  "><?php echo $objResult["email"]; ?></td>
      </tr>
    <?php
    
    }
    ?>
  </table>
  <table border="0" bordercolor="#FFFFFF"  border-width: 0px;>
<tbody>
<tr>
<td style="width: 60px;"><a href= form_update_admin.php><img src="edit.png" width="100"></a></td>
<td style="width: 60px;"><a href= form_delete.php><img src="delete.png" width="100"></a></td>
<td style="width: 60px;"><a href= insert_admin.php><img src="insert.png" width="92"></a></td>
<td style="width: 60px;"><a href= Logout.php><img src="logout.png" width="92"></a></td>

</tr>
</tbody>
</table>
  </center>
  <?php } else Header("Location: form.php");
?>
  <?php
  mysqli_close($conn);
  
 
  ?>

</body>



</htmal>


