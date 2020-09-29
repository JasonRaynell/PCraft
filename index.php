<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PCraft | Homepage </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/readmore.css" type="text/css">

    
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/Logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="forum.php">Forum</a></li>
                                <li><a href="custom.php">Custom PC</a></li>
                                <li><a href="#">Recommendation</a>
                                    <ul class="dropdown">
                                        <li><a href="./rec_gaming.php">Game</a></li>
                                        <li><a href="./rec_office.php">Office</a></li>
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
                            </ul>
                        </nav>
                        <div class="header__menu__right">
                            <?php 
                            if(isset($_SESSION['username'])){
                                ?>
                            <a href="controller/logoutcontroller.php">Logout</a>
                            <?php } ?>
                            <a href="login.php" class="login-btn"><i class="fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

 
    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="img/hero/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="section-title">
                            <h2>We Provide The Best Services for PCrafting</h2>
                        </div>
                        <div class="hero__search__form">
                            <form action="search.php" method ="POST">
                                <input type="text" placeholder="What do you want to find?..." name="searching" data-live-search="true">
                                <div class="select__option"> 
                                    <select name="category">
                                        <option value="">Categories</option>
                                        <option value="pc">PC</option>
                                        <option value="cpu">CPU</option>
                                        <option value="motherboard">Motherboard</option>
                                        <option value="vga">VGA</option>
                                        <option value="ram">RAM</option>
                                        <option value="harddrive">Harddrive</option>
                                        <option value="psu">PSU</option>
                                        <option value="gpu">GPU</option>
                                        <option value="case">Case</option>
                                        <option value="ssd">SSD</option>
                                        <option value="hdd">HDD</option>
                                    </select>
                                </div>
                                <div class="select__option">
                                    <select name="brand">
                                        <option value="">Brand</option>
                                        <option value="wdc">Wdc</option>
                                        <option value="asus">Asus</option>
                                        <option value="galax">Galax</option>
                                        <option value="gigabyte">Gigabyte</option>
                                        <option value="dell">Dell</option>
                                        <option value="msi">Msi</option>
                                        <option value="corsair">Corsair</option>
                                        <option value="gskill">Gskill</option>
                                    </select>
                                </div>
                                <button type="submit" name="search">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                        <?php
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                        ?>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>BEST SELLER</h2>
                        <p>Things you wanna look see before you buy something</p>
                    </div>
                    <div class="categories__item__list">
                        <div class="categories__item">
                            <img src="img/categories/cat-1.png" alt="">
                            <h5>Gigabyte Z390 Aorus Ultra</h5>
                            <p>The Z390 AORUS ULTRA uses a high performance thermal design
                                <span class="more">by combining its multi-cut heatsink with a Direct Touch Heatpipe and thick thermal pads to provide ultimate MOSFET cooling performance for enthusiasts, overclockers and gamers.</span>
                                <button class="read">read less</button>
                            </p>
                        </div>
                        <div class="categories__item">
                            <img src="img/categories/cat-2.png" alt="">
                            <h5>Asus ROG Maximus XI Hero Wi-Fi</h5>
                            <p>The Z390 AORUS ULTRA uses a high performance thermal design
                                <span class="more">by combining its multi-cut heatsink with a Direct Touch Heatpipe and thick thermal pads to provide ultimate MOSFET cooling performance for enthusiasts, overclockers and gamers</span>
                                <button class="read">read less</button>
                            </p>
                        </div>
                        <div class="categories__item">
                            <img src="img/categories/cat-3.png" alt="">
                            <h5>MSI MPG X570 Gaming Pro Carbon WiFi</h5>
                            <p>MPG X570 GAMING PRO CARBON WIFI is built for gamers
                                <span class="more">looking for a high-performance AM4 motherboard with an intense high-speed look. Tune advanced gaming system configurations with Core Boost, DDR4 Boost, Twin Lightning M.2 with M.2 Shield Frozr, and WIFI 6 and dazzle onlookers with a slick carbon finish and Mystic Light RGB.</span>
                                <button class="read">read less</button>
                            </p>
                        </div>
                        <div class="categories__item">
                            <img src="img/categories/cat-4.png" alt="">
                            <h5>Galax RTX 2080 Ti</h5>
                            <p>the GeForce RTX™ 2080 Ti, is a revolution
                                <span class="more">in gaming realism and performance. Its powerful NVIDIA Turing™ GPU architecture, breakthrough technologies, and 11 GB of next-gen, ultra-fast GDDR6 memory make it the world's ultimate gaming GPU.</span>
                                <button class="read">read less</button>
                            </p>
                        </div>
                        <div class="categories__item">
                            <img src="img/categories/cat-5.png" alt="">
                            <h5>Intel-5 9th Generation</h5>
                            <p>Intel Corporation Core i5 9400F 9th Generation
                                <span class="more">Desktop Processor 6 Cores up to 4.1 GHz Turbo Without Graphics LGA1151 300 Series 65W (Discrete Graphic Card Needed for Display) by Intel.</span>
                                <button class="read">read less</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->


    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Sometimes the best pc is the one you made by yourself.</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <span>Call Us:</span>
                                <p>(+62345678910)</p>
                            </li>
                            <li>
                                <span>Email:</span>
                                <p>PCRAFT@gmail.com</p>
                            </li>
                            <li>
                                <span>Fax:</span>
                                <p>(+622134124123)</p>
                            </li>
                            <li>
                                <span>Connect Us:</span>
                                <div class="footer__social">
                                    <a href="https://www.facebook.com/pcraft.pc.5"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/pcraft19/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/PCraft19"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__widget">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">How it work</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">How it Work</a></li>
                            <li><a href="#">Advantages</a></li>
                            <li><a href="#">Direo App</a></li>
                            <li><a href="#">Packages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                        </div>
                        <div class="footer__copyright__links">
                            <a href="#">Terms</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/readmore.js"></script>
</body>

</html>