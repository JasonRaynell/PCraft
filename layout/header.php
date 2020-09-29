<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    ul{
        list-style:none;
        margin: 0px;
        padding: 0px;
    }

    ul li{
        float: left;
    }

    ul li a{
        text-decoration: none;
        color:white;
        display:block;
    }

    ul li ul li{
        display:none;
    }

    ul li:hover ul li{
        display:block;
    }

    .logout{
        margin-left:750px;
    }

</style>
<body>
<div class="topnav">
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="custom.php">Custom PC</a></li>
        <li><a href="#">Recommendation</a>
            <ul>
                <li><a href="rec_gaming.php">Game</a></li>
                <li><a href="rec_office.php">Office</a></li>
            </ul>
        </li>
        
        <li><a href="transaction.php">Transaction</a></li> 
        <?php 
        session_start();
        if(isset($_SESSION['username']) == 'pcraft')
        {?>
            <li><a href="./product.php">Product</a></li>
        <?php
        }
        ?>
        <?php
        if(isset($_SESSION['username'])){
            ?>
            <li class="logout">    
                <a href="./controller/logoutcontroller.php">Logout
                <i class="fa fa-sign-out"></i>
                </a>
            </a>
        <?php
        }
        ?>        
    </ul>
</div>
</body>
</html>