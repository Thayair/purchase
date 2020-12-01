<?php

include_once('controller/catcontroller.php');
$depid=$_GET['id'];
$catcontroller=new CatController();
$results=$catcontroller->viewDep($depid);//$results;

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

				<?php echo $result['name']; ?>

				
		<?php
	}
        ?>
        <div class='float-right' style="background-color: green; opacity: 0.7;">
    <a href='catindex.php' class='btn btn-primary pull-right'>Read Category</a>
</div>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/employee.js"></script>
</body>
</html>