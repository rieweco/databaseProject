<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$database_name ="firstdb";

// Create a database connection
$myconn = new mysqli($servername, $username, $password, $database_name);

// Make sure the connection works
if ($myconn->connect_error)
die ("Connection failed" .$myconn->connect_error);

// Create a table
$mysql = "CREATE TABLE Person (
person_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";
if ($myconn->query($mysql) === TRUE) {
echo "Successful";
}
else {
echo "Unuccessful";
}

?>


