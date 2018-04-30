<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$database_name ="DunderMdb";


/************************************
*                                   *
*       CREATE DATABASE SECTION     *
*                                   *
************************************/

$myconn = new mysqli($servername, $username, $password);

// Make sure the connection works
if ($myconn->connect_error)
die ("Connection failed" .$myconn->connect_error);

//  Creating a database
$mysql = "CREATE DATABASE DunderMdb";

if ($myconn->query($mysql) === TRUE) {
    echo "Database created successfully";
    echo "<br>";
}

else {
    echo "Error". $myconn->error;
    echo "<br>";
}

$myconn = new mysqli($servername, $username, $password, $database_name);



/************************************
*                                   *
*       CREATE TABLES SECTION       *
*                                   *
************************************/

// Create Employee table
$mysql = "CREATE TABLE Employee (
employee_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
commission INT(8),
hire_date VARCHAR(15)
)";
if ($myconn->query($mysql) === TRUE) {
    echo "CREATE TABLE Employee Successful";
    echo "<br>";
}
else {
    echo "CREATE TABLE Employee Unuccessful";
    echo "<br>";
}

// Create Password Table
$mysql = "CREATE TABLE Password (
employee_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
password VARCHAR(30) NOT NULL
)";
if ($myconn->query($mysql) === TRUE) {
    echo "CREATE TABLE password Successful";
    echo "<br>";
}
else {
    echo "CREATE TABLE Password Unuccessful";
    echo "<br>";
}


// Create Orders table
$mysql = "CREATE TABLE Orders (
order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku_id INT(6),
vendor_name VARCHAR(30) NOT NULL,
order_date VARCHAR(9),
order_amt INT(3),
arrival_date VARCHAR(9),
shipping_cost INT(10)
)";
if ($myconn->query($mysql) === TRUE) {
    echo "CREATE TABLE Orders Successful";
    echo "<br>";
}
else {
    echo "CREATE TABLE Orders Unuccessful";
    echo "<br>";
}


// Create Products table
$mysql = "CREATE TABLE Products (
sku_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
description VARCHAR(30),
sale_price INT(6)
)";
if ($myconn->query($mysql) === TRUE) {
    echo "CREATE TABLE Products Successful";
    echo "<br>";
}
else {
    echo "CREATE TABLE Products Unuccessful";
    echo "<br>";
}

// Create Sales table
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
    echo "CREATE TABLE Sales Successful";
    echo "<br>";
}
else {
    echo "CREATE TABLE Sales Unuccessful";
    echo "<br>";
}

// Create SKU table
$mysql = "CREATE TABLE Sku (
sku_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
quantity INT(6),
cost_per_unit INT(6)
)";
if ($myconn->query($mysql) === TRUE) {
    echo "CREATE TABLE Sku Successful";
    echo "<br>";
}
else {
    echo "CREATE TABLE Sku Unuccessful";
    echo "<br>";
}


// Create Vendors table
$mysql = "CREATE TABLE Vendors (
vendor_name VARCHAR(20) PRIMARY KEY,
address VARCHAR(100),
contact_name VARCHAR(50),
contact_number INT(10),
contact_email VARCHAR(50)
)";
if ($myconn->query($mysql) === TRUE) {
    echo "CREATE TABLE Vendors Successful";
    echo "<br>";
}
else {
    echo "CREATE TABLE Vendors Unuccessful";
    echo "<br>";
}


/************************************
*                                   *
*       LOAD TABLE DATA SECTION     *
*                                   *
************************************/

//insert data into Products table

$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('10100','Pen (Black) 100ct','20')";
$myconn->query($mysql);//pens
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('20500','Paper: 8.5x11 500ct x 10','120')";
$myconn->query($mysql);//8.5x11 500 ct
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('21000','Paper: 8.5x11 1000ct x 10','200')";
$myconn->query($mysql);//8.5x11 1000 ct
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('30500','Paper: 11x17 500ct x 10','150')";
$myconn->query($mysql);//11x17 500 ct
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('40500','Envelopes: 500ct x 10','50')";
$myconn->query($mysql);//envelopes 500 ct
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('50500','Paper: Legal 8.5x14 500ct x 10','170')";
$myconn->query($mysql);//Legal 8.5x14 500 ct
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('60100','Stickynotes: 100 pack','50')";
$myconn->query($mysql);//Stickynotes 100 pack
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('71000','Sabre X1000 Printer/Fax/Scanner','12000')";
$myconn->query($mysql);//Sabre X1000 Printer/Fax/Scanner
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('70550','Sabre A550 Printer/Scanner','3000')";
$myconn->query($mysql);//Sabre A550 Printer/Scanner
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('70020','Sabre B20 Printer','500')";
$myconn->query($mysql);//Sabre B20 Printer
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('80085','Toner: Black','100')";
$myconn->query($mysql);//Toner Black
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('80086','Toner: Cyan','90')";
$myconn->query($mysql);//Toner Cyan
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('80087','Toner: Magenta','90')";
$myconn->query($mysql);//Toner Magenta
$mysql = "INSERT INTO Products (sku_id, description, sale_price) VALUES ('80088','Toner: Yellow','90')";
$myconn->query($mysql);//Toner Yellow


//insert data into Vendors table

$mysql = "INSERT INTO Vendors (vendor_name, address, contact_name, contact_number, contact_email) VALUES ('Sabre Printer Company','2020 Main St, New York, NY 10005','Jo Bennett', '212.504.4115', 'jo.bennett@sabreprinting.com')";
$myconn->query($mysql);//Sabre Printing
$mysql = "INSERT INTO Vendors (vendor_name, address, contact_name, contact_number, contact_email) VALUES ('BiC USA Inc','One BIC Way Ste 1, Shelton, CT 06484','Steve Carell', '1.800.700.7000', 'scarell67@bicproducts.com')";
$myconn->query($mysql);//BiC Products Inc
$mysql = "INSERT INTO Vendors (vendor_name, address, contact_name, contact_number, contact_email) VALUES ('Sticky Icky Notes Inc','1337 Sticky Blvd, Saint Louis, MO 63141','James Halpert', '314.955.0600', 'big_tuna@stickyicky.com')";
$myconn->query($mysql);//Sticky Icky Notes inc


//insert data into Employee Table

$mysql = "INSERT INTO Employee (employee_id, name, hire_date, commission) VALUES ('122070', 'Pamela Beesly', '12.18.09', '24000')";
$myconn->query($mysql);//Pam Beesly
$mysql = "INSERT INTO Employee (employee_id, name, hire_date, commission) VALUES ('100120', 'Dwight Schrute', '08.11.01', '74200')";
$myconn->query($mysql);//Dwight Schrute
$mysql = "INSERT INTO Employee (employee_id, name, hire_date, commission) VALUES ('428569', 'Andrew Bernard', '03.01.13', '47000')";
$myconn->query($mysql);//Andy Bernard
$mysql = "INSERT INTO Employee (employee_id, name, hire_date, commission) VALUES ('348786', 'Ryan Howard', '06.15.12', '180000')";
$myconn->query($mysql);//Ryan Howard

//insert data into password table
$mysql = "INSERT INTO password (employee_id, password) VALUES ('122070', 'password')";
$myconn->query($mysql);//Pam Beesly
$mysql = "INSERT INTO Password (employee_id, password) VALUES ('100120', 'password')";
$myconn->query($mysql);//Dwight Schrute
$mysql = "INSERT INTO Password (employee_id, password) VALUES ('428569', 'password')";
$myconn->query($mysql);//Andy Bernard
$mysql = "INSERT INTO Password   (employee_id, password) VALUES ('348786', 'password')";
$myconn->query($mysql);//Ryan Howard


//insert data into orders table

$mysql = "INSERT INTO Orders (order_id, sku_id, vendor_name, order_date, order_amt, arrival_date, shipping_cost) VALUES ('111', '71000', 'Sabre Printer Company', '01.08.18', '120000', '01.30.18', '4000')";
$myconn->query($mysql);//order 111 - Pam
$mysql = "INSERT INTO Orders (order_id, sku_id, vendor_name, order_date, order_amt, arrival_date, shipping_cost) VALUES ('135', '10100', 'BiC USA Inc', '02.08.18', '2000', '02.13.18', '100')";
$myconn->query($mysql);//order 135 - Pam


//insert data into SKU table

$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('10100', '20', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('20500', '120', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('21000', '200', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('30500', '150', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('40500', '50', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('50500', '170', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('60100', '50', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('71000', '12000', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('70550', '3000', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('70020', '500', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('80085', '100', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('80086', '90', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('80087', '90', '1000')";
$myconn->query($mysql);//sku - 
$mysql = "INSERT INTO Sku (sku_id, cost_per_unit, quantity) VALUES ('80088', '90', '1000')";
$myconn->query($mysql);//sku - 


//insert data into sales table

$mysql = "INSERT INTO Sales (sale_id, sku_id, sale_date, employee_id, quantity, notes, net_profit) VALUES ('0101', '71000', '01.19.18', '122070', '2', 'Order for (2) X1000 printers', '24000')";
$myconn->query($mysql);//sale 0101 - Pam
$mysql = "INSERT INTO Sales (sale_id, sku_id, sale_date, employee_id, quantity, notes, net_profit) VALUES ('0102', '21000', '02.19.18', '100120', '101', 'Order for (101) Paper: 8.5x11 1000ct x 10', '20200')";
$myconn->query($mysql);//sale 0102 - Dwight
$mysql = "INSERT INTO Sales (sale_id, sku_id, sale_date, employee_id, quantity, notes, net_profit) VALUES ('0103', '71000', '02.22.18', '100120', '4', 'Order for (4) X1000 printers', '48000')";
$myconn->query($mysql);//sale 0103 - Dwight
$mysql = "INSERT INTO Slaes (sale_id, sku_id, sale_date, employee_id, quantity, notes, net_profit) VALUES ('0104', '70550', '03.01.18', '100120', '2', 'Order for (2) A550 Printers', '6000')";
$myconn->query($mysql);//sale 0104 - Dwight
$mysql = "INSERT INTO Sales (sale_id, sku_id, sale_date, employee_id, quantity, notes, net_profit) VALUES ('0105', '70020', '02.09.18', '428569', '94', 'Order for (94) B20 Printers', '47000')";
$myconn->query($mysql);//sale 0105 - Andy
$mysql = "INSERT INTO Sales (sale_id, sku_id, sale_date, employee_id, quantity, notes, net_profit) VALUES ('0106', '71000', '04.01.18', '348786', '15', 'Order for (15) X1000 printers', '180000')";
$myconn->query($mysql);//sale 0106 - Ryan



/************************************
*                                   *
*       DONE SETTING UP BACKEND     *
*                                   *
************************************/


//close db connection
$myconn->close();

?>
