<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum-Threads</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>

    body{
        background-color:#f1f2f6;
    }

    .container{
        background-color:white;
        width:800px;
    }

    .user{
        font-size:18px;
    }

</style>
<body>
<?php include"layout/header.php"?>
<?php include"dbconfig/config.php"?>
    <br>
    <div class="container">
    <!-- <br> -->
        <p style="font-size:22px;">
            <h4>Thread</h4>
        </p>    
        <hr>
        <div class="title">
        <?php 
        $id = htmlspecialchars($_GET['id'],ENT_QUOTES,'UTF-8');
        $sql = mysqli_prepare($connection,"SELECT * FROM article WHERE article_id = ?");
        mysqli_stmt_bind_param($sql,'i',$id);
        mysqli_stmt_execute($sql);
        $result = mysqli_stmt_get_result($sql);
        $row = $result->fetch_assoc();
        ?>
            <h3><?php echo $row['title']?></h3>
            <span class="content">
                <?php echo $row['content']?>
            </span>
        </div>
        <br>
        <span class="user">
            By: <?php echo $row['username']?>
        </span>
        <hr>
        <?php if(isset($_SESSION['username'])){
        ?>
        <div class="comment">
            <form action="controller/commentcontroller.php" method="POST">
            <input type="hidden" name="csrf" value="<?php echo $csrf?>">
            <div class="tab-comment">
                <label for="link" style="font-size:17px">Comment</label>
                <textarea class="form-control" name="comment" id="textboxcontentt" cols="50" rows="3" required="true"></textarea>
            </div>
            <p>
                <div class="form-group">
                    <?php $_SESSION['article_id'] = $row['article_id']?>
                    <input class="btn btn-info" id="btn-comment-notlogin" data-content="MTI0NDAz" type="submit" value="Add Comment" name="add_comment">
                </div>
            </p>
            </form>
        </div>
       <?php }?>
        <br>
    </div>
    <br>
    <div class="container">
    <?php 
    $comment_query = "SELECT * FROM comments JOIN user ON comments.user_id = user.id WHERE article_id = '{$row['article_id']}'";
    $comment_result = mysqli_query($connection,$comment_query);
    ?>
        <h4>Comments</h4>
        <?php while($comment = $comment_result->fetch_assoc()){
            ?>
        <div class="thread-comments">
            <span><?php echo $comment['comment']?></span>
        </div>
        <div class="user" style="color:blue; font-size:16px;">
            By: <?php echo $comment['username']?>
            <hr>
        </div>
        <?php } ?>
    </div>

</body>
</html>