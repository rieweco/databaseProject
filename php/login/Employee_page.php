<?php
if (isset($_POST['uname']) and isset($_POST['pword'])) // Check if form posted user credentials.
{
	$Uname = $_POST['uname'];
	$Pword = $_POST['pword'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database_name = "DunderMdb";
	$tbl_name='password';

	//create connection with the database
	$myconn = new mysqli($servername, $username, $password, $database_name);

	$sql = "SELECT * FROM $tbl_name WHERE employee_id ='$Uname' and password = '$Pword'";
	$result = mysqli_query($myconn, $sql);

	$row = mysqli_num_rows($result);

	 // If result matched $uname and $pword, table row must be 1 row
    if($row == 1)
	{

		echo "Successful login.";
		// Print employee summary stuff here.


    }
	else // If wrong username password redirect. 
	{
	    ?>

		  <h1 align="center">Wrong username or password</h1>

		<?php
		header("Refresh: 5; URL=http://localhost/main.html");
    }
}
?>
