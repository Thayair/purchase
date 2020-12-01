<?php
include_once("controller/customercontroller.php");
$customerController=new CustomerController();
$results=$customerController->showCus();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Department</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluide" style="margin:10px 10px 0 10px">
<div class='float-right' style="border-radius:20px; margin:0 0 10px 0">
    <a href='createcustomer.php' class='btn btn-primary pull-right'>Create Customer</a>
</div>

 <table class="table table-striped" >
<thead style="background-color:#be6a15; margin-top:20px; color:white;">
<tr >
<td >No</td>
<td>Name</td>
<td>Email</td>
<td >Phone</td>
<td>Address</td>
<td >Township</td>
<td>City</td>
<td>Business Name</td>
<td>Action</td>

</tr>
</thead>
<tbody style="background-color:#f3cf7a;">
<?php
$i=0;
foreach($results as $result)
{

 ?>
<tr>
<td><?php echo $i++?> </td>
<td><?php echo $result['name'];?> </td>
<td><?php echo $result['email'];?> </td>
<td><?php echo $result['phone'];?> </td>
<td><?php echo $result['address'];?> </td>
<td><?php echo $result['township'];?> </td>
<td><?php echo $result['city'];?> </td>
<td><?php echo $result['bname'];?> </td>



<td><a class="btn btn-warning" href="customerview.php?id=<?php echo $result['id'];?>" ><i class="fa fa-eye"></i></a>&nbsp; &nbsp; <a class="btn btn-success" href="customeredit.php?id=<?php echo $result['id'];?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp; <a class="btn btn-danger" onclick="return deleteuser(<?php echo $result['id'];?>);"><i class="fa fa-trash"></i></a></td>
</tr>

<?php

}
?>
</tbody>

</table>	
</div>
<script type="text/javascript">
	function deleteuser(id){
		$result=confirm("Are you sure to delete?");
		if ($result) {
			window.location.href="customerdelete.php?id="+id;
			return true;
		}
	}
</script>
</body>
</html>