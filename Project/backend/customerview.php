<?php

include_once('controller/customercontroller.php');
$cusid=$_GET['id'];
$customercontroller=new CustomerController();
$results=$customercontroller->viewCus($cusid);//$results;

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
			<label>Name-</label>
            <?php echo $result['name']; ?>
            <br>

            <label>Email-</label>
            <?php echo $result['email']; ?>
            <br>

            <label>Phone-</label>
            <?php echo $result['phone']; ?>
            <br>

            <label>Address-</label>
            <?php echo $result['address']; ?>
            <br>

            <label>Township-</label>
            <?php echo $result['township']; ?>
            <br>
            
            <label>City-</label>
            <?php echo $result['city']; ?>
            <br>
            
            <label>Business Name-</label>
			<?php echo $result['bname']; ?>
            <br>
				
		<?php
	}
        ?>
        <div class='float-right' style="background-color: green; opacity: 0.7;">
    <a href='customerindex.php' class='btn btn-primary pull-right'>Read Customer</a>
</div>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/employee.js"></script>
</body>
</html>