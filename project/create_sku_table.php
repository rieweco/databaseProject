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
$mysql = "CREATE TABLE Sku (
sku_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
order_id INT(6) NOT NULL,
quantity INT(6),
cost_per_unit INT(6)
)";
if ($myconn->query($mysql) === TRUE) {
echo "Successful";
}
else {
echo "Unuccessful";
}

?>
