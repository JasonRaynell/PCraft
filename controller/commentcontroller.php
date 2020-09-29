<?php
include "./../dbconfig/config.php";
include_once "./../helper/csrf.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_comment'])){
    $article_id = $_SESSION['article_id'];
    unset($_SESSION['article_id']);
    $comment = $_POST['comment'];
    htmlspecialchars($comment,ENT_QUOTES,'UTF-8');
    
    $sql_user = "SELECT id FROM user WHERE username = '{$_SESSION['username']}'";
    $sqlresult = mysqli_query($connection,$sql_user);
    $user_data = $sqlresult->fetch_assoc();
    $user_id = $user_data['id'];

    $sql = mysqli_prepare($connection,"INSERT INTO comments(article_id,user_id,comment) VALUES(?,?,?)";
    mysqli_stmt_bind_param($sql,'iis',$article_id,$user_id,$comment);
    mysqli_stmt_execute($sql);
    mysqli_close($sql);
    header("location: ./../articledetails.php?id=" . $article_id);
}