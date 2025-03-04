<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การจัดการสินค้า</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
include "dbconnect.php";
$show_product = "select * from product";
$result = mysqli_query($dbcon,$show_product);
echo"<center><table border=1 cellspacing=0 width=90% 
<tr><th width=18%>รหัสสินค้า</th>
<th width=12%>ชื่อสินค้า</th>
<th width=10%>ราคาสินค้า</th>
<th width=10%>จำนวน</th>
<th width=10%>ประเภท</th>
<th width=10%>สถานะ</th>
<th width=20%>รายละเอียด</th>
<th>ภาพ</th>
<th width=10%>หมายเหตุ</th>
</tr>";
while($record = mysqli_fetch_array($result)){
    echo"<tr><td>$record[pID]</td>
    <td>$record[pName]</td> 
    <td>$record[pPrice] </td>
    <td>$record[pQuanlity] </td>
    <td>$record[pType] </td>
    <td>$record[pStatus] </td>
    <td>$record[pDetail] </td>
    <td><center><img src=photo/$record[pPhoto] ></center></td>
    <td><center>";?> <a href=product_delete.php?pID=<?php echo"$record[pID]"; ?>
    onclick="return confirm('คุณต้องการลบข้อมูลสินค้าหรือไม่? <?php echo "$record[pName]";?>
    หรือไม่ ')">ลบ</a> | <a href=product_update.php?pID=<?php echo"$record[pID]"; ?>
    onclick="return confirm('คุณต้องการแก้ไขข้อมูลสินค้าหรือไม่? <?php echo "$record[pName]";?>
    หรือไม่ ')"> แก้ไข</a></center></td>
    </tr> <?php
}
echo "</table>
<a href=product_add.php>เพิ่มสินค้า</a>
</center>";
?>