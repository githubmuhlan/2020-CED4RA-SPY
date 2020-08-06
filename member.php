<?php
session_start();
?>
<htmal>
<?php
require('conn.php');

$EMAIL = $_SESSION["e"];
        $sql = "
    
    SELECT * FROM spygroup Where email='".$EMAIL."'
    ";
       
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");


    ?>
   

<header><title>member</title>
<style>
    

body 
            {
                background-color:#FFFF99;
                color: rgb(45, 90, 41)	;
                font-family: Impact;
                font-size: 20px;
            }
            
            
   </style>
            </header>

<body>
<center>
<img src="SPY.png" width="150">

<table border="1" bordercolor="#00cc99" cellspacing="0" style="border-collapse:collapse;border-color:rgb(0,204,153);border-width:5px">
    <tr>
      <th width="150">
        <div align="center">first name</div>
      </th>
      <th width="150">
        <div align="center">last name</div>
      </th>
      <th width="150">
        <div align="center">age</div>
      </th>
      <th width="150">
        <div align="center">height</div>
      </th>
      <th width="150">
        <div align="center">weight</div>
      </th>
      <th width="150">
        <div align="center">email</div>
      </th>
    </tr>
    <?php
    
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        
        <td><?php echo $objResult["fname"]; ?></td>
        <td><?php echo $objResult["lname"]; ?></td>
        <td><?php echo $objResult["age"]; ?></td>
        <td><?php echo $objResult["height"]; ?></td>
        <td><?php echo $objResult["weight"]; ?></td>
        <td><?php echo $objResult["email"]; ?></td>
      </tr>
    <?php
    
    }
    ?>
  </table>
  <br>
  <p><a href= form_update.php>update</a></p>
  </center>
    
    <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
    
    ?>
</body>

</html>