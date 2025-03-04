<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูสินค้า</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#C0C0C0">
    <center><h3>เพิ่มสินค้า</h3>
        <table><br><br>
            <form method="post"enctype="multipart/form-data" action="product_add_code.php">
            <tr><td>ชื่อสินค้า</td><td><input type="text" name="pName"></td></tr>
            <tr><td>ราคา</td><td><input type="text" name="pPrice"></td></tr>
            <tr><td>จำนวน</td><td><input type="text" name="pQuanlity"></td></tr>
            <tr><td>ประเภท</td><td><select name="pType">
                <option varue="รองเท้าส้นสูง">รองเท้าส้นสูง</option>
                <option varue="รองเท้าแตะ">รองเท้าแตะ</option>
                <option varue="รองเท้าผ้าใบ">รองเท้าผ้าใบ</option>
            </td></tr>
            <tr><td>สถานะ</td><td><select name="pStatus">
                <option varlue="Normal">Normal</option>
                <option varlue="SoldOut">SoldOut</option>
                <option varlue="Discount">Discount</option>
            </td></tr>
            <tr><td>รายละเอียด</td><td><textarea cols="50" rows="5" typr="text" name="pDetail" ></textarea></td></tr>
            <tr><td>รูปภาพ</td><td><input Type="file" name="Photo"></td></tr>
        </table><br>
            <input Type="submit" varlue="ตกลง">
            <input Type="reset" varlue="ยกเลิก">
        </form>
    </center>
</body>
</html>