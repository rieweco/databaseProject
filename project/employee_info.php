<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "firstdb";


//create connection with the database
$myconn = new mysqli($servername, $username, $password, $database_name);

$post_id = $_POST['id'];
$post_name = $_POST['pname'];
$post_hire_date = $_POST['hire'];
$post_commission = $_POST['comm'];

echo "$post_id";
echo "<br />";
echo "$post_name";
echo "<br />";
echo "$post_hire_date";
echo "<br />";
echo "$post_commission";
echo "<br />";


//insert data into table
$mysql = "INSERT INTO Employee (employee_id, name, hire_date, commission) VALUES ('$post_id', '$post_name', '$post_hire_date', '$post_commission')";

if($myconn->query($mysql) === TRUE) {
echo "Row Successfully Added";
}

else {
echo "Unsuccessful Row Insertion";
}

?>
