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
$mysql = "CREATE TABLE Sales (
sale_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku_id INT(6),
sale_date INT(9),
employee_id INT(6),
quantity INT(6),
notes VARCHAR(100),
net_profit INT(10)
)";
if ($myconn->query($mysql) === TRUE) {
echo "Successful";
}
else {
echo "Unuccessful";
}

?>
