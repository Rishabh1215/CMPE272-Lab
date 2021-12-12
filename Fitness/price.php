<!DOCTYPE html>
<html lang="en">

<?php
require_once 'db.php';
$query1 = "SELECT * FROM product_Fitness";
$products = $mysqli->query($query1);

?>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Package</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>

<body onload="preparePage()">
    <!--header section start -->
    <!-- <div class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="./index.php"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-md-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="./index.php">HOME</a></li>
                            <li><a href="./about.php">ABOUT</a></li>
                            <li><a href="./price.php">SERVICES</a></li>
                            <li><a href="./gym.php">NEWS</a></li>
                            <li><a href="./contact.php">CONTACT</a></li>
                            <li><a href="./top.php">TOP VIEWED</a></li>
                            <!-- <li><a href="#"><img src="images/search-icon.png"></a></li> -->
    <!-- <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="overlay-content">
                                    <a href="./index.php">HOME</a>
                                    <a href="./about.php">ABOUT</a> -->
    <!-- <a href="price.html">PRICE</a>
                  <a href="gym.html">GYM</a>
                  <a href="class.html">CLASS</a> -->
    <!-- <a href="./contact.php">CONTACT</a> -->
    <!-- <a href="#">LOGIN</a>
                  <a href="#">REGISTER</a> -->
    <!-- </div>
                            </div>
                            <span style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle.png" class="toggle_menu"></span>
                    </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --> -->
    <!-- header section end -->
    <!-- our price section start -->
    <div class="our_price_section layout_padding about_main">
        <div class="container">
            <h1 class="our_price"><strong>OUR PRODUCTS</strong></h1>
            <p class="client_long_text">Whether you're just starting out―or starting again―this fast-track workout plan will help you drastically improve your physique and fitness levels.</p>
            <div class="price_section_2">
                <div class="row">
                    <?php while ($product = $products->fetch_row()) { ?>
                        <div class="col-sm-12 col-lg-4" style="margin-bottom: 3rem;">
                            <div class="beginner">
                                <h2 class="beginner_text"><?php echo $product[1] ?></h2>
                                <h1 class="plan_text"><?php echo '$' . $product[2] ?></h1>
                                <P class="access_text">Unlimited access to the gym</P>
                                <P class="access_text">3 classes per week</P>
                                <P class="access_text">One Year memberships</P>
                                <P class="access_text">FREE drinking package</P>
                                <P class="free_text">1 Free personal training</P>
                            </div>
                            <div class="select_boton">
                                <div class="select_bt" onclick="handleCardClick(<?php echo $product[0] ?>, '<?php echo $product[1] ?>', '<?php echo $product[4] ?>')">SELECT PLAN</a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- <div class="col-sm-12 col-lg-4">
                        <div class="beginner">
                            <h2 class="beginner_text">BEGINNER PLAN</h2>
                            <h1 class="plan_text">$40</h1>
                            <P class="access_text">Unlimited access to the gym</P>
                            <P class="access_text">3 classes per week</P>
                            <P class="access_text">One Year memberships</P>
                            <P class="access_text">FREE drinking package</P>
                            <P class="free_text">1 Free personal training</P>
                        </div>
                        <div class="select_boton">
                            <div class="select_bt"><a href="./singleProduct.php?name=Fitness&product=BEGINNER%20PLAN" onclick="dummy">SELECT PLAN</a></div>
                        </div> -->

                <!-- <div class="col-sm-12 col-lg-4">
                    <div class="premium">
                        <h2 class="beginner_text">PREMIUM PLAN</h2>
                        <h1 class="plan_text">$50</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">3 classes per week</P>
                        <P class="access_text">Four Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">3 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="premium_bt"><a href="./singleProduct.php?name=Fitness&product=PREMIUM%20PLAN">SELECT PLAN</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="beginner">
                        <h2 class="beginner_text">ULTIMATE PLAN</h2>
                        <h1 class="plan_text">$70</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">4 classes per week</P>
                        <P class="access_text">Three Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">8 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="select_bt"><a href="./singleProduct.php?name=Fitness&product=ULTIMATE%20PLAN">SELECT PLAN</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-4">
                    <div class="beginner">
                        <h2 class="beginner_text">BEGINNER PLAN (LEVEL 1)</h2>
                        <h1 class="plan_text">$45</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">3 classes per week</P>
                        <P class="access_text">One Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">1 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="select_bt"><a href="./singleProduct.php?name=Fitness&product=BEGINNER%20PLAN%20(LEVEL%201)">SELECT PLAN</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-4">
                    <div class="premium">
                        <h2 class="beginner_text">PREMIUM PLAN (LEVEL 1)</h2>
                        <h1 class="plan_text">$60</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">3 classes per week</P>
                        <P class="access_text">Four Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">3 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="premium_bt"><a href="./singleProduct.php?name=Fitness&product=PREMIUM%20PLAN%20(LEVEL%201)">SELECT PLAN</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-4">
                    <div class="beginner">
                        <h2 class="beginner_text">ULTIMATE PLAN (LEVEL 1)</h2>
                        <h1 class="plan_text">$75</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">3 classes per week</P>
                        <P class="access_text">Four Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">3 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="select_bt"><a href="./singleProduct.php?name=Fitness&product=ULTIMATE%20PLAN%20(LEVEL%201)">SELECT PLAN</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-4">
                    <div class="beginner">
                        <h2 class="beginner_text">BEGINNER PLAN (LEVEL 2)</h2>
                        <h1 class="plan_text">$49</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">3 classes per week</P>
                        <P class="access_text">Four Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">3 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="select_bt"><a href="./singleProduct.php?name=Fitness&product=BEGINNER%20PLAN%20(LEVEL%202)">SELECT PLAN</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-4">
                    <div class="premium">
                        <h2 class="beginner_text">PREMIUM PLAN (LEVEL 2)</h2>
                        <h1 class="plan_text">$59</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">3 classes per week</P>
                        <P class="access_text">Four Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">3 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="premium_bt"><a href="./singleProduct.php?name=Fitness&product=PREMIUM%20PLAN%20(LEVEL%202)">SELECT PLAN</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-4">
                    <div class="beginner">
                        <h2 class="beginner_text">ULTIMATE PLAN (LEVEL 2)</h2>
                        <h1 class="plan_text">$69</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">3 classes per week</P>
                        <P class="access_text">Four Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">3 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="select_bt"><a href="./singleProduct.php?name=Fitness&product=ULTIMATE%20PLAN%20(LEVEL%202)">SELECT PLAN</a></div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4 mt-4">
                    <div class="beginner">
                        <h2 class="beginner_text">PRO PLAN</h2>
                        <h1 class="plan_text">$150</h1>
                        <P class="access_text">Unlimited access to the gym</P>
                        <P class="access_text">3 classes per week</P>
                        <P class="access_text">Four Year memberships</P>
                        <P class="access_text">FREE drinking package</P>
                        <P class="free_text">3 Free personal training</P>
                    </div>
                    <div class="select_boton">
                        <div class="premium_bt"><a href="./singleProduct.php?name=Fitness&product=PRO%20PLAN">SELECT PLAN</a></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>
    <!-- our price section end -->


    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="footer_section_2">
            <div class="container">
                <div class="row map_addres">
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="images/map-icon.png"><span class="map_icon">No.123 Chalingt Gates, Supper market New York</span></div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="images/phone-icon.png"><span class="map_icon">
                                <!-- Exporting contacts from PHP File -->
                                <?php
                                $file = fopen("./txt/contacts.txt", "r");

                                while (!feof($file)) {
                                    $result = fgets($file);
                                    echo $result . '<br/>';
                                }

                                fclose($file);
                                ?>
                            </span></div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="images/email-icon.png"><span class="map_icon">demo@gmail.com</span></div>
                    </div>
                </div>
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/in-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                </div>
                <p class="copyright_text">Copyright 2021 All Right Reserved.</p>
            </div>
        </div>
    </div>
    <!-- footer section end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/common.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>


    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>




</body>

</html>