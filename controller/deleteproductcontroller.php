<?php
include "./../dbconfig/config.php";

$id = htmlspecialchars($_GET['id'],ENT_QUOTES,'UTF-8');
$sql = mysqli_prepare($connection,"DELETE FROM product where id = ?");
mysqli_stmt_bind_param($sql,'i',$id);
mysqli_stmt_execute($sql);
mysqli_close($sql);

header("location: ./../index.php");