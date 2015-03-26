<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Code check with Flawfinder</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="main">
<h1>kindly login for Flawfinder</h1>
<p color:blue> This site provides online static analysis check for your C or C++ code using 
flawfinder. Upload your file and all the security threats will be displayed. Registration is
required for you to check your code. Have fun! </p>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login "></form>
<form action="register.php" method="post">
<input name="register" type="submit" value=" register "></form>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>