<?php
$itemid=$_GET['id'];
include_once('controller/itemcontroller.php');
$itemcontroller=new ItemController();
$results=$itemcontroller->viewitem($itemid);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Employee</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
<body>
<div class="container bg-light mt-5">
	<?php
	foreach ($results as $result) {
		
	?>
			<label>Name</label>
			<br>

				<?php echo $result['name']; ?><br>

				<label>Photo</label>
			<br>

			<img src="<?php echo $result['photo'];?>" style="width:80px; height:80px;"><br><br>

				<label>Code</label>
				<br>
				<?php echo $result['code']; ?><br>
			
				<br>
				<label>Size</label><br>
				<?php echo $result['size']; ?><br>
				<br>
				<label>Color</label><br>
		
				<?php echo $result['color']; ?><br>
				<br>
				<label>Price</label><br>
				<?php echo $result['price']; ?><br>
				<br>
				<label>Productid</label><br>
				<?php echo $result['productid']; ?><br>
		<?php
	}
		?>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/employee.js"></script>
</body>
</html>