<?php
include_once("controller/catcontroller.php");
$catController=new CatController();
$results=$catController->showDepts();
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
<div class="container">
<div class='float-right' style="background-color: green; opacity: 0.7;">
    <a href='create_cat.php' class='btn btn-primary pull-right'>Create Category</a>
</div>

 <table class="table table-striped" >
<thead style="background-color:#be6a15; margin-top:20px; color:white;">
<tr >
<td >No</td>
<td>Name</td>
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


<td><a class="btn btn-warning" href="catview.php?id=<?php echo $result['id'];?>" ><i class="fa fa-eye"></i></a>&nbsp; &nbsp; <a class="btn btn-success" href="catedit.php?id=<?php echo $result['id'];?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp; <a class="btn btn-danger" onclick="return deleteuser(<?php echo $result['id'];?>);"><i class="fa fa-trash"></i></a></td>
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
			window.location.href="catdelete.php?id="+id;
			return true;
		}
	}
</script>
</body>
</html>