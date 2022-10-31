<html>
<head>
	<title>Message Delete</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<?php
		if(isset($_GET['error'])){
		?>
		<div class="alert alert-danger" role="alert">
			<?=$_GET['error']?>
		</div>
		<?php
		}
		?>
		<h1>Instructions</h1>
		<p class="lead">Confirm the deletion of the following message by providing the Modification password set for this post at the time of its creation and then click "Delete the Post". Click "Cancel" if you no longer wish to delete this post.</p>
		<form action='' method='post'>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Author:<input class='form-control' type="text" name="author" value='<?=$data->author ?>' disabled /></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Message:<textarea class='form-control' name='message' disabled><?=$data->message ?></textarea></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Modification password:<input class='form-control' type="password" name="password" /></label>
			</div>
			<input class='btn btn-danger' type="submit" name="action" value="Delete the Post" />
		</form>
		<a href='/Post/index' class='btn btn-secondary'>Cancel</a>
	</div>
</body>
</html>