<?php
session_start(); ?>

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
  <table border="1">
    <tr>
      <th width="50">
        <div align="center">fname</div>
      </th>
      <th width="100">
        <div align="center">lanme</div>
      </th>
      <th width="100">
        <div align="center">age</div>
      </th>
      <th width="100">
        <div align="center">height</div>
      </th>
      <th width="100">
        <div align="center">weight</div>
      </th>
      <th width="100">
        <div align="center">email</div>
      </th>
    
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["fname"]; ?></td>
        <td><?php echo $objResult["lname"]; ?></td>
        <td><?php echo $objResult["age"]; ?></td>
        <td><?php echo $objResult["height"]; ?></td>
        <td><?php echo $objResult["weight"]; ?></td>
        <td><?php echo $objResult["email"]; ?></td>
       
        <td align="center"><a href="form_update.php?$email=<?php echo $objResult["email"]; ?>">update</a></td>
        <td align="center"><a href="dalete.php?email=<?php echo $objResult["email"]; ?>">Update</a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>