<!DOCTYPE html>
<html lang="en">

<head>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
require_once 'db.php';
$Q = explode("/", $_SERVER["QUERY_STRING"]);
$query1 = "SELECT * FROM product_Fitness where $Q[0]";
$products = $mysqli->query($query1);
$product = $products->fetch_row();
// while ($row = $products->fetch_assoc()) {
//     echo $row['id'];
// }
?>

<?php
// $servername = "database-1.caorc3vfgkkg.us-east-2.rds.amazonaws.com";
// $username = "admin";
// $password = "Password123";
// $dbname = "shopping_marketplace";
// $con = new mysqli($servername, $username, $password, $dbname);
// $company = $_GET['name'];
// $product_name = $_GET['product'];
// echo $product_name;
// $query = 'select * from Products where company_name="' . $_GET['name'] . '" AND product_name= "' . $_GET['product'] . '"';
// $result = mysqli_query($con, $query);
// $prod = $result->fetch_assoc();
// $hits = $prod["hits"] + 1;
// $sql = "UPDATE Products SET hits = {$hits} where product_name = '{$product_name}' AND company_name = '{$company}'";
// $con->query($sql);
// $con->close();
?>

<?php
// if (isset($_COOKIE["lastids"])) {
//     if (explode(",", $_COOKIE["lastids"])[0] != $prod["product_name"]) {
//         setcookie("lastids", $prod["product_name"] . "," . $_COOKIE["lastids"], time() + (86400 * 30));
//     }
// } else {
//     setcookie("lastids", $prod["product_name"], time() + (86400 * 30));
// }
?>

<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $rating = $_POST['rating'];
//     $review = $_POST['reviewMessage'];
//     // echo $rating;
//     // echo $review;
//     $ratingQuery = "select * from Rating where product_name = '{$product_name}' and company_name= '{$company}'";
//     $reviewQuery = "select * from Review where product_name = '{$product_name}' and company_name= '{$company}'";
//     $ratingResult = mysqli_query($con, $ratingQuery);
//     $reviewResult = mysqli_query($con, $reviewQuery);
//     if ($ratingResult->num_rows > 0) {
//         while ($row = $ratingResult->fetch_assoc()) {
//             echo $row['rating_id'];
//             // $rate = $row['rating'];
//             $sql1 = "UPDATE Rating SET rating = {$rating} where product_name = '{$product_name}' AND company_name = '{$company}'";
//             $con->query($sql1);
//         }
//     }
//     if ($reviewResult->num_rows > 0) {
//         while ($row = $reviewResult->fetch_assoc()) {
//             echo $row['review_id'];
//             // $rate = $row['rating'];
//             $sql1 = "UPDATE Review SET review = '{$review}' where product_name = '{$product_name}' AND company_name = '{$company}'";
//             $con->query($sql1);
//         }
//     }
// }
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
            <h1 class="our_price"><strong>OUR PRODUCT</strong></h1>
            <p class="client_long_text">Whether you're just starting out―or starting again―this fast-track workout plan will help you drastically improve your physique and fitness levels.</p>
            <div class="price_section_2">
                <div class="row" style="display: flex; justify-content:center; align-items:center;">
                    <div class="col-sm-12 col-lg-4">
                        <div class="beginner">
                            <h2 class="beginner_text"><?php echo $product[1] ?></h2>
                            <h1 class="plan_text">$<?php echo $product[2] ?></h1>
                            <P class="access_text">Unlimited access to the gym</P>
                            <P class="access_text">3 classes per week</P>
                            <P class="access_text">One Year memberships</P>
                            <P class="access_text">FREE drinking package</P>
                            <P class="free_text">1 Free personal training</P>
                        </div>
                    </div>
                </div>
                <div class="star_icon">
                    <img src="images/star.png" style="max-width: 26%;
                    margin-left: 35%;
                    " />
                </div>
            </div>
        </div>
    </div>
    <!-- our price section end -->


    <div class="review">
        Please tell us about your experience about the Product.
    </div>
    <!-- <form method="post" action="./singleProduct.php?name=Fitness&product=BEGINNER%20PLAN"> -->
    <!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
    <div class="container1">
        <div class="feedback">
            <div class="rating" id="selectRating">
                <input type="radio" name="rating" id="rating-5" value="5">
                <label for="rating-5"></label>
                <input type="radio" name="rating" id="rating-4" value="4">
                <label for="rating-4"></label>
                <input type="radio" name="rating" id="rating-3" value="3">
                <label for="rating-3"></label>
                <input type="radio" name="rating" id="rating-2" value="2">
                <label for="rating-2"></label>
                <input type="radio" name="rating" id="rating-1" value="1">
                <label for="rating-1"></label>
                <div class="emoji-wrapper">
                    <div class="emoji">
                        <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                            <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534" />
                            <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff" />
                            <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347" />
                            <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63" />
                            <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff" />
                            <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347" />
                            <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63" />
                            <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347" />
                        </svg>
                        <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                            <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347" />
                            <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534" />
                            <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff" />
                            <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347" />
                            <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff" />
                            <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534" />
                            <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff" />
                            <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347" />
                            <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff" />
                        </svg>
                        <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                            <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347" />
                            <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff" />
                            <circle cx="340" cy="260.4" r="36.2" fill="#3e4347" />
                            <g fill="#fff">
                                <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10" />
                                <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z" />
                            </g>
                            <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347" />
                            <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff" />
                        </svg>
                        <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                            <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347" />
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                            <g fill="#fff">
                                <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z" />
                                <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81" />
                            </g>
                            <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
                            <g fill="#fff">
                                <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1" />
                                <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81" />
                            </g>
                            <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
                            <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff" />
                        </svg>
                        <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                            <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
                            <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f" />
                            <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
                            <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
                            <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f" />
                            <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
                            <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347" />
                            <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b" />
                        </svg>
                        <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <g fill="#ffd93b">
                                <circle cx="256" cy="256" r="256" />
                                <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z" />
                            </g>
                            <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4" />
                            <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea" />
                            <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88" />
                            <g fill="#38c0dc">
                                <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z" />
                            </g>
                            <g fill="#d23f77">
                                <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z" />
                            </g>
                            <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347" />
                            <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b" />
                            <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="review">
        <textarea id='providedReview' name="reviewMessage" rows="6" cols="56">
            At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
            </textarea>
    </div>
    <div class="review">
        <button class="btn btn-success" onclick="handleReview('<?php echo $product[1] ?>', '<?php echo $product[4] ?>')">Submit</button>
    </div>
    <!-- </form> -->

    <div class="review" id="success-added" style="display:none">
        <div class="alert alert-success" role="alert">
            Review has been added sucessfully.
        </div>
    </div>

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
    <script src="js/common.js"></script>
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