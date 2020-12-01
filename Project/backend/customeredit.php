<?php
include_once('controller/customercontroller.php');
$cusid=$_GET['id'];
$cusController=new CustomerController();
$results=$cusController->viewCus($cusid);
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $township=$_POST['township'];
    $city=$_POST['city'];
    $bname=$_POST['bname'];
	
	$cusController=new CustomerController();
	$cusController->updateCus($cusid,$name,$email,$phone,$address,$township,$city,$bname);
	header('location:customerindex.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Department</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
<body>
<div class="container bg-light mt-5">
<form method="POST">
<?php
foreach ($results as $result) {
	# code...

?>
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name</label>
				<input type="text" id="input1" name="name" value="<?php echo $result['name'];?>" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
        </div>
        <div class="col-md-12">
			<div class="form-group">
				<label>Email</label>
				<input type="text" id="input1" name="email" value="<?php echo $result['email'];?>" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
        </div>
        <div class="col-md-12">
			<div class="form-group">
				<label>Phone</label>
				<input type="text" id="input1" name="phone" value="<?php echo $result['phone'];?>" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
        </div>
        <div class="col-md-12">
			<div class="form-group">
				<label>Address</label>
				<input type="text" id="input1" name="address" value="<?php echo $result['address'];?>" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
        </div>
        <div class="col-md-12">
			<div class="form-group">
				<label>Township</label>
				<input type="text" id="input1" name="township" value="<?php echo $result['township'];?>" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
        </div>
        <div class="col-md-12">
			<div class="form-group">
				<label>City</label>
				<input type="text" id="input1" name="city" value="<?php echo $result['city'];?>" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
        </div>
        <div class="col-md-12">
			<div class="form-group">
				<label>Business Name</label>
				<input type="text" id="input1" name="bname" value="<?php echo $result['bname'];?>" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
		</div>
	</div>
	
		
		
	
<?php
}
?>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="submit" id="show" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">Submit
		</button>
	</div>

	</form>
</div>
<script src="../jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/department.js"></script>
</body>
</html>