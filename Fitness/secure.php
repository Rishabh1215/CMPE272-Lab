<?php session_start();
ob_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

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

<body>
    <!--header section start -->
    <div class="header_section">
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
                            <li><a href="./logout.php">Logout</a></li>
                            <!-- <li><a href="#"><img src="images/search-icon.png"></a></li> -->
                            <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="overlay-content">
                                    <a href="./index.php">HOME</a>
                                    <a href="./about.php">ABOUT</a>
                                    <!-- <a href="price.html">PRICE</a>
                  <a href="gym.html">GYM</a>
                  <a href="class.html">CLASS</a> -->
                                    <a href="./contact.php">CONTACT</a>
                                    <!-- <a href="#">LOGIN</a>
                  <a href="#">REGISTER</a> -->
                                </div>
                            </div>
                            <span style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle.png" class="toggle_menu"></span>
                    </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- our price section start -->
    <div class="container">
        <div class="row">
            <div class="col" style="display: flex;align-items: center;justify-content: center;margin-top: 10rem;margin-bottom: 10rem;font-size:1.5rem;">
                Hello, <?php echo $_SESSION["user"] ?>
                <br />
                Current website Users are:
                <br />
                <?php
                $userfile = fopen("txt/users.txt", "r");
                while (($line = fgets($userfile)) !== false) {
                    $user = explode(",", $line);
                    echo $user[0];
                    echo "<br/>";
                }
                fclose($userfile);
                ?>
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