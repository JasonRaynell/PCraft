<?php include "./dbconfig/config.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online-Forum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .thread{
        background-color:#f1f2f6;
    }

    .container{
        background-color:white;
        width:900px;
    }

    .ellipsis{
      color:black;
      overflow: hidden; 
            text-overflow: ellipsis; 
            display: -webkit-box; 
            /* line-height: 16px;  
            max-height: 32px;       */
              
            /* The number of lines to be displayed */ 
            -webkit-line-clamp: 2;  
            -webkit-box-orient: vertical;
    }

</style>
<body>
    <?php include "layout/header.php" ?>
    <?php include "./dbconfig/config.php"?>
    <br>
    <div class="container">
        <div class="header">
            <nav class="breadcrumb ">
                <marquee behavior="" direction="">
                    <h3 class="breadcrumb-item active"> Welcome to PCRaft Forums !! </h3>
                </marquee>
            </nav>
        </div>
        <?php include"dbconfig/config.php";
                $sql = "SELECT * FROM article";
                $result = mysqli_query($connection,$sql);
                while($row = $result->fetch_assoc()){
                ?>
        <div class="thread">
            <div class="row">
                <div class="col-sm-7 ml-3" >
                    <div class="thread-title" style="font-size:22px;">
                        <b><a href="articledetails.php?id=<?php echo $row['article_id']?>"><?php echo $row['title']?></a></b>
                    </div>
                    <div class="ellipsis" style="font-size:17px;">
                    <?php echo $row['content']?>
                    </div>
                    <br>
                    <?php 
                    $reply_query = "SELECT * FROM comments JOIN user ON comments.user_id = user.id WHERE article_id = '{$row['article_id']}'";
                    $reply_result = mysqli_query($connection,$reply_query);
                    $rowcount= mysqli_num_rows($reply_result);
                    ?>
                    <div class="thread-comments" style="font-size:16px">
                        <i class="fa fa-comments-o"></i>
                        <span><?php echo $rowcount?></span>
                        <span> comments</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thread-creator">
                        <div class="float-right" style="font-size:18px;">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <?php echo $row['username']?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <?php }?>
        <br>
        <!-- Button to Open the Modal -->
        <?php 
        if(isset($_SESSION['username'])){
            ?>
        <div class="float-right">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newThread">
                <i class="fa fa-pencil-square-o"></i>
                    New Thread
            </button>
        </div>
        <?php } ?>
        <form action="controller/postcontroller.php" method="POST">
        <input type="hidden" name="csrf" value="<?php echo $csrf?>">
        <div class="modal fade" id="newThread" aria-hidden="true" style="display:none; margin-top:100px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="title-nthread">
                            <h4><span>Your Thread</span></h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="thTitle">Title</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="thTitle" name="title" placeholder="Enter Title">
                            </div>
                        </div>
                        <br>    
                        <div class="row">
                            <div class="col-md-4">
                                <!-- <span>Title</span> -->
                                <label for="thCreator">Creator</label>
                            </div>
                            <div class="col-md-8">
                                <!-- <span>Title</span> -->
                            <input type="text" class="form-control" id="thCreator" name="username"placeholder="Enter Name">
                            </div>
                        </div>
                        <br>    
                        <div class="row">
                            <div class="col-md-4">
                                <label for="thMessage">Message</label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="thMessage" id="" cols="10" rows="4" name="message" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="float-right">
                            <button type="submit" class="btn btn-info" name ="post">Post Now</button>
                        </div>   
                    </div>
                </div>                        
            </div>
        </div>
        </form>
    </div>

</body>
</html>