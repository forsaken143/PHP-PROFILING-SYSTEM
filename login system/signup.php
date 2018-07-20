<html>
<body>

<form action="signup.php" method="post">
username: <input type="text" name="username"><br>
password: <input type="text" name="password"><br>
<input type="submit">
</form>

 <?php
 require "config.php";
if (!empty($_POST["username"]))
{
$user = $_POST["username"];
$pass = $_POST["password"];

// sql create table

$sql = "INSERT INTO user (username, password)
VALUES ('$user','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?> 




</body>
</html> 

