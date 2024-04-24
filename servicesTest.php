<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>Poultry Field - Agriculture & Farming Category Bootstrap Responsive Template | Services :: W3layouts </title>
    <!--/google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!--//Template-CSS -->
    <style type="text/css">
        #close{
            position: absolute;
            margin: -100px 0px 0px 0px;
        }
        #popup{
/*            border: solid;*/
        }
        #cart-item{
            border: solid;
            padding: 10px;
            margin-bottom: 10px;
/*            display: inline-block;*/
        }
        #cart-item-image{
            display: inline-block;
        }
        #cart-item-image img{
            width: 70px;
        }
        #cart-item-name{
            position: absolute;
            display: inline-block;
/*            border: solid;*/
            padding: 0px 0px 0px 20px;
            margin: -5px 0px 0px 30px;
        }
        #cart-item-name p{
            color: white;
            font-size: 14px;
            font-weight: bold;
        }
        #Item-price{
            position: absolute;
            display: inline-block;
            margin: 45px 0px 0px 50px;
        }
        #Item-price p{
            color: white;
            font-size: 12px;
        }
        #cart-item-number table{
            border-collapse: collapse;
            margin: 5px 0px 0px 0px;
        }
        #cart-item-number td{
            border: solid 1px;
            color: white;
            text-align: center;
        }
        .subtract, .addition{
            font-size: 20px;
            padding: 0px 10px 0px 10px;
            color: grey;
        }
        .counter{
            padding: 0px 15px 0px 15px;
        }
        #cart-item-removal{
            color: white;
            position: absolute;
            display: inline-block;
            border: solid 1px;
            padding: 3px;
            margin: -31px 0px 0px 370px;
        }
        #cart-item-removal p{
            font-size: 12px;
            color: white;
        }
        .product-container{
            width: 193px;
            display: inline-block;
            border: solid 1px;
            padding: 5px;
            margin-bottom: 10px;
        }
        #product-image{
            width: 180px;
            height: 180px;
        }
        .product-name{
            font-size: 15px;
            color: black;
        }
        .product-price{
            color: black;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .add-to-cart{
            border: solid;
            text-align: center;
            color: #fd7e14;
        }
        .add-to-cart p{
            color: #fd7e14;
            font-size: 14px;
        }
        .all-product-container{
            padding-left: 40px;
            padding-right: 40px;
        }
        #category{
/*            border: solid;*/
            height: 50px;
            text-align: center;
            margin-bottom: 20px;
            background-color: #fd7e14;
        }
        #categoryList{
/*            border: solid 1px black;*/
            display: inline-block;
            color: white;
            padding: 15px 60px 10px 60px;
        }
        #categoryList:hover{
            background-color: white;
            color: green;
        }
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        .dropdown a, .dropbtn {
          display: inline-block;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        .dropdown {
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
          display: block;
        }
    </style>
</head>

<body onload="myStorage()">
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <span class="w3yellow">Poultry</span> Field
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0)" class="dropbtn nav-link">Logout</a>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </li>
                    </ul>
                    <!--/search-right-->
                    <ul class="header-search me-lg-4">
                        <li class="nav-item search-right">
                            <a href="#search" class="btn search-btn btn-primary" title="search">My Cart</a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup" id="popup">
                                    <!-- <div class="popup-header">
                                        <h3>Cart Overview</h3>
                                        <a class="close" href="#close" id="close">×</a>
                                    </div> -->
                                    <h3 class="title-w3l two mb-4 text-left">Cart Overview</h3>
                                        <a class="close" href="#close" id="close">×</a>
                                    <form action="#" method="GET" class="search-box d-flex position-relative">
                                        <!-- <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus=""> -->
                                        <!-- <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button> -->
                                    </form>
                                <div id="cart-item">
                                    <div id="cart-item-image">
                                        <img src="assets/images/ab2.jpg">
                                    </div>
                                    <div id="cart-item-name">
                                        <p>Brown Chicken yrnnkms kkl nkdkkddddds dddddddd ddddddddd</p>
                                    </div>
                                    <div id="Item-price">
                                        <p>₦50,000</p>
                                    </div>
                                    <div id="cart-item-number">
                                        <table>
                                             <tr>
                                                <td class="subtract" id="subtract" onclick="subtraction()">-</td>
                                                <td class="counter" id="counter">1</td>
                                                <td class="addition" id="counter" onclick="addition()">+</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="cart-item-removal">
                                        <p>Remove Item</p>
                                    </div>
                                </div>
                                <div id="cart-item">
                                    <div id="cart-item-image">
                                        <img src="assets/images/ab2.jpg">
                                    </div>
                                    <div id="cart-item-name">
                                        <p>Brown Chicken yrnnkms kkl nkdkkddddds dddddddd ddddddddd</p>
                                    </div>
                                    <div id="Item-price">
                                        <p>₦50,000</p>
                                    </div>
                                    <div id="cart-item-number">
                                        <table>
                                             <tr>
                                                <td class="subtract" id="subtract" onclick="subtraction()">-</td>
                                                <td class="counter" id="counter">1</td>
                                                <td class="addition" id="counter" onclick="addition()">+</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="cart-item-removal">
                                        <p>Remove Item</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- /search popup -->
                        </li>
                    </ul>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->

            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            Services </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-arrow-right mx-2"></span> Services </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-index3-->
    <section class="w3l-index-about py-5" id="about2">
        <div id="category">

        </div>
        <div class="all-product-container" id="allProduct">
            <!-- <div class="product-container">
                <img src="assets/images/ab2.jpg" id="product-image">
                <p class="product-name">Brown Chicken yrnnkms kkl nkdkkddddds dddddddd ddddddddd</p>
                <p class="product-price">₦50,000</p>
                <div class="add-to-cart">
                    <p>Add To Cart</p>
                </div>
            </div> -->
        </div>
    </section>
    <!--//w3l-index3-->
    <!--/features-section-->
    <section class="w3l-features w3l-services-page py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">Our Services</h6>
                <h3 class="title-w3l">What We Offer</h3>
            </div>
            <div class="main-cont-wthree-2">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-egg"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">Alternative egg</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">
                                        Poultry Cages</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-kiwi-bird"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">Breeder Management</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-feather"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">Poultry Climate</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-sign-language"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">
                                        Residue Teatment</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-fan"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">
                                        Exhaust air Treatment</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features-section -->

    <!--/w3l-grids-->
    <section class="w3l-witemshny-main py-5">
        <div class="container py-md-4">
            <!--/row-1-->
            <div class="witemshny-grids row">
                <div class="col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="assets/images/g1.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">We are one of leading company</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="assets/images/g6.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img"> The primary goal of all business</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="assets/images/g2.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img"> Learn how to grow Business</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
            </div>
            <!--//row-1-->

        </div>
    </section>
    <!--//w3l-grids-->
    <!--/footer-->
    <footer class="w3l-footer">
        <div class="w3l-footer-16 py-5">
            <div class="container py-md-5 py-3 pb-0">
                <div class="row footer-p">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <h2 class="footerw3l-logo"><a class="navbar-brand" href="index.html">
                                <span class="w3yellow">Poultry</span> Field
                            </a></h2>
                        <p class="mt-3">Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia ipsam autem ipsam.dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-6 column">
                                <h3>Links</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>

                                    <li><a href="about.html">Team</a></li>
                                    <li><a href="#blog">Blog Posts</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-6 column">
                                <h3>Services</h3>
                                <ul class="footer-gd-16">

                                    <li><a href="#care">
                                            Brown Eggs</a></li>
                                    <li><a href="#meal">Chicken Broiler</a></li>
                                    <li><a href="#clean">
                                            Free Shipping</a></li>
                                    <li><a href="#medicine">
                                            Quality Matters</a></li>
                                    <li><a href="#setting">
                                            Poultry Cages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 column mt-lg-0 mt-4 pl-xl-0">
                        <h3>Instagram Feed</h3>
                        <div class="end-column row">
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g1.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g2.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g3.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g4.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g5.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g6.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="below-section text-center pt-lg-4 mt-5">
                    <p class="copy-text">&copy; 2022 Poultry Field. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
                    <ul class="footer-gd-16 d-flex justify-content-center">
                        <li><a href="#terms">Terms
                            </a></li>
                        <li class="mx-2">/
                        </li>
                        <li><a href="#policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
        const addition = () =>{
            document.getElementById("counter").innerHTML++;
        };
        const subtraction = () =>{
            if (document.getElementById("counter").innerHTML === "1") {
                document.getElementById("cart-item").display = none;
                alert("jsjsj");
            }
            document.getElementById("counter").innerHTML--;
        };
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

        $(window).on("load" ,function(){
            $.get("categoryImport.php", function(response){
                    // alert(response);
                    var response = JSON.parse(response);
                    for(i in response){
                        document.getElementById('category').innerHTML +=
                        '<div id="categoryList">'+
                            '<a>'+response[i].category_name+'</a>'+
                        '</div>';
                    }
            });
        });

        $(window).on("load" ,function(){
            $.get("productImport.php", function(response){
                    // alert(response);
                    var response = JSON.parse(response);
                    for(i in response){
                        document.getElementById('allProduct').innerHTML +=
                            '<div class="product-container">'+
                                '<img src='+response[i].product_image+' id="product-image">'+
                                '<p class="product-name">'+response[i].product_name+'</p>'+
                                '<p class="product-price">'+response[i].product_price+'</p>'+
                                '<div class="add-to-cart">'+
                                    '<p>Add To Cart</p>'+
                                '</div>'+
                            '</div>';
                    }
            });
        });
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move top -->
    <!--//footer-9 -->
    <!-- Template JavaScript -->

    <!-- MENU-JS -->
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->

</body>

</html>
