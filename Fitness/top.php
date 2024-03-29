<!DOCTYPE html>
<html lang="en">
<?php
// $con = mysqli_connect('localhost', 'root', '');
$servername = "database-1.caorc3vfgkkg.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "Password123";
$dbname = "shopping_marketplace";
$con = new mysqli($servername, $username, $password, $dbname);
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
    <div class="our_price_section layout_padding about_main">
        <div class="container">
            <h1 class="our_price"><strong>OUR PRICE</strong></h1>
            <p class="client_long_text">Whether you're just starting out―or starting again―this fast-track workout plan will help you drastically improve your physique and fitness levels.</p>

            <div class="price_section_2">
                <h2 style="display: flex; justify-content:center; align-items:center;"><b>Global Top Viewed Products</b></h2>
                <div class="row" style="display: flex; justify-content:center; align-items:center;">
                    <table>
                        <tr>
                            <th>Name</th>
                            <th style="margin-left: 1rem;">Viewed</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM Products ORDER BY hits DESC";
                        $results = $con->query($sql);
                        for ($i = 0; $i < 5; $i++) {
                            $row = $results->fetch_assoc();
                            echo "<tr>";
                            echo "<td><a href='./singleProduct.php?name=" . $row["company_name"] . "&product=" . $row["product_name"] . "'>" . $row["product_name"] . "</a></td>";
                            echo "<td>" . $row["hits"] . "</td>";
                            echo "</tr>";
                        }

                        ?>
                    </table>
                </div>

                <h2 style="display: flex; justify-content:center; align-items:center;margin-top:1rem;">
                    <b>Your 5 Most Visited Products</b>
                </h2>
                <div class="row" style="display: flex; justify-content:center; align-items:center;">
                    <?php
                    if (isset($_COOKIE["lastids"])) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Name</th>";
                        echo "<th>Viewed</th>";
                        echo "</tr>";
                        $heatmap = array();
                        foreach (explode(",", $_COOKIE["lastids"]) as $id) {
                            if (isset($heatmap[$id])) {
                                $heatmap[$id] = $heatmap[$id] + 1;
                            } else {
                                $heatmap[$id] = 1;
                            }
                        }
                        for ($i = 0; $i < 5; $i++) {
                            $max = 0;
                            $maxid = 0;
                            foreach ($heatmap as $key => $value) {
                                // echo "key, value";
                                // echo $key;
                                if ($value > $max) {
                                    $max = $value;
                                    $maxid = $key;
                                }
                            }
                            $result = $con->query("SELECT * FROM Products where product_name ='{$maxid}'");
                            $row = $result->fetch_assoc();
                            echo "<tr>";
                            echo "<td><a href='./singleProduct.php?name=" . $row["company_name"] . "&product=" . $row["product_name"] . "'>" . $row["product_name"] . "</a></td>";

                            // echo "<td><a href='./singleProduct.php?id=" . $row["id"] . "'>" . $row["title"] . "</a></td>";
                            echo "<td>" . $max . "</td>";
                            echo "</tr>";
                            unset($heatmap[$maxid]);
                        }
                    } else {
                        echo "You have not viewed any products";
                    }
                    echo "</table>";
                    ?>
                </div>


                <h2 style="display: flex; justify-content:center; align-items:center; margin-top:1rem;"><b>Your 5 Last Viewed Products</b></h2>
                <div class="row" style="display: flex; justify-content:center; align-items:center;">
                    <?php
                    if (isset($_COOKIE["lastids"])) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Name</th>";
                        echo "</tr>";
                        $hits = explode(",", $_COOKIE["lastids"]);
                        $viewed = array();

                        for ($i = 0; $i < 5 and $i < sizeof($hits); $i++) {
                            $result = $con->query("SELECT * FROM Products where product_name = '{$hits[$i]}'");
                            $row = $result->fetch_assoc();
                            echo "<tr>";
                            echo "<td><a href='./singleProduct.php?name=" . $row["company_name"] . "&product=" . $row["product_name"] . "'>" . $row["product_name"] . "</a></td>";
                            echo "</tr>";
                            array_push($viewed, $hits[$i]);
                        }
                        echo "</table>";
                    } else {
                        echo "You have not viewed any products";
                    }
                    ?>
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