<?php
    include"dbconnect.php";
    $id=$_GET['pID'];
    $show_update="select * from product where pID = '$id'";
    $result=mysqli_query($dbcon,$show_update);
    mysqli_close($dbcon);
    $record=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูสินค้า</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#C0C0C0">
    <center><h3>แก้ไขสินค้า</h3>
        <table><br><br>
            <form method="post" enctype="multipart/form-data" action="product_update_code.php">
            <tr><td>รหัสสินค้า</td><td><input type="text" name="pID" value="<?php echo$record['pID']; ?>"></td></tr>
            <tr><td>ชื่อสินค้า</td><td><input type="text" name="pName" value="<?php echo$record['pName']; ?>"></td></tr>
            <tr><td>ราคา</td><td><input type="text" name="pPrice" value="<?php echo$record['pPrice']; ?>"></td></tr>
            <tr><td>จำนวน</td><td><input type="text" name="pQuanlity" value="<?php echo$record['pQuanlity']; ?>"></td></tr>
            <tr><td>ประเภท</td><td><select name="pType" >
                <option value="<?php echo$record['pType']; ?>"><?php echo$record['pType']; ?></option>
                <option value="รองเท้าส้นสูง">รองเท้าส้นสูง</option>
                <option value="รองเท้าแตะ">รองเท้าแตะ</option>
                <option value="รองเท้าผ้าใบ">รองเท้าผ้าใบ</option>
            </td></tr>
            <tr><td>สถานะ</td><td><select name="pStatus">
            <option value="<?php echo$record['pStatus']; ?>"><?php echo$record['pStatus']; ?></option>
                <option value="Normal">Normal</option>
                <option value="SoldOut">SoldOut</option>
                <option value="Discount">Discount</option>
            </td></tr>
            <tr><td>รายละเอียด</td><td><textarea cols="50" rows="5"  name="pDetail" ><?php echo $record['pDetail']; ?>
            </textarea></td></tr>
            <tr><td>รูปภาพ</td><td><input Type="file" name="Photo"><br>
            <img src=Photo/<?php echo$record['pPhoto']; ?> width=30%></td></tr>
        </table><br>
            <input Type="submit" value="ตกลง">
            <input Type="reset" value="ยกเลิก">
        </form>
    </center>
</body>
