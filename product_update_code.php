<?php
$id = $_POST['pID'];
$name = $_POST['pName'];
$price = $_POST['pPrice'];
$quanlity = $_POST['pQuanlity'];
$type = $_POST['pType'];
$status = $_POST['pStatus'];
$detail = $_POST['pDetail'];
$photo = $_FILES['Photo']['tmp_name'];
$photo_name = $_FILES['Photo']['name'];
include"dbconnect.php";
if($photo_name == ''){
    $update = "update product set pName = '$name',pPrice='$price',pQuanlity='$quanlity',pType='$type',pStatus='$status', pDetail='$detail' where pID='$id' "; #''
$result = mysqli_query($dbcon, $update);
mysqli_close($dbcon);
echo "<meta http-equiv=refresh content='0; url=product_show.php'>";
}else{
    $update = "update product set pName = '$name',pPrice='$price',pQuanlity='$quanlity',pType='$type',pStatus='$status',
pDetail='$detail',pPhoto='$photo_name' where pID='$id' "; #''
$result = mysqli_query($dbcon, $update);
mysqli_close($dbcon);
copy($photo,"photo/".$photo_name);
echo "<meta http-equiv=refresh content='0; url=product_show.php'>";
}
?>