
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
    <style>
        
        body{
            background:url("./img/recommend/bgg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .carousel-inner img {
            margin-top: 5px;
            width: 100%;
            height: 260px;
            
        }

        .container-fluid{
            width: 45%;
            height: 10%;
        }

        .container{
            width: 45%;
            height: 10%;
            top: 100px;
            padding: 15px;
        }

        .card{
            height:100%;
        }

        .lihatDetail-pic{
            width:80%;
            margin-left:10%;
            margin-top:10%;
        }

        .modal-content{
            width:200%;
            right:50%;
        }

        .nominal{
            color:blue;
        }

    </style>
<body>
    
    <div class="container-fluid" >
        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class=""></li>
            <li data-target="#demo" data-slide-to="1" class=""></li>
            <li data-target="#demo" data-slide-to="2" class=""></li>
        </ul>

        
        <!-- The slideshow -->
        <div class="carousel-inner">
        
            <div class="carousel-item">
                <img src="./img/recommend/rog4.jpg" alt="Los Angeles" width="50" height="30">
            </div>
            <div class="carousel-item active">
                <img src="./img/recommend/rog3.jpg" alt="Chicago" width="50" height="30">
            </div>
            <div class="carousel-item">
                <img src="./img/recommend/rog5.jpg" alt="New York" width="50" height="30">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
   </div>

   <div class="container" >
        <div class="btn-group btn-group-lg">
            <a href="./rec_office.php">
                <button type="button" class="btn btn-primary btn-lg">Office</button>
            </a>
            <a href="./rec_gaming.php">
                <button type="button" class="btn btn-primary btn-lg">Gaming</button>
            </a>
        </div>
        <?php 
        include "./dbconfig/config.php";
        ?>
        <div class="bd-example">
            <div class="row">
                <div class= "col-sm-6">
                    <div class="card" style="width: 18rem;">
                    <?php 
                    $sql = "SELECT * FROM product WHERE id = '7'";
                    $result = mysqli_query($connection,$sql);
                    $row = $result->fetch_assoc();
                    ?>
                    <a href="productdetails.php?id=<?php echo $row['id']?>"><img class="card-img-top" src="./img/product/<?php echo $row['image']?>" alt="Card image cap"></a> 
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['productname']?></h5><br>
                            <h6>PC Siap Untuk Game:</h6>
                            <h6>GTA V</h6>
                            <h6>Resident Evil 7</h6>
                            <h6>Watchdog 2</h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gaming_view">
                                <i class="fa fa-search"></i>
                                Overview
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade product_view" id="gaming_view" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 product_img">
                                        <img src="./img/product/<?php echo $row['image']?>"class="lihatDetail-pic">
                                    </div>
                                    <div class="col-md-6 product_content">
                                        <h4><?php echo $row['productname']?></h4>
                                        <span class="nominal">
                                            <h3>Rp<?php echo $row['price']?></h3> 
                                        </span>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Informasi</h6>
                                                </div>
                                                <div class="col-sm-5">
                                                    Kondisi <br>
                                                    Terjual <br>
                                                    Dilihat <br>
                                                    Waktu Proses <br>
                                                    Diperbarui <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    : <b>BARU</b> <br>
                                                    : 0 <br>
                                                    : 0 <br>
                                                    : 3 hari kerja <br>
                                                    : 20 Mei 2020 <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Spesifikasi</h6>
                                                </div>
                                                <div class="col-sm-5">
                                                    Kategori <br>
                                                    Berat <br>
                                                    Merek <br>
                                                    Kapasitas Hardisk <br>
                                                    Kapasitas Memory <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    : Desktop <br>
                                                    : 19.0 kg <br>
                                                    : Rakitan <br>
                                                    : > 1TB <br>
                                                    : >= 8GB <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Detail</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    Motherboard ASROCK FM2A68-DG3+ <br>
                                                    Processor A8 7650K <br>
                                                    DDR3 8GB <br>
                                                    HDD 1TB / 1000GB SATA <br>
                                                    Sound Card + Lan Card <br>
                                                    Casing ATX Power logic + PSU <br>
                                                    VGA ATi Radeon R7 Series Up to 2GB <br>
                                                    MONITOR LED LG 19" <br>
                                                    KEYBOARD MOUSE <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Siap Game</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    GTA V <br>
                                                    Resident evil 7 <br>
                                                    Dota <br>
                                                    MOTO GP <br>
                                                    Wathdog2 <br>
                                                    PES 2017 <br>
                                                </div>
                                                <div class="col-sm-5">
                                                    Farcry Primal <br>
                                                    Farcry 4 <br>
                                                    NFS Rivals <br>
                                                    Battlefield 1 dan 3 <br>
                                                    Call Of duty Blackops <br>
                                                    Dan lain-lain. <br>
                                                </div>
                                            </div>
                                        </p>
                                        <!-- <p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="">16GB</option>
                                                        <option value="">32GB</option>
                                                        <option value="">64GB</option>
                                                        <option value="">128GB</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                    </select>
                                                </div>                                             
                                                <div class="space-ten"></div>
                                                <div class="btn-ground">
                                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span>Beli Sekarang!</button>
                                                </div>
                                            </div>
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class= "col-sm-6">
                    <div class="card" style="width: 18rem;">
                    <?php
                    $sql1 = "SELECT * FROM product WHERE id = '9'";
                    $result1 = mysqli_query($connection,$sql1);
                    $row1 = $result1->fetch_assoc();
                    ?>
                    <a href="productdetails.php?id=<?php echo $row1['id']?>"><img class="card-img-top" src="./img/product/<?php echo $row1['image']?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row1['productname']?></h5>
                            <h6>PC Siap Untuk Game:</h6>
                            <h6>GTA V</h6>
                            <h6>Call of Duty Blackops</h6>
                            <h6>NFS Rivals</h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gaming_view2">
                                <i class="fa fa-search"></i>
                                Overview
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade product_view" id="gaming_view2" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 product_img">
                                        <img src="./img/product/<?php echo $row1['image']?>"class="lihatDetail-pic">
                                    </div>
                                    <div class="col-md-6 product_content">
                                        <h4><?php echo $row1['productname']?></h4>
                                        <span class="nominal">
                                            <h3>Rp<?php echo $row1['price']?></h3> 
                                        </span>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Informasi</h6>
                                                </div>
                                                <div class="col-sm-5">
                                                    Kondisi <br>
                                                    Terjual <br>
                                                    Dilihat <br>
                                                    Waktu Proses <br>
                                                    Diperbarui <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    : <b>BARU</b> <br>
                                                    : 0 <br>
                                                    : 0 <br>
                                                    : 3 hari kerja <br>
                                                    : 20 Mei 2020 <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Spesifikasi</h6>
                                                </div>
                                                <div class="col-sm-5">
                                                    Kategori <br>
                                                    Berat <br>
                                                    Merek <br>
                                                    Kapasitas Hardisk <br>
                                                    Kapasitas Memory <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    : Desktop <br>
                                                    : 14.0 kg <br>
                                                    : Rakitan <br>
                                                    : > 1TB <br>
                                                    : >= 8GB <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Detail</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    Intel Core i7-8700 3.2Ghz <br>
                                                    ASRock H310M-HDV <br>
                                                    Colorful GeForce GTX 1060 6GB DDR5 <br>
                                                    Team Elite Plus DDR4 16GB Dual Channel 2400Mhz <br>
                                                    Apacer SSD 240GB <br>
                                                    Seagate BarraCuda 1TB 7200 RPM <br>
                                                    HEXA 550Watt 80+ Bronze <br>
                                                    casing INFINITY URANOS FREE 2x fan <br>
                                                    LED 24INCH SAMSUNG CURVED <br>
                                                    Free Keyboard Mouse wireless + Headset <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Siap Game</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    GTA V <br>
                                                    Resident evil 7 <br>
                                                    Dota <br>
                                                    PES 2018 <br>
                                                    Wathdog2 <br>
                                                    PES 2017 <br>
                                                </div>
                                                <div class="col-sm-5">
                                                    Farcry Primal <br>
                                                    Farcry 4 <br>
                                                    NFS Rivals <br>
                                                    Battlefield 1 dan 3 <br>
                                                    Call Of duty Blackops <br>
                                                    Dan lain-lain. <br>
                                                </div>
                                            </div>
                                        </p>
                                        <!-- <p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="">16GB</option>
                                                        <option value="">32GB</option>
                                                        <option value="">64GB</option>
                                                        <option value="">128GB</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                    </select>
                                                </div>                                             
                                                <div class="space-ten"></div>
                                                <div class="btn-ground">
                                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span>Beli Sekarang!</button>
                                                </div>
                                            </div>
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="bd-example">
            <div class="row">
                <div class= "col-sm-6">
                    <?php
                    $sql2 = "SELECT * FROM product WHERE id = '10'";
                    $result2 = mysqli_query($connection,$sql2);
                    $row2 = $result2->fetch_assoc();
                    ?>
                    <div class="card" style="width: 18rem;">
                        <a href="productdetails.php?id=<?php echo $row2['id']?>"><img class="card-img-top" src="./img/product/<?php echo $row2['image']?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row2['productname']?></h5><br>
                            <h6>PC Siap Untuk Game:</h6>
                            <h6>GTA V</h6>
                            <h6>PES 2018</h6>
                            <h6>Farcry 3</h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gaming_view3">
                                <i class="fa fa-search"></i>
                                Overview
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade product_view" id="gaming_view3" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 product_img">
                                        <img src="./img/product/<?php echo $row2['image']?>"class="lihatDetail-pic">
                                    </div>
                                    <div class="col-md-6 product_content">
                                        <h4><?php echo $row2['productname']?></h4>
                                        <span class="nominal">
                                            <h3>Rp<?php echo $row2['price']?></h3> 
                                        </span>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Informasi</h6>
                                                </div>
                                                <div class="col-sm-5">
                                                    Kondisi <br>
                                                    Terjual <br>
                                                    Dilihat <br>
                                                    Waktu Proses <br>
                                                    Diperbarui <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    : <b>BARU</b> <br>
                                                    : 0 <br>
                                                    : 0 <br>
                                                    : 3 hari kerja <br>
                                                    : 20 Mei 2020 <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Spesifikasi</h6>
                                                </div>
                                                <div class="col-sm-5">
                                                    Kategori <br>
                                                    Berat <br>
                                                    Merek <br>
                                                    Kapasitas Hardisk <br>
                                                    Kapasitas Memory <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    : Desktop <br>
                                                    : 17.0 kg <br>
                                                    : Rakitan <br>
                                                    : > 1TB <br>
                                                    : >= 8GB <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Detail</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    Ryzen 5 2600X 3.6Ghz up to 4.2Ghz 6Core <br>
                                                    Mobo Asus A320M-K <br>
                                                    Ram Gskill 8GB DDR4 2400Mhz 2x4GB <br>
                                                    SSD Colorful 128GB SATA 3 6GB/s <br>
                                                    VGA Nvidia GeForce GTX1060 6GB DDR5 Dualfan <br>
                                                    HDD 1TB Seagate 7200Rpm <br>
                                                    PSU Cooler Master MWE 450WATT 80+ Bronze <br>
                                                    Case Gaming DA N9 <br>
                                                    Bonus Fan 3X Ring <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Siap Game</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    GTA V <br>
                                                    DOTA 2<br>
                                                    FIFA 2018 <br>
                                                    PES 2018 <br>
                                                    Wathdog2 <br>
                                                    PES 2017 <br>
                                                </div>
                                                <div class="col-sm-5">
                                                    ETS <br>
                                                    Farcry 3 <br>
                                                    ASASSIN <br>
                                                    Battlefield 1 dan 3 <br>
                                                    Call Of duty Blackops <br>
                                                    Dan lain-lain. <br>
                                                </div>
                                            </div>
                                        </p>
                                        <!-- <p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="">16GB</option>
                                                        <option value="">32GB</option>
                                                        <option value="">64GB</option>
                                                        <option value="">128GB</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                    </select>
                                                </div>                                             
                                                <div class="space-ten"></div>
                                                <div class="btn-ground">
                                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span>Beli Sekarang!</button>
                                                </div>
                                            </div>
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class= "col-sm-6">
                    <div class="card" style="width: 18rem;">
                    <?php
                    $sql3 = "SELECT * FROM product WHERE id = '11'";
                    $result3 = mysqli_query($connection,$sql3);
                    $row3 = $result3->fetch_assoc();
                    ?>
                    <a href="productdetails.php?id=<?php echo $row3['id']?>"><img class="card-img-top" src="./img/product/<?php echo $row3['image']?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row3['productname']?></h5><br>
                            <h6>PC Siap Untuk Game:</h6>
                            <h6>GTA V</h6>
                            <h6>Farcry 5</h6>
                            <h6>DragonBall Xenoverse</h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gaming_view4">
                                <i class="fa fa-search"></i>
                                Overview
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade product_view" id="gaming_view4" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 product_img">
                                        <img src="./img/product/<?php echo $row3['image']?>"class="lihatDetail-pic">
                                    </div>
                                    <div class="col-md-6 product_content">
                                        <h4><?php echo $row3['productname']?></h4>
                                        <span class="nominal">
                                            <h3>Rp<?php echo $row3['price']?></h3> 
                                        </span>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Informasi</h6>
                                                </div>
                                                <div class="col-sm-5">
                                                    Kondisi <br>
                                                    Terjual <br>
                                                    Dilihat <br>
                                                    Waktu Proses <br>
                                                    Diperbarui <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    : <b>BARU</b> <br>
                                                    : 0 <br>
                                                    : 0 <br>
                                                    : 3 hari kerja <br>
                                                    : 20 Mei 2020 <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Spesifikasi</h6>
                                                </div>
                                                <div class="col-sm-5">
                                                    Kategori <br>
                                                    Berat <br>
                                                    Merek <br>
                                                    Kapasitas Hardisk <br>
                                                    Kapasitas Memory <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    : Desktop <br>
                                                    : 14.0 kg <br>
                                                    : Rakitan <br>
                                                    : > 1TB <br>
                                                    : >= 8GB <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Detail</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    MB Gigabyte H61 <br>
                                                    Core i5 3470 Socket 1155 <br>
                                                    DDR3 16GB (2x8GB) Huyfury Heatsink <br>
                                                    SSD 120GB Sata 3 7200Rpm <br>
                                                    VGA Nvidia Geforce GTX1050Ti 4GB DDR5 <br>
                                                    Hardisk 1TB Sata Seagate <br>
                                                    DVD Room LG / SAMSUNG <br>
                                                    Casing Infinity Posedion <br>
                                                    PSU Enlight 400watt 80+ BRONZE <br>
                                                    Wifi USB <br>
                                                    Fan Case 3X <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Siap Game</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    GTA V <br>
                                                    One Piece <br>
                                                    Mortal Kombat X <br>
                                                    PES 2018 <br>
                                                    Wathdog2 <br>
                                                    PES 2019 <br>
                                                </div>
                                                <div class="col-sm-5">
                                                    DragonBall Xenoverse <br>
                                                    Farcry 5 <br>
                                                    Pirate Warriors 3 <br>
                                                    Battlefield 1 <br>
                                                    Call Of duty Blackops <br>
                                                    Dan lain-lain. <br>
                                                </div>
                                            </div>
                                        </p>
                                        <!-- <p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="">16GB</option>
                                                        <option value="">32GB</option>
                                                        <option value="">64GB</option>
                                                        <option value="">128GB</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                    </select>
                                                </div>                                             
                                                <div class="space-ten"></div>
                                                <div class="btn-ground">
                                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span>Beli Sekarang!</button>
                                                </div>
                                            </div>
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   </body>
</html>
