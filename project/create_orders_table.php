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
$mysql = "CREATE TABLE Orders (
order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
vendor_name VARCHAR(30) NOT NULL,
order_date VARCHAR(9),
order_amt INT(3),
arrival_date VARCHAR(9),
shipping_cost INT(10)
)";
if ($myconn->query($mysql) === TRUE) {
echo "Successful";
}
else {
echo "Unuccessful";
}

?>
