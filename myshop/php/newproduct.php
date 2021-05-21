<?php
    include_once("dbconnection.php");
     $name = $_POST["name"];
     $type = $_POST["type"];
     $price = $_POST["price"];
     $quantity = $_POST["quantity"];  

     if (!(isset($name) || isset($type) || isset($price) || isset($quantity))){
         echo "<script>alert('Please fill in all required information')</script>";
         echo "<script>window.location.replace('../html/newproduct.html')</script>";
     }else{
        $sqlregister = "INSERT INTO tbl_user(name,type,price,quantity) VALUES('$name','$type','$price','$quantity')";
        try{
            $conn->exec($sqlregister);
            echo "<script> alert('Add item successful')</script>";
            echo "<script> window.location.replace('../php/index.php')</script>";
        }catch(PDOException $e){
            echo "<script> alert('Add item failed')</script>";
            echo "<script> window.location.replace('../html/newproduct.html')</script>";
        }
     }
?>

