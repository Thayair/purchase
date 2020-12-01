<?php
include_once("controller/itemcontroller.php");
include_once("controller/catcontroller.php");
$itemid=$_GET["id"];
$itemController=new ItemController();
$results=$itemController->viewitem($itemid);

$catController=new CatController();
$cat_results=$catController->showDepts();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $photo=$_FILES['photo'];
    $basepath='photo/';
    $fullpath=$basepath.$photo['name'];
    move_uploaded_file($photo['tmp_name'],$fullpath);

    $code=$_POST['code'];
    $size=$_POST['size'];
    $color=$_POST['color'];
    $price=$_POST['price'];
    $pro_id=$_POST['productid'];
    $itemController=new ItemController();
    $itemController->edititem($itemid,$fullpath,$name,$code,$size,$color,$price,$pro_id);
    header('location:itemindex.php');

}


?>



<form  method="post" enctype="multipart/form-data">
<?php
foreach($results as $result)
{
?>
    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control"   value="<?php echo $result['name'] ;?>">
    </div>
    </div>

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="file" name="photo" class="form-control"   value="<?php echo $result['photo'] ;?>">
    </div>
    </div>

    
    <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-10">
      <input type="text" name="code" class="form-control"  value="<?php echo $result['code'];?>" >
    </div>
    </div>
    <div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label">Size</label>
    <div class="col-sm-10">
      <input type="text" name="size" class="form-control"  value="<?php echo $result['size'];?>">
    </div>
    </div>
    <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Color</label>
    <div class="col-sm-10">
      <input type="text" name="color" class="form-control"  value="<?php echo $result['color'];?>">
    </div>
    </div>
    <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" name="price" class="form-control"  value="<?php echo $result['price'];?>">
    </div>
    </div>
    <?php
}
?>
    <div class="form-group row">
    <label for="pro" class="col-sm-2 col-form-label">Product</label>
    <div class="col-sm-10">
      <select name="productid">
      <?php

        foreach($cat_results as $cresult)
        {
            if($cresult['id']==$result['itemid'])
            {
      ?>
      <option value="<?php echo $cresult['id'];?>" selected><?php echo $cresult['name'];?> </option>
      <?php
            }
            else
            {
      ?>
      <option value="<?php echo $cresult['id'];?>"><?php echo $cresult['name'];?> </option>
      <?php
            }}
      ?>
      
      </select>
    </div>
    </div>
   <div class="form-group row">
    <div class="col-auto">
      <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
    </div>
    
      
</form>