<html>
<body>

<form action="add.php" method="post">
firstname: <input type="text" name="firstname"><br>
lastname: <input type="text" name="lastname"><br>
email: <input type="text" name="email"><br>
<input type="submit">
</form>

 <?php
require "config.php";

// sql create table
if (!empty($_POST["firstname"]))
{

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];	
$sql = "INSERT INTO profile (firstname, lastname,email)
VALUES ('$firstname','$lastname','$email')";

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

