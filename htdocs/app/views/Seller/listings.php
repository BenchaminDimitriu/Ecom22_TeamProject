<html>
<head>

<title>Seller listings</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<p><!--display the data as a table-->
	<a href="/Seller/add">Add a new item</a>
	<table>
		<tr><th>Item Name</th><th>Price</th><th>Description</th><th>Image</th><th>action</th></tr>
	
	<?php
	foreach ($data as $item) {
		echo "<tr>
		<td type=name>$item->item_name</td>
		<td type=name>$item->item_price</td>
		<td type=name>$item->item_description</td>
		<td type=name>$item->item_image</td>
		<td type=action>
		<a href='/Seller/delete/$item->item_id'>delete</a>
		</td>
		</tr>";
	}
?>

</table>
</p>

<script>
file = "" + "<?= $data['item']->item_image ?>"
if (file != "") {
	document.getElementById("item_image_preview").src = "/images/" + file;
}
</script>

</body>
</html>