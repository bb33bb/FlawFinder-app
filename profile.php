<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Flawfinder Check</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<form enctype="multipart/form-data" action="uploadfile.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
</form>
</div>
</body>
</html>