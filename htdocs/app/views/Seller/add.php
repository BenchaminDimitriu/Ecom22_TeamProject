<html>
<head>
	<title>Add product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<h1>Add Item</h1>

		<?php
		if(isset($_GET['error'])){
		?>
		<div class="alert alert-danger" role="alert">
			<?=$_GET['error']?>
		</div>
		<?php
		}
		?>

		<form action='' method='post'>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Item Name:<input class='form-control' type="text" name="item_name"/></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Item Description:<textarea class='form-control' name='item_description'></textarea></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Item Price:<input class='form-control' type="password" name="item_price"/></label>
			</div>
				<div class="form-group">
				<label class="col-sm-2 col-form-label">Image:<input class='form-control' type="file" name="item_image" id="picture" /></label><img id='pic_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" />
			</div>
			<input class='btn btn-primary' type="submit" name="action" value="Add Item" />
		</form>
		<a href='/Seller/index' class='btn btn-secondary'>Cancel</a>
	</div>
</body>
</html>