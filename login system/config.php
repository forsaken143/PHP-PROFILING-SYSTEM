 <?php
define("server","127.0.0.1");
define("user","root");
define("pass","");
define("dbname","mydb");

// Create connection
$conn = new mysqli(server,user,pass,dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?> 