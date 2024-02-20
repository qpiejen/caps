<?php
include "conn.php";
session_start();

//this code is for add products
if(isset($_POST['add_products'])){

    $picname = $_FILES['pic']['name'];
    $fileTmpName = $_FILES['pic']['tmp_name'];

    $pn = $_POST['pn'];
    $price = $_POST['price'];

    $insert = mysqli_query($conn, "INSERT INTO tvl_1 VALUES('0','$picname','$pn','$price')");

    if($insert == true){
        $fileDestination = 'upload/'.$picname;
        move_uploaded_file($fileTmpName, $fileDestination);

        ?>
        <script>
            alert("1 Product Added");
            window.location.href="view_products.php";
        </script>
        <?php

        
    }else{
        ?>
        <script>
            alert("Error in Adding");
            window.location.href="view_products.php";
        </script>
        <?php
    }
}
?>