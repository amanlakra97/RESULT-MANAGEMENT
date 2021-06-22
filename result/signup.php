<?php 
require 'config/config.php';
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="signup.css">
</head>
<h1 align="center">Admin Login</h1>
<center>
<form class="home" method="POST" action="signup.php">

    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username" placeholder="Enter username"  required>
    	</div>
    	<div class="input-group">	
    		<label>Email</label>
    		<input type="Email" name="Email" placeholder="Enter Email" required>
    	</div>
    	<div class="input-group">
    		<label>password</label>
    		<input type="password" name="password_1" placeholder="Enter password" required>
    	</div>
    	<div class="input-group">
    		<label>confirm password</label>
    		<input type="password" name="password_2" placeholder="Re-Enter password ">
    	</div>
    	<div class="input-group">
    		<button type="submit"  name="register" class="btn"> Register</button>

    		
    	</div>
		Existing User?<a href="admin1.php">Login</a>
    	 
</form>
</center>
<?php
if(isset($_POST['register']))
{
    //echo '<script type="text/javascript"> alert("signup button clicked") </script>';
   
    $username = $_POST['username'];
	$Email = $_POST['Email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
	
 if($password_1==$password_2)
    {
        $query="select * from users WHERE Email='$Email'";
        $query_run = mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
            echo'<script type="text/javascript"> alert("user already exists..try another username") </script>';
        }
        else
        {
            $query="insert into users (username,email,password) values('$username','$Email','$password_1')";
            $query_run= mysqli_query($con,$query);
            if($query_run)
            {
                echo'<script type="text/javascript"> alert("user registered.. goto login page")</script>';
            }
            else
            {
                echo'<script type="text/javascript"> alert("ERROR!")</script>';
            }
        }
    }
    else
    {
        echo'<script type="text/javascript"> alert("Password and Confirm Password does not match!")</script>';
    }
}
?>
</body>
</html>