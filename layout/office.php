
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
    <?php include "./dbconfig/config.php";?>
   <div class="container" >
        <div class="btn-group btn-group-lg">
            <a href="./rec_office.php">
                <button type="button" class="btn btn-primary btn-lg">Office</button>
            </a>
            <a href="./rec_gaming.php">
                <button type="button" class="btn btn-primary btn-lg">Gaming</button>
            </a>
        </div>
        <div class="bd-example">
            <div class="row">
                <div class= "col-sm-6">
                    <div class="card" style="width: 18rem;">
                    <?php
                    $sql = "SELECT * FROM product WHERE id = '12'";
                    $result = mysqli_query($connection,$sql);
                    $row = $result->fetch_assoc();
                    ?>
                        <a href="productdetails.php?id=<?php echo $row['id']?>"><img class="card-img-top" src="./img/product/<?php echo $row['image']?>" alt="Card image cap" style="margin-top:22px;"></a>
                        <div class="card-body">
                            
                            <br><br>
                            <h5 class="card-title"><?php echo $row['productname']?></h5><br>
                            <h6>Booting Dan Loading Aplikasi Lebih Kencang</h6>
                            <h6>Kinerja Multitasking Lebih Responsif</h6>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#office_view">
                                <i class="fa fa-search"></i>
                                Overview
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade product_view" id="office_view" aria-hidden="true" style="display: none;">
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
                                                    Optiplex 7060MT Intel(R) Core(TM) i5-8500 <br>
                                                    Memory 8GB DDR4 <br>
                                                    Intel Q370 Chipset <br>
                                                    HDD 2TB 7200RPM SATA <br>
                                                    VGA AMD RX 550 4GB <br>
                                                    Dell Keyboard + Mouse <br>
                                                    16x Max DVD+/-RW Drive <br>
                                                    Ethernet LAN 10/100/1000 <br>
                                                    Windows(R)10 Profesional 64 Bit <br>
                                                    PCIe card with serial&parallel port <br>
                                                    Full Height <br>
                                                    Display DELL LCD 21.5" Widescreen LED <br>
                                                    Warranty 3Yr ProSupport: NBD Onsite Service <br>
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
                    $sql = "SELECT * FROM product WHERE id = '13'";
                    $result = mysqli_query($connection,$sql);
                    $row = $result->fetch_assoc();
                    ?>
                    <a href="productdetails.php?id=<?php echo $row['id']?>"><img class="card-img-top" src="./img/product/<?php echo $row['image']?>" alt="Card image cap"></a>
                        <div class="card-body">
                           
                            <h5 class="card-title"><?php echo $row['productname']?></h5><br>
                            <h6>Cocok Dipakai Untuk Browsing/Kantoran</h6>
                            <h6>Free Fan Case 12cm RGB/LED Hijau </h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#office_view2">
                                <i class="fa fa-search"></i>
                                Overview
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade product_view" id="office_view2" aria-hidden="true" style="display: none;">
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
                                                    : 10.0 kg <br>
                                                    : Rakitan <br>
                                                    : 500GB <br>
                                                    : 4GB <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Detail</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    MOTHERBOARD H55 /1156 <br>
                                                    PROCESOR CORE I5 650(3,2 GHZ) <br>
                                                    MEMORI 4 GB DDR 3 <br>
                                                    HARDISK 500 GB SATA SEAGATE <br>
                                                    VGA ONBOARD 1 GB HD GRAPHIK <br>
                                                    SOUNDCARD HD <br>
                                                    LANDACARD ETHERNET <br>
                                                    CASING SIMBADDA SIM V/ VARRO <br>
                                                    POWER SUPPLY SIM V <br>
                                                    FREE FAN CASE 12 CM RGB / LED HIJAU <br>
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
                    <div class="card" style="width: 18rem;">
                    <?php
                    $sql = "SELECT * FROM product WHERE id = '14'";
                    $result = mysqli_query($connection,$sql);
                    $row = $result->fetch_assoc();
                    ?>   
                        <a href="productdetails.php?id=<?php echo $row['id']?>"><img class="card-img-top" src="./img/product/<?php echo $row['image']?>" alt="Card image cap"></a>
                        <div class="card-body">
                            
                            
                            <h5 class="card-title"><?php echo $row['productname']?></h5><br>
                            <h6>Cocok untuk server/kebutuhan kerja</h6>
                            <h6>Bonus Fan LED 12cm</h6>
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#office_view3">
                                <i class="fa fa-search"></i>
                                Overview
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade product_view" id="office_view3" aria-hidden="true" style="display: none;">
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
                                                    : 11.0 kg <br>
                                                    : Rakitan <br>
                                                    : 500GB <br>
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
                                                    PROC INTEL CORE I7 860 (2.9 GHZ) <br>
                                                    FUN ID LED MERAH PROCESOR <br>
                                                    MEMORI 8 GB DDR 3 <br>
                                                    HDD 1 TERA SEAGATE BARACUDA <br>
                                                    VGA EKSTERNAL 1 GB GT 210 ( BONUS) <br>
                                                    SUB HDMI <br>
                                                    MOBO INTEL H 55 /1156 <br>
                                                    SOUND INTEGERATED <br>
                                                    LANDCARD INTEGERATED <br>
                                                    CASE SIMBADDA/ T1G <br>
                                                    PSU 470 watt armageddon <br>
                                                    BONUS FAN LED 12 CM <br>
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
                    $sql = "SELECT * FROM product WHERE id = '15'";
                    $result = mysqli_query($connection,$sql);
                    $row = $result->fetch_assoc();
                    ?>
                    <a href="productdetails.php?id=<?php echo $row['id']?>"><img class="card-img-top" src="./img/product/<?php echo $row['image']?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <br><br>
                            <h5 class="card-title"><?php echo $row['productname']?></h5><br>
                            <h6>Cocok Dipakai Di Kantor/Bisnis UKM Rumahan</h6>
                            <h6>Konektivitas Nirkabel WiFi Dan Bluetooth </h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#office_view4">
                                <i class="fa fa-search"></i>
                                Overview
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade product_view" id="office_view4" aria-hidden="true" style="display: none;">
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
                                                    : 15.0 kg <br>
                                                    : Rakitan <br>
                                                    : > 1TB <br>
                                                    : 4GB <br>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6>Detail</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                Core i5-8400 with Intel UHD Graphics 630 <br>
                                                Intel H370 <br>
                                                4GB DDR4 <br>
                                                1TB SATA 7200 RPM <br>
                                                Integrated: Intel UHD Graphics <br>
                                                Slim ODD <br>
                                                One 3.5"HDD <br>
                                                LAN Gigabit <br>
                                                WLAN 802.11ac +BT <br>
                                                HP USB wirekeyboard & mouse <br>
                                                Win 10 Pro 64-bit <br>
                                                1 PCIe x1; 1 PCIe x16 <br>
                                                180W, up to 90% efficient, activePFC <br>
                                                SD Card reader <br>
                                                TPM security chipset <br>
                                                19.5"inch V203p Bundle with HP 280 G3 (PN:T3U90AA) <br>
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
