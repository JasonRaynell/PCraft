<?php include("dbconfig/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>

    body{
        background-color:#f1f2f6;
    }

    .card{
        /* margin-top:10px; */
        margin-bottom:10px;
    }

    .search-text{
      margin-top:10px;
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
    <?php include_once "layout/header.php"?>
    
    <div class="container">
    <p class="search-text" style="font-size:30px">
      <i class="fa fa-search" aria-hidden="true"></i>
      Search Results
    </p>
    <hr>
    <br>
        <div class="row">
            <?php
               error_reporting(0);
               
               if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search']))
               {
                   $search = $_POST['searching'];
                   htmlspecialchars($search,ENT_QUOTES,'UTF-8');
                   $search = "%$search%";
                   $category = $_POST['category'];
                   htmlspecialchars($category,ENT_QUOTES,'UTF-8');
                   $brand = $_POST['brand'];
                   htmlspecialchars($brand,ENT_QUOTES,'UTF-8');
               
                   if(!empty($brand) && !empty($category) && !empty($search)){
                       $sql = mysqli_prepare($connection,"SELECT * FROM product WHERE category = ? AND brand = ? AND productname LIKE ?");
                       mysqli_stmt_bind_param($sql,'sss',$category,$brand,$search);
                       mysqli_stmt_execute($sql);
                       $result = mysqli_stmt_get_result($sql);
                       $queryResult = mysqli_num_rows($result);
                       if ($queryResult < 0){
                           $_SESSION['error'] = "There are no results found.";
                           header("location: index.php");
                       }
                   }
                   elseif(!empty($brand) && !empty($category) && empty($search)){
                       $sql = mysqli_prepare($connection,"SELECT * FROM product WHERE category = ? AND brand = ?");
                       mysqli_stmt_bind_param($sql,'ss',$category,$brand);
                       mysqli_stmt_execute($sql);
                       $result = mysqli_stmt_get_result($sql);
                       $queryResult = mysqli_num_rows($result);
                       if ($queryResult < 0){
                           $_SESSION['error'] = "There are no results found.";
                           header("location: index.php");
                       }
                   }
                   elseif(!empty($brand) && empty($category) && !empty($search)){
                       $sql = mysqli_prepare($connection,"SELECT * FROM product WHERE productname LIKE ? AND brand = ?");
                       mysqli_stmt_bind_param($sql,'ss',$search,$brand);
                       mysqli_stmt_execute($sql);
                       $result = mysqli_stmt_get_result($sql);
                       $queryResult = mysqli_num_rows($result);
                       if ($queryResult < 0){
                           $_SESSION['error'] = "There are no results found.";
                           header("location: index.php");
                       }
                   }
                   elseif(empty($brand) && !empty($category) && !empty($search)){
                       $sql = mysqli_prepare($connection,"SELECT * FROM product WHERE category = ? AND productname LIKE ?");
                       mysqli_stmt_bind_param($sql,'ss',$category,$search);
                       mysqli_stmt_execute($sql);
                       $result = mysqli_stmt_get_result($sql);
                       $queryResult = mysqli_num_rows($result);
                       if ($queryResult < 0){
                           $_SESSION['error'] = "There are no results found.";
                           header("location: index.php");
                       }
                   }
                   elseif(!empty($brand) && empty($category) && empty($search)){
                       $sql = mysqli_prepare($connection,"SELECT * FROM product WHERE brand = ?");
                       mysqli_stmt_bind_param($sql,'s',$brand);
                       mysqli_stmt_execute($sql);
                       $result = mysqli_stmt_get_result($sql);
                       $queryResult = mysqli_num_rows($result);
                       if ($queryResult < 0){
                           $_SESSION['error'] = "There are no results found.";
                           header("location: index.php");
                       }
                   }
                   elseif(empty($brand) && !empty($category) && empty($search)){
                       $sql = mysqli_prepare($connection,"SELECT * FROM product WHERE category = ?");
                       mysqli_stmt_bind_param($sql,'s',$category);
                       mysqli_stmt_execute($sql);
                       $result = mysqli_stmt_get_result($sql);
                       $queryResult = mysqli_num_rows($result);
                       if ($queryResult < 0){
                           $_SESSION['error'] = "There are no results found.";
                           header("location: index.php");
                       }
                   }
                   elseif(empty($brand) && empty($category) && !empty($search)){
                       $sql = mysqli_prepare($connection,"SELECT * FROM product WHERE productname LIKE ?");
                       mysqli_stmt_bind_param($sql,'s',$search);
                       mysqli_stmt_execute($sql);
                       $result = mysqli_stmt_get_result($sql);
                       $queryResult = mysqli_num_rows($result);
                       if ($queryResult < 0){
                           $_SESSION['error'] = "There are no results found.";
                           header("location: index.php");
                       }
                   }
                   else{
                       $_SESSION['error'] = "Please fill the search bar or choose the option.";
                       header("location: index.php");
                   }

                while($row = $result->fetch_assoc()){
            ?>
            <div class= "col-sm-2">
                <div class="card" style="width:11rem; height:18rem">
                    <img class="card-img-top" src="./img/product/<?php echo $row['image'] ?>" alt="Card image cap" style="width:150px">
                    <div class="card-body">
                        <span class="card-title">
                            
                              <a class="ellipsis" href="./productdetails.php?id=<?php echo $row['id'] ?>"><?php echo $row['productname'] ?>  </a>
                            
                        </span>
                        
                        <span class="nominal" style="font-size:19px"><b>Rp <?php echo $row['price'] ?> </b></span>
                    </div>       
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>    
</body>
</html>