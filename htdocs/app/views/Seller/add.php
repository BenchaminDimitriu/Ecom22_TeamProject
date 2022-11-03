<html>
<head>

<title>Add Seller Item</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<h1>Add item</h1>

<form action='' method='post' enctype='multipart/form-data'>
	<label>Item Name:<input type="text" name="item_name" /></label><br>
	<label>Price:<input type="text" name="item_price" /></label><br>
	<!-- <label>Description:<input type="date" name="item_description" /></label><br> -->
	<label>Item Description:<textarea name='item_description'></textarea></label></br>
	<label>Image:<input type="file" name="item_image" id="item_image" /></label><img id='item_image_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" /><br>
	<input type="submit" name="action" value="Add new item" />
</form>

<script>
	item_image.onchange = evt => {
  const [file] = item_image.files
  if (file) {
    item_image_preview.src = URL.createObjectURL(file)
  }
}
</script>

</body>
</html>