<?php
include "./../dbconfig/config.php";
include_once "./../helper/csrf.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['post'])){
    $username = $_POST['username'];
    htmlspecialchars($username,ENT_QUOTES,'UTF-8');
    $title = $_POST['title'];
    htmlspecialchars($title,ENT_QUOTES,'UTF-8');
    $content = $_POST['message'];
    htmlspecialchars($content,ENT_QUOTES,'UTF-8');

    $sql_id = "SELECT id FROM user WHERE username='$username'";
    $query_result = mysqli_query($connection,$sql_id);
    $user_data = $query_result->fetch_assoc();
    $user_id = $user_data['id'];

    $sql = mysqli_prepare($connection, "INSERT INTO article(user_id,username,title,content) VALUES(?,?,?,?)";
    mysqli_stmt_bind_param($sql,'isss',$article_id,$username,$title,$content);
    mysqli_stmt_execute($sql);
    mysqli_close($connection);
    header("location: ./../forum.php");
}
