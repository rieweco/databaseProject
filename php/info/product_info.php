<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "DunderMdb";


//create connection with the database
$myconn = new mysqli($servername, $username, $password, $database_name);

$post_sku_id = $_POST['sku_id'];
$post_description = $_POST['description'];
$post_sale_price = $_POST['sale_price'];

echo "$post_sku_id";
echo "<br />";
echo "$post_description";
echo "<br />";
echo "$post_sale_price";
echo "<br />";


//insert data into table
$mysql = "INSERT INTO Product (sku_id, description, sale_price) VALUES ('$post_sku_id', '$post_description', '$post_sale_price')";

if($myconn->query($mysql) === TRUE) {
echo "Row Successfully Added";
}

else {
echo "Unsuccessful Row Insertion";
}

?>
