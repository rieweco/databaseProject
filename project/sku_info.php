<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "DunderMdb";


//create connection with the database
$myconn = new mysqli($servername, $username, $password, $database_name);

$post_sku = $_POST['sku'];
$post_cost = $_POST['cost'];
$post_quantity = $_POST['quantity'];

echo "$post_sku";
echo "<br />";
echo "$post_cost";
echo "<br />";
echo "$post_quantity";
echo "<br />";

//insert data into table
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('$post_sku', '$post_cost', '$post_quantity')";

if($myconn->query($mysql) === TRUE) {
echo "Row Successfully Added";
}

else {
echo "Unsuccessful Row Insertion";
}
