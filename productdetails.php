<?php include("dbconfig/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/header.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
</head>
<style>
    .detail-pic{
        width:400px;
    }

    .container{
        margin-top:10px;
        background-color:white;
        height:450px;
    }
        
    .container-lg{
        margin-top:10px;
        background-color:white;
        /* width:700px; */
    }

    .container-fluid{
        width:1100px;
    }

    body{
        background-color:#f1f2f6;
    }
    
    .desc1{
        font-size:20px;
    }

    .more-detail{
        margin-left:20px;
    }


</style>
<body>
<?php include"layout/header.php"?>
<div class="container-fluid">    
    <div class="container">
        <br>
        <div class="row">
        <?php 
        $id = $_GET['id'];
        $sql = "SELECT * FROM product WHERE id = '$id'";
        $result = mysqli_query($connection,$sql);
        $row = $result->fetch_assoc();
        ?>
            <div class="col-md-6 product_img">
                <img class="detail-pic" src="./img/product/<?php echo $row['image']?>">
            </div>
            <div class="col-md-6 product_content">
                <h4><?php echo $row['productname']?></h4>
                <span class="nominal">
                    <h3><b>Rp<?php echo $row['price']?></b></h3> 
                </span>
                <br>
                <div class="row">
                    <div class="col-md-3 col-sm-9">
                        <a class="desc1">Stock</a>
                    </div>
                    <div class="col-md-3 col-sm-9">
                        <a class="form-control"><?php echo $row['stock']?></a>
                    </div>
                </div>
                <hr>
                <p>
                    <div class="row">
                        <div class="col-md-3 col-sm-9">
                            <a class="desc1">Category</a>
                        </div>
                        <div class="col-md-3 col-sm-9">
                            <a class="form-control">PC</a>
                        </div>
                    </div>
                </p>    
                <p>    
                    <div class="row">
                        <div class="col-md-3 col-sm-9">
                            <a class="desc1">Quantity</a>
                        </div>    
                        <div class="col-md-3 col-sm-9">
                            <select class="form-control" name="select">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                    </div>
                </p>
                <hr>    
                <p> 

                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <button class="c-main-product__action__cart c-btn c-btn--default c-btn--default c-btn--default" style="width:200px; height:40px" >
                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M7 18.75a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0M15 18.75a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0M16.21 10.193L15.744 13H4.561L3.524 6h6.001a5.004 5.004 0 0 1 0-1h-6.15l-.254-1.72A1.509 1.509 0 0 0 1.637 2H0v1h1.637c.246 0 .459.183.495.427L3.879 15.22c.108.73.746 1.28 1.484 1.28H15.5v-1H5.363a.504.504 0 0 1-.495-.427L4.708 14h11.035a1 1 0 0 0 .986-.836l.59-3.535c-.341.233-.714.42-1.108.564" fill="#364058"></path> 
                                        <path d="M19.5 5.5a5 5 0 1 1-10 0 5 5 0 0 1 10 0zM14.5 3v5M17 5.5h-5" stroke="#364058"></path>
                                    </g>
                                </svg>
                                &nbsp;Masukkan Checkout
                            </button>
                        </div>
                        <!-- <form action="transaction.php">
                       <?php function call(){
                           echo $row['category'];
                        }
                        ob_start();
                        call();
                        $selectedcategory = ob_get_clean();
                        ?> -->
                        <div class="col-md-6 col-sm-12">    
                            <div class="space-ten"></div>
                                <div class="btn-ground">
                                    <button type="button" class="btn btn-primary" style="width:200px; height:40px">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                        <span class="glyphicon glyphicon-heart"></span>
                                            Beli Sekarang!
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
                        <p>
                            <div>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span>Bayar sebelum jam 17:00 WIB agar barang dikirim hari ini</span>
                            </div>
                        </p>
                    </div>  
                </p> 
            </div>
        </div>
        <div class="container-lg">
            <div class="more-detail">
                <br>
                <p>
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Description</h4>
                        </div>
                        <div class="col-sm-8">
                        <?php echo $row['description']?>
                        </div>
                    </div>
                </p>
                <br>
            </div>       
        </div>
    </div>
</div>
</body>
</html>