
<?php

session_start();
if(!isset($_SESSION['name'])){
    header('location:index.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


    <!-- style -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>




    <div class="top ">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <div class="topc ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
    <div class="top-head pt-1 border">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 text-right">
                    <ul class="list-inline ">
                        <a href="#">
                            <li class="list-inline-item"><small><i class="fa fa-mobile fa-2x"></i> Download Mobile App</small></li>
                        </a>
                        <a href="#">
                            <li class="list-inline-item"><small> Check On Road Price</small></li>
                        </a>
                        <a href="#">
                            <li class="list-inline-item"><small> Feedback</small></li>
                        </a>
                        <a href="#">
                            <li class="list-inline-item"><small> Ask a Question</small></li>
                        </a>
                        <a href="logout.php">
                            <li class="list-inline-item"><small><i class="fa fa-user"></i><?php echo " "."Log out";  ?></small></li>
                        </a>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm  bg-light border ">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="http://velikorodnov.com/html/autotrader/images/logo.png" alt="Logo" style="width:120px;">
            </a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            New
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Find New Cars</a>
                            <a class="dropdown-item" href="#">Latest Cars</a>
                            <a class="dropdown-item" href="#">Popular Cars</a>
                            <a class="dropdown-item" href="#">Upcoming Cars</a>
                            <a class="dropdown-item" href="#">Offers & Discounts</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Used
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Find Used Cars</a>
                            <a class="dropdown-item" href="#">Find by Brand</a>
                            <a class="dropdown-item" href="#">Find by Location</a>
                            <a class="dropdown-item" href="#">Upcoming Cars</a>
                            <a class="dropdown-item" href="#">Offers & Discounts</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Compare</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            News & Reviews
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Car News</a>
                            <a class="dropdown-item" href="#">Car Reviews</a>
                            <a class="dropdown-item" href="#">Car Videos</a>
                            <a class="dropdown-item" href="#">Write Review</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            More
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Car Loan</a>
                            <a class="dropdown-item" href="#">EMI Calculator</a>
                            <a class="dropdown-item" href="#">Car Insurance</a>
                            <a class="dropdown-item" href="#">Ask Question</a>
                        </div>
                    </li>

                    <form class="form-inline" action="#">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search Cars">
                        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="banner slider">
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.cardekho.com/images/featuredcarimages/Honda-WR-V-19/wrv-0.jpg" alt="Los Angeles">
                    <div class="carousel-caption">
                        <div class="col-md-7">
                            <h1>HELLO! Dear : <?php echo $_SESSION['name']; ?> </h1>
                                <form action="">
                                    <input type="text" name="" placeholder="sub"><br>
                                    <textarea name="body" id="" cols="30" rows="2"></textarea><br>
                                    <!-- <input type="text" placeholder="body"><br> -->
                                    <input type="text" placeholder="mail"><br>
                                    <button type="submit" name="submit" class="btn btn-success mt-4">Send Msg To User</button>
                                </form>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.cardekho.com/images/featuredcarimages/Maruti-Swift-17/Swift-new-0.jpg" alt="Chicago">
                    <div class="carousel-caption">
                        <div class="col-md-7">
                            <h1 class="pb-2"><strong>The WordPress Theme for Growth Hackers </strong> </h1>
                            <h4>The right look and feel to promote any product, service or online course.</h4>
                            <button type="button" class="btn btn-success mt-4">Buy Growthpress</button>
                            <button type="button" class="btn btn-dark mt-4">Get More Details</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.cardekho.com/images/featuredcarimages/Honda-WR-V-19/wrv-0.jpg" alt="New York">
                    <div class="carousel-caption">
                        <div class="col-md-7">
                            <h1 class="pb-2"><strong>The WordPress Theme for Growth Hackers </strong> </h1>
                            <h4>The right look and feel to promote any product, service or online course.</h4>
                            <button type="button" class="btn btn-success mt-4">Buy Growthpress</button>
                            <button type="button" class="btn btn-dark mt-4">Get More Details</button>
                        </div>
                    </div>
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
    <div class="upcoming py-5">
        <div class="container">
            <div class="row pb-4 text-center">
                <div class="col-md-12">
                    <h2>Upcoming & Latest cars</h2>
                    <p> Pre-booked lessons, on-call lessons are Not refundable unless cancelled more than 24 hours.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <h4> Mahindra XUV500 2018</h4>
                    </div>
                    <div class="box-carprice">
                        <h6><i class="fa fa-inr"></i>14.0 Lac*</h6>
                    </div>
                    <div class="box-date pb-3">
                        <small>Launch Date: 15 Apr 2018 </small>

                    </div>
                    <button type="button" class="btn btn-outline-danger">Check Price</button>
                </div>
                <div class="col-md-3 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Tata/Tata-Nexon/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <h4> Mahindra XUV500 2018</h4>
                    </div>
                    <div class="box-carprice">
                        <h6><i class="fa fa-inr"></i>14.0 Lac*</h6>
                    </div>
                    <div class="box-date pb-3">
                        <small>Launch Date: 15 Apr 2018 </small>

                    </div>
                    <button type="button" class="btn btn-outline-danger">Check Price</button>
                </div>
                <div class="col-md-3 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <h4> Mahindra XUV500 2018</h4>
                    </div>
                    <div class="box-carprice">
                        <h6><i class="fa fa-inr"></i>14.0 Lac*</h6>
                    </div>
                    <div class="box-date pb-3">
                        <small>Launch Date: 15 Apr 2018 </small>

                    </div>
                    <button type="button" class="btn btn-outline-danger">Check Price</button>
                </div>
                <div class="col-md-3 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <h4> Mahindra XUV500 2018</h4>
                    </div>
                    <div class="box-carprice">
                        <h6><i class="fa fa-inr"></i>14.0 Lac*</h6>
                    </div>
                    <div class="box-date pb-3">
                        <small>Launch Date: 15 Apr 2018 </small>

                    </div>
                    <button type="button" class="btn btn-outline-danger">Check Price</button>
                </div>
            </div>
            <div class="row text-center pt-4">
                <div class="col-md-12">
                    <button type="button" class="btn btn-danger">View All Upcoming Cars</button>
                </div>
            </div>
        </div>
    </div>
    <div class="popular py-5">
        <div class="container">
            <div class="row pb-4 text-center">
                <div class="col-md-12">
                    <h2>Popular car in India</h2>
                    <p> Pre-booked lessons, on-call lessons are Not refundable unless cancelled more than 24 hours.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <h4> Mahindra XUV500 2018</h4>
                    </div>
                    <div class="box-carprice">
                        <h6><i class="fa fa-inr"></i>14.0 Lac*</h6>
                    </div>
                    <div class="box-date pb-3">
                        <small>Launch Date: 15 Apr 2018 </small>

                    </div>
                    <button type="button" class="btn btn-outline-danger">Check Price</button>
                </div>
                <div class="col-md-3 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Tata/Tata-Nexon/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <h4> Mahindra XUV500 2018</h4>
                    </div>
                    <div class="box-carprice">
                        <h6><i class="fa fa-inr"></i>14.0 Lac*</h6>
                    </div>
                    <div class="box-date pb-3">
                        <small>Launch Date: 15 Apr 2018 </small>

                    </div>
                    <button type="button" class="btn btn-outline-danger">Check Price</button>
                </div>
                <div class="col-md-3 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <h4> Mahindra XUV500 2018</h4>
                    </div>
                    <div class="box-carprice">
                        <h6><i class="fa fa-inr"></i>14.0 Lac*</h6>
                    </div>
                    <div class="box-date pb-3">
                        <small>Launch Date: 15 Apr 2018 </small>

                    </div>
                    <button type="button" class="btn btn-outline-danger">Check Price</button>
                </div>
                <div class="col-md-3 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <h4> Mahindra XUV500 2018</h4>
                    </div>
                    <div class="box-carprice">
                        <h6><i class="fa fa-inr"></i>14.0 Lac*</h6>
                    </div>
                    <div class="box-date pb-3">
                        <small>Launch Date: 15 Apr 2018 </small>

                    </div>
                    <button type="button" class="btn btn-outline-danger">Check Price</button>
                </div>
            </div>
            <div class="row text-center pt-4">
                <div class="col-md-12">
                    <button type="button" class="btn btn-danger">View All Upcoming Cars</button>
                </div>
            </div>
        </div>
    </div>
    <div class="help py-5 bg-secondary twhite">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <i class="fa fa-headphones fa-3x"></i>
                    <h3>How can we help you?</h3>
                    <p>Fusce imper diet odio sit amet erat conse quat, eget eleme nmper diet odio sit amet erat atege tpurc surus lorem iandit vehi culas.</p>
                    <button type="button" class="btn btn-danger">Ask the Question</button>
                </div>
            </div>
        </div>
    </div>
    <div class="location py-5">
        <div class="container">
            <div class="row pb-4 text-center">
                <div class="col-md-12">
                    <h2>Find Used Cars in </h2>
                    <p> Pre-booked lessons, on-call lessons are Not refundable unless cancelled more than 24 hours.</p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-2 box border py-4">

                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> New Delhi</button>

                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Banglore</button>
                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Jaipur</button>
                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Chennai</button>
                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Mumbai</button>
                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Banglore</button>
                </div>


            </div>
            <div class="row text-center">
                <div class="col-md-2 box border py-4">

                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> New Delhi</button>

                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Banglore</button>
                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Jaipur</button>
                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Chennai</button>
                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Mumbai</button>
                </div>
                <div class="col-md-2 box border py-4">
                    <button type="button" class="btn btn-light"><i class="fa fa-map-marker fa-1x "></i> Banglore</button>
                </div>


            </div>
            <div class="row text-center pt-4">
                <div class="col-md-12">
                    <button type="button" class="btn btn-danger">View All Upcoming Cars</button>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-search py-5">
        <div class="container">
            <div class="row pb-4 text-center">
                <div class="col-md-12">
                    <h2>Search car by Brand</h2>
                    <p> Pre-booked lessons, on-call lessons are Not refundable unless cancelled more than 24 hours.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>

            </div>
            <div class="row text-center">
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>
                <div class="col-md-2 box border py-4">
                    <div class="box-carimage">
                        <img src="https://img0.gaadicdn.com/images/car-images/265x110/Mahindra/Mahindra-XUV500-2018/6334/047.jpg" alt="">
                    </div>
                    <div class="box-cartitle">
                        <a href="#">
                            <h6> Mahindra </h6>
                        </a>
                    </div>


                </div>

            </div>
            <div class="row text-center pt-4">
                <div class="col-md-12">
                    <button type="button" class="btn btn-danger">View All Upcoming Cars</button>
                </div>
            </div>
        </div>
    </div>
    <div class="offer my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 py-3 border">
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <img src="http://klbtheme.com/froday/wp-content/uploads/2018/02/tablet.png">
                        </div>
                        <div class="col-md-9">
                            <h5>Deals & Coupons</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 border">
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <img src="http://klbtheme.com/froday/wp-content/uploads/2018/02/online-shop-6.png">
                        </div>
                        <div class="col-md-9">
                            <h5>Find Best Offers</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 border">
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <img src="http://klbtheme.com/froday/wp-content/uploads/2018/02/money.png">
                        </div>
                        <div class="col-md-9">
                            <h5>Save Money</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-sektion  border py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <h3><span class="glyphicon glyphicon-cog "></span> <b>Car for sale?</b> Explore Cars like a pro.</h3>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 ">
                    <button type="button" class="btn bg-danger twhite">Start Right Now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer  py-5  ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 footer-one">
                    <img src="http://velikorodnov.com/html/autotrader/images/logo.png" alt="Logo" style="width:120px;">

                    <p class="pt-4">Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                        <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                        <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                        <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 footer-two">
                    <h5>Information </h5>
                    <ul class="list-unstyled">
                        <li><a href="maintenance.html">Maintenance Tips</a></li>
                        <li><a href="contact.html">Locations</a></li>
                        <li><a href="about.html">Testimonials</a></li>
                        <li><a href="about.html">Careers</a></li>
                        <li><a href="about.html">Partners</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 footer-three">
                    <h5>Helpful Links </h5>
                    <ul class="list-unstyled">
                        <li><a href="maintenance.html">Maintenance Tips</a></li>
                        <li><a href="contact.html">Locations</a></li>
                        <li><a href="about.html">Testimonials</a></li>
                        <li><a href="about.html">Careers</a></li>
                        <li><a href="about.html">Partners</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 footer-four">
                    <h5>Helpful Links </h5>
                    <ul class="list-unstyled">
                        <li><a href="maintenance.html">Maintenance Tips</a></li>
                        <li><a href="contact.html">Locations</a></li>
                        <li><a href="about.html">Testimonials</a></li>
                        <li><a href="about.html">Careers</a></li>
                        <li><a href="about.html">Partners</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright bglight1 border pt-2">
        <div class="container">
            <div class="row justify-content-md-center">
                <p> © 2018 xyz Software Pvt. Ltd. </p>
            </div>
        </div>
    </div>


    <script src="./main.js"></script>
</body>

</html>