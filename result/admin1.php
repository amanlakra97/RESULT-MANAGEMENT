<?php
Session_start();
$con=Mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'report');
if(isset($_POST['login']))
{
    //echo '<script type="text/javascript"> alert("login button clicked") </script>';
	$username=$_POST['username'];
    $password=$_POST['password_1'];
    $query="select * from users WHERE username='$username' AND password='$password'";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
        $_SESSION['username']=$username;
        header('location:main1.php');
    }
    else
    {
        echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';
    }
}
	?>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="admin1.css">
</head>
<h1 align="center">Admin Login</h1>
<center>
<form class="home" method="POST" action="admin1.php">
<div class="imgcontainer">
    <img src="admin.jpg" alt="Avatar" class="avatar">
  </div>

    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username" placeholder="Enter username"  required>
    	</div>
    	<div class="input-group">
    		<label>password</label>
    		<input type="password" name="password_1" placeholder="Enter password" required>
    	</div>
    	<div class="input-group">
    		<button type="submit"  name="login" class="btn"> Login</button>

    	</div>
    	 
        New User<a href="signup.php">SIGNUP</a>
</form>
</center>
</body>
</html>