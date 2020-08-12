<?php
require('conn.php');
session_start();
if (isset($_POST["register"])){
    if(empty($_POST["email"])  && empty($_POST["password"])){
        echo '<script>alert("Both Fields are required")</script>';
    }else{
        $email = mysqli_real_escape_string($connect, $_POST["email"]);
        $password  = mysqli_real_escape_string($connect, $_POST["password"]);
        $password = md5($password);
        $query = "INSERT INTO email (email, password) VALUES('$email', '$password')";
        if(mysqli_query($connect, $query)){
            echo '<script>alert("Registration Done")</script>';
        }
    }
    
}
?>


<html>
<head>

<style>
            {
                background-color:#FFFF99;
                color: rgb(45, 90, 41)	;
                font-family: Impact;
                font-size: 20px;
            }
            
</style>
</head>

<body>
<br><br>

<center>
<img src="spy_g.png" width="200">
<table border="10" bordercolor="#528B8B" cellspacing="0" style="border-collapse:collapse;border-color:#528B8B;border-width:30px">
    <form action="insert.php" method="post" name="member">
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px ">fisrt name : </td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px ">last name : </td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px ">age : </td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px ">height : </td>
                <td><input type="text" name="height"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px ">weight : </td>
                <td><input type="text" name="weight"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px ">email : </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td style="background-color:#2F4F4F;text-align:center;width:150px;height:50.0208px;color:#E8E8E8;border-width:3px ">password : </td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Register">
    </form>
</body>
</center>

</html>
