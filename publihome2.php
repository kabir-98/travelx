<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="publichome.css">
    <title>Public Home</title>
</head>
<body >

<!-- Content Area Start-->
    <!-- Header or Banner Area Start-->
     <div class="hg">
            <div class="banner-content">
                <h1>Travel X</h1>
                <p>The one stop service for travelling</p>
            </div>
        </div>
    <section class="header-area">
        <div class="menu-container">
            <nav class="navbar">
                
                <div class="navbar-menulist" id="navbarMenuList">
                    <ul class="navbar-list">
                        <li class="nav-item">
                            <a class="nav-link hover-ani" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-ani" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-ani" href="#">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-ani" href="http://localhost:8080/travelx/aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-ani" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item btn-align">
                            <a class="nav-link btn-custom" href="http://localhost:8080/travelx/registration.php">Sign up</a>
                        </li>
                        <li class="nav-item btn-align">
                            <a class="nav-link btn-custom" href="http://localhost:8080/travelx/login.php">Sign in</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
       
    </section>
    <!-- Header or Banner Area End-->

   

    <!-- PHP CODE FOR GETTINGS PACKAGE DATA -->
    <!-- Packages Section Start-->
    <section class="packages">
        <div class="packages-mainArea">
            <div class="package-header-info">
                <div class="package-heading heading-text">
                    <h1 class="h1-bottom-border">Our Packages</h1>
                    <span></span>
                    <p>Select Your Suitable Package From Bellow</p>
                </div>
                
            </div>
        </div>
        
            <?php
                $packageData = fopen("packages.txt", "r") or die("Unable to open file!");
                $i = 1;
                $colName = 'margin-up'; 
                while(!feof($packageData)) {
                    $package = fgets($packageData);
                    $package = explode('|', $package);
                    $title = $package[0];
                    $date = $package[1];
                    $stay = $package[2];
                    $fac = explode(',', $package[3]);
            ?>
                <div class="package-boxArea">
                    <?php
                        $colCount = 1;
                        for($colCount=1; $colCount <=2; $colCount++){
                    ?>  
                        <div class="package-width <?php echo $colName?>">
                            <div class="package-info">
                                <img src="<?php echo "assets/images/pack-".$i.".jpg"?>" class="img-fluid w-75" alt="<?php echo "image not Foundd pack-".$i.".jpg"?>">
                                <h4><?php echo $title?></h4>
                                <p>Available From : <?php echo $date?></p>
                                <p>Minimum Stay : <?php echo $stay?></p>
                                <div class="facility_row">
                                    <p>Facilities :</p>
                                    <ul class="facilities-list">
                                    <?php foreach($fac as $value){ ?>
                                        <li><p><?= $value; ?></p></li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                            $no_of_lines = count(file('packages.txt')); 
                            if($no_of_lines == $i){
                                break;
                            }
                            else{
                                $i++;
                            }
                        }
                    ?>
                </div>
            <?php
                    if($no_of_lines == $i){
                        break;
                    }
                }
                fclose($packageData);
            ?>
            <div class="load-btn-area">
                <a href="assets/layouts/packages.php" class="btn btn-custom btn-view">View More</a>
            </div>
        
    </section>
    <!-- Packages Section End-->

    <!-- BOOK ROOMS SECTION -->
    <section class="book-rooms" id="bookrooms">

    </section>
    <!-- Book Rooms Section END -->

    <!-- CONTACT US -->
    <section class="contact-us-map" id="">
        
    <!-- End -->

    <!-- FOOTER MENU SECTION -->
    <section class="footer-menu" id="footermenu">
        <div class="menu-area">
            <div class="fmenu-items">
                <h4><img src="assets/images/logo.png" alt=""></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At laborum ipsam maxime officiis unde commodi recusandae magni sit explicabo corporis. Omnis facilis enim veritatis iusto aliquid voluptate deserunt placeat voluptas!</p>
            </div>
            <div class="fmenu-items">
                <h4>Usefull Links</h4>
                <ul>
                    <li><a href="#packages">Our Packages</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="fmenu-items">
                <h4>Contact</h4>
                <ul>
                    <li><a href="#map">Location</a></li>
                    <li><a href="#services">About Us</a></li>
                </ul>
            </div>
        </div>
    </section>

</body>
</html>