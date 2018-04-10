<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "firstdb";


//create connection with the database
$myconn = new mysqli($servername, $username, $password, $database_name);

$post_id = $_POST['id'];
$post_name = $_POST['pname'];
$post_email = $_POST['email'];

echo "$post_id";
echo "<br />";
echo "$post_name";
echo "<br />";
echo "$post_email";
echo "<br />";


//insert data into table
$mysql = "INSERT INTO Person (person_id, name, email) VALUES ('$post_id', '$post_name', '$post_email')";

if($myconn->query($mysql) === TRUE) {
echo "Row Successfully Added";
}

else {
echo "Unsuccessful Row Insertion";
}

?>
