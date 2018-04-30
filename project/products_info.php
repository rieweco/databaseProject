<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "DunderMdb";


//create connection with the database
$myconn = new mysqli($servername, $username, $password, $database_name);

$post_id = $_POST['id'];
$post_desc = $_POST['prod_desc'];
$post_price = $_POST['price'];

echo "$post_id";
echo "<br />";
echo "$post_desc";
echo "<br />";
echo "$post_price";
echo "<br />";



//insert data into table
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('$post_id', '$post_desc', '$post_price')";

if($myconn->query($mysql) === TRUE) {
echo "Row Successfully Added";
}

else {
echo "Unsuccessful Row Insertion";
}

?>