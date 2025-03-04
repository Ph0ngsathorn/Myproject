<?php
    $name = $_POST['pName'];
    $price = $_POST['pPrice'];
    $quanlity = $_POST['pQuanlity'];
    $type = $_POST['pType'];
    $status = $_POST['pStatus'];
    $detail = $_POST['pDetail'];
    $photo = $_FILES['Photo']['tmp_name'];
    $photo_name = $_FILES['Photo']['name'];
    include"dbconnect.php";
    $add_product = "insert into product values(null,'$name','$price','$quanlity','$type','$status','$detail','$photo_name')"; #''
    $result = mysqli_query($dbcon, $add_product);
    copy($photo,"photo/".$photo_name);
    if($result){?>
        <script lanuage = "java script">
            alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
        </script>
    <?php echo"<meta http-equiv=refresh content='0; url=product_add.php'>"; }else{ ?>
        <script lanuage="java script">
        alret('ไม่สามมารถเพิ่มข้อมูลได้');
        </script>
    <?php echo"<meta http-equiv=refresh content='0; url=product_add.php'>"; }
?>