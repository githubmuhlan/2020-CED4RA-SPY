<?php
session_start();
session_destroy();

?>
<!doctype html>
<html>
<head>
 <title>login page</title>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    

            <style>
            {background-color:#FFFFFF;
                color: #2F4F4F	;
                font-family: Consolas;
                font-size: 20px;
            }  
            </style>
</head>
<body>


<center>
<br>
<br>
<br>
<br>

<img src="spy_g.png" width="200">
<form name="formlogin"  method="POST" action="check_form.php">
<table border="0" >
<tbody>
<tr>
<td style="width: 70px;">email </td>
<td style="width:70px;"><input type="text"   id="email" required name="email" placeholder="กรอกอีเมลล์"></td>
</tr>
<tr>
<td style="width: 70px;">password </td>
<td style="width: 70px;"><input type="password"   id="password" required name="password" placeholder="กรอกรหัสผ่าน"></td>
</tr>
</tbody>
</table>
<br>
          <button type="submit">Login</button>
          &nbsp;&nbsp;
          <button type="reset">Reset</button>
          <br>
        </p>
</form>
<p><a href = register.php>Register</a>

</center>
</body>
</html>
