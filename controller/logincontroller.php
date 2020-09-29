<?php 
include "./../dbconfig/config.php";
include_once "./../helper/csrf.php";
session_start();
error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    $username = $_POST['username'];
    htmlspecialchars($username,ENT_QUOTES,'UTF-8');
    $password = $_POST['password'];
    htmlspecialchars($password,ENT_QUOTES,'UTF-8');

    $hash_password = sha1($password);

    $sql = mysqli_prepare($connection, "SELECT * FROM user WHERE username = ? AND password = ? ");
    mysqli_stmt_bind_param($sql,'ss', $username, $hash_password);
    mysqli_stmt_execute($sql);
    $result = mysqli_stmt_get_result($sql);
    mysqli_close($connection);

    if($result->num_rows > 0)
    {
        session_regenerate_id();
        $_SESSION['username'] = $username;
        header("location: ./../index.php");
    }
    else {
        $_SESSION['error'] = "Wrong username and password";
        header("location: ./../login.php");
    }
}
