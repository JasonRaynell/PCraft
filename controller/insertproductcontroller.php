<?php
session_start();
error_reporting(0);
include "./../dbconfig/config.php";
include_once "./../helper/csrf.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload']))
{   
    $productname = $_POST['productname'];
    htmlspecialchars($productname,ENT_QUOTES,'UTF-8');
    $brand = $_POST['brand'];
    htmlspecialchars($brand,ENT_QUOTES,'UTF-8');
    $category = $_POST['category'];
    htmlspecialchars($category,ENT_QUOTES,'UTF-8');
    $stock = $_POST['stock'];
    htmlspecialchars($stock,ENT_QUOTES,'UTF-8');
    $description = $_POST['description'];
    htmlspecialchars($description,ENT_QUOTES,'UTF-8');
    $price = $_POST['price'];
    htmlspecialchars($price,ENT_QUOTES,'UTF-8');

    $image_name = $_FILES['image']['name'];

    $allowed_extensions=["jpg","jpeg","png"];
    $image_extension = PATHINFO($image_name,PATHINFO_EXTENSION);

    if($_FILES['image']['size'] > 10000000){
        $_SESSION['error'] = "size too big";
        header("location: ./../product.php");
    } elseif (in_array($image_extension,$allowed_extensions) == false){
        $_SESSION['error'] = "invalid extension";
        header("location: ./../product.php");
    }
    else {
        
        $document_root=$_SERVER['DOCUMENT_ROOT'];
        $full_upload_path = "$document_root/SoftwareEngineering/img/product/$image_name";

        move_uploaded_file($_FILES['image']['tmp_name'],$full_upload_path);
        
        $sql = mysqli_prepare($connection,"INSERT INTO product(productname,category,brand,price,image,stock,description) VALUES(?,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($sql,'sssisis',$productname,$category,$brand,$price,$image_name,$stock, $description);
        mysqli_stmt_execute($sql);
        mysqli_close($connection);
        header("location: ./../product.php");
    }

}