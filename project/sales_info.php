<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "DunderMdb";


//create connection with the database
$myconn = new mysqli($servername, $username, $password, $database_name);

$post_emp_id = $_POST['emp_id'];
$post_sale_id = $_POST['sale_id'];
$post_sku_id = $_POST['sku_id'];
$post_sale_date = $_POST['sale_date'];
$post_quantity = $_POST['quantity'];
$post_cost = $_POST['cost'];

echo "$post_id";
echo "<br />";
echo "$post_name";
echo "<br />";
echo "$post_order_date";
echo "<br />";
echo "$post_arrival_date";
echo "<br />";
echo "$post_order_amount";
echo "<br />";
echo "$post_cost";
echo "<br />";


//insert data into table
$mysql = "INSERT INTO Orders (order_id, vendor_name, order_date, order_amt, arrival_date, shipping_cost) VALUES ('$post_id', '$post_name', '$post_order_date', '$post_order_amount', '$post_arrival_date', '$post_cost')";

if($myconn->query($mysql) === TRUE) {
echo "Row Successfully Added";
}

else {
echo "Unsuccessful Row Insertion";
}

?>
