<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>e-vent</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="./bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="./bootstrap/css/test.css">

</head>
<body>



<div class="example">
  <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-btn">
      </span>
      <input type="text" class="form-control" placeholder="Search for...">
    </div><!-- /input-group -->

  
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->


 <div class="container">
	<div class="row">
<?php  
	for ($i=0; $i <10; $i++) { 
		echo '<div class="col-sm-4 col-sm-offset-1"><div class="thumbnail">
			<img src="pierre.png" alt="...">
			<div class="caption">
				<h3>Thumbnail label</h3>
				<p>...</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			</div>
		</div>
	</div>';
}

?>
</div>
</div>
</body>

<footer>
	<script src="./bootstrap/js/jquery-1.10.0.min.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
</footer>
</body>
</html>