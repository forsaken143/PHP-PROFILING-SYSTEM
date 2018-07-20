
<html>
<head>
<style>


</style>
</head>
<body>

<form action="login.php" method="post">
username: <input type="text" name="username"><br>
password: <input type="text" name="password"><br>
<input type="submit">
</form>
<?php
require "config.php";

		if (!empty($_POST["username"]))
		{
		$username = $_POST["username"];
		$password = $_POST["password"];
        $sql = "SELECT username,password FROM user WHERE username = '".$username."' AND password = '".$password."' ";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			echo "<script> alert('login successful!') </script>";
		}
		else
		{
			echo "<script> alert('login failed!') </script>";
		}
		}
$conn->close();
?>
</body>
</html> 

