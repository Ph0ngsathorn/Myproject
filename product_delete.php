<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลบข้อมูล</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
    $id = $_GET['pID'];
    include"dbconnect.php";
    $delete_product = "delete from product where pID = '$id'";
    $result = mysqli_query($dbcon, $delete_product);
    if($result){?>
        <script lanuage = "java script">
            alert('ลบข้อมูลเรียบร้อยแล้ว');
        </script>
    <?php echo "<meta http-equiv=refresh content='0; url=product_show.php'>"; }else{ ?>
        <script lanuage="java script">
        alret('ไม่สามารถลบข้อมูลได้');
        </script>
    <?php echo "<meta http-equiv=refresh content='0; url=product_show.php'>"; }
?>