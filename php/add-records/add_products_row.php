<html>

 <head>
  <link rel="stylesheet" href= "../../styles/style.css">
  <title>Add Product</title>

</head>

<body>

<div class = "top">
<h1>Dunder Mifflin</h1>
</div>

<form action="../info/product_info.php" method="post">

	<div class = "add_products">
		SKU ID: <input type="text" name="sku_id" placeholder="SKU ID"><br />
		<br />
		Description: <input type="text" name="description" placeholder="Description"><br />
		<br />
		Sale Price: <input type="text" name="sale_price" placeholder="Numbers only"><br />
		<br />
		<br />
		<input type="submit">
	</div>

</form>
</body>

</html>
