<html>

 <head>
   <link rel="stylesheet" href= "../../styles/style.css">
  <title>Add SKU</title>

</head>

<body>

<img class ="equip_img" src = "../../images/img3.jpg" alt="merchandise">

<form action="../info/sku_info.php" method="post">

	<div class ="sku_info">
		<div class = nested>
			SKU ID: <input type="text" name="sku"><br />
			<br />
			Cost Per Unit: <input type="text" name="cost"><br />
			<br />
			Quantity: <input type="text" name="quantity"><br />
			<br />
			<input type="submit">
		</div>
	</div>
</form>

</body>

</html>
