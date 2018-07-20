<?php
require "config.php";
if(!empty($_GET["q"]))
{
$q = $_GET["q"];
$sql = "SELECT * FROM profile WHERE firstname = '".$q."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "firstname: " . $row["firstname"]. " lastname: " . $row["lastname"]. " email:" . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


}
?>
