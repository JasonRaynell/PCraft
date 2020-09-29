<?php
include "./../dbconfig/config.php";
session_start();
error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){

    $username = $_POST['username'];
    htmlspecialchars($username,ENT_QUOTES,'UTF-8');
    $email = $_POST['email'];
    htmlspecialchars($email,ENT_QUOTES,'UTF-8');
    $password = $_POST['password'];
    htmlspecialchars($password,ENT_QUOTES,'UTF-8');

    $hash_password = sha1($password);

    $sqluser = mysqli_prepare($connection,"SELECT username FROM user WHERE username = ?");
    mysqli_stmt_bind_param($sqluser,'s',$username);
    mysqli_stmt_execute($sqluser);
    $qresult = mysqli_stmt_get_result($sqluser);
    $count = mysqli_num_rows($qresult);

    if($count>0){
        $_SESSION['error'] = "Username is already taken";
        header("location: ./../register.php");
    }

    else{
    $sql = mysqli_prepare($connection,"INSERT INTO user(username,email,password) VALUES(?,?,?)");
    mysqli_stmt_bind_param($sql,'sss',$username,$email,$hash_password);
    mysqli_stmt_execute($sql);
    mysqli_close($connection);
    
    header("location: ./../login.php");
    }
}