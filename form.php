<?php session_start();?>
<!doctype html>
<html>
<head>
 <title>login page</title>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <style>
    

body 
            {
                background-color:#FFFF99;
                color: rgb(45, 90, 41)	;
                font-family: Impact;
                font-size: 20px;
            }
            
            
            
            
            
            </style>
</head>
<body>
<center>
<br>
<br>

<img src="SPY.png" width="150">
<form name="formlogin"  method="POST" action="check_form.php">
<p>email : <input type="text"   id="email" required name="email" placeholder="กรอกอีเมลล์"></p>
<p>password : <input type="password"   id="password" required name="password" placeholder="กรอกรหัสผ่าน"></p>

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