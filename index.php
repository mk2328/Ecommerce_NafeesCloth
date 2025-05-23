<!doctype html>
<html class="no-js" lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Index | Nafees Cloth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .grid__wraper__img__inner img {
            width: 100%;
            height: auto;
            /* Auto height maintain karega */
            aspect-ratio: 4/3;
            /* Fixed aspect ratio for consistency */
            object-fit: contain;
            /* Image ko crop hone se bachayega */
        }

        .main_cards {
            /* background-color:#dedcdc */
        }

        /* Ensure the modal is within 100vh */
        .modal-dialog {
            max-width: 90%;
            /* Make it responsive */
            width: auto;
            margin: 0px;
            max-height: 90vh;
            margin-top: 0px !important;
        }

        .modal-content {
            border-radius: 10px;
            overflow: hidden;
            max-height: 90vh;
            display: flex;
            flex-direction: column;
        }

        .modal-body {
            overflow-y: auto;
            /* padding: 20px; */
        }

        /* Responsive Image Styling */
        .grid__quick__img img {
            width: 100%;
            max-width: 350px;
            /* Adjust image size */
            height: auto;
            display: block;
            margin: 0 auto;
            border-radius: 10px;
        }

        /* Ensure text adjusts well */
        .grid__quick__content {
            text-align: left;
            /* padding: 15px; */
        }

        .quick__price {
            font-size: 20px;
            font-weight: bold;
            color: #ffba00;
        }

        /* Make it fully responsive */
        @media (max-width: 768px) {
            .modal-dialog {
                max-width: 95%;
                max-height: 95vh;
            }

            .grid__quick__content {
                text-align: center;
            }

            .modal-body {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            .grid__quick__img img {
                max-width: 280px;
            }
        }


        .herobanner__img img {
            width: 100% !important;
            height: auto !important;
            max-width: 100% !important;
            object-fit: cover !important;
            display: block !important;
        }

        .herobanner__img__side {
            padding: 0 15px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        /* Responsive tweaks for mobile screens */
        @media (max-width: 768px) {
            .herobanner__img__side {
                margin-top: 20px !important;
            }

            .herobanner__img img {
                object-fit: contain !important;
            }
        }
    </style>



    <?php
    include("assets/components/links.php")
    ?>



</head>

<?php
include("assets/connection/connection.php")
?>


<body>


    <main class="main_wrapper body__overlay overflow__hidden">

        <?php
        include("assets/components/header.php")
        ?>




        <!-- herobanner__start -->
        <div class="herobanner">
            <div class=" container-fluid hero__fullwidth__spacing">

                <div class="herobanner__inner">


                    <div class="container herobannerarea__slider  slider__default__arrow slider__default__dot">


                        <div class="herobannerarea__slider__single">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__text__side">
                                    <div class="herobanner__text__wraper ltn__slide-animation">
                                        <h1 class="herobanner__title herobanner__title__color animated">Women Collection</h1>
                                        <div class="herobanner__text herobanner__text__color  animated">
                                            <p>Enchanting Styles for Dreamy Souls.</p>
                                        </div>
                                        <div class="herobanner__button herobanner__button__color  animated">
                                            <a href="products.php?category=Women" class="default__button" tabindex="0">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__img__side">
                                    <div class="herobanner__img">
                                        <img src="img/herobanner/Untitled design (4).png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="herobannerarea__slider__single">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__text__side">
                                    <div class="herobanner__text__wraper ltn__slide-animation">
                                        <h1 class="herobanner__title herobanner__title__color animated">Kids Collection</h1>
                                        <div class="herobanner__text herobanner__text__color  animated">
                                            <p>Enchanting Styles for Dreamy Souls.</p>
                                        </div>
                                        <div class="herobanner__button herobanner__button__color  animated">
                                            <a href="products.php?category=Kids" class="default__button" tabindex="0">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__img__side">
                                    <div class="herobanner__img">
                                        <img src="img/herobanner/kids_hero2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
        <!-- herobanner__end -->

        <!-- banner__section__start -->
        <div class="banner sp_top_80 sp_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 main_cards">
                        <div class="banner__img">
                            <img src="assets/images/women/w.jpeg" alt="">
                            <div class="banner__info">
                                <h2><a href='products.php?category=Women'>Women Wear</a></h2>
                                <div class="banner__button">
                                    <a class='default__button btn__black' href='products.php?category=Women'>Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="banner__img">
                            <img src="assets/images/kids/k.jpeg" alt="">
                            <div class="banner__info">
                                <h2><a href='products.php?category=Kids'>Kids Wear</a></h2>
                                <div class="banner__button">
                                    <a class='default__button btn__black' href='products.php?category=Kids'>Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner__section__end -->

        <!-- best__selling__start -->
        <div class="best__selling sp_bottom_80">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="section__title">
                            <h2>Best Selling</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="best__selling__tab">
                            <ul class="nav  best__selling__tab__wrap" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="product__tap__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">Women</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="product__tap__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Kids</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="product__tap__link" data-bs-toggle="tab" data-bs-target="#projects__three" type="button">Trending</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="product__tap__link" data-bs-toggle="tab" data-bs-target="#projects__four" type="button">New Arrivals</button>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>


                <div class="tab-content " id="myTabContent">
                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                        <div class="row grid__responsive">
                            <?php


                            $query = "SELECT * FROM product where subcat_id = 1 limit 12"; // Database se products fetch karna
                            $result = $conn->query($query);


                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="grid__wraper">
                    <div class="grid__wraper__img">
                        <div class="grid__wraper__img__inner">
                            <a href="single-product.php?id=' . $row['product_id'] . '">
                     <img class="primary__image" src=' . $row['image'] . ' alt="Primary Image">
                                                    
                                    
                            </a>
                        </div>
                    <div class="grid__wraper__icon">                                
                                                <ul>
                                                    <li>
                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <a class="quick-view-btn" href="#" 
                                           data-id="' . $row['product_id'] . '" 
                                           data-name="' . $row['product_name'] . '" 
                                           data-price="' . $row['unit_price'] . '" 
                                           data-desc="' . $row['description'] . '" 
                                           data-image="' . $row['image'] . '">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </span>
                                </li>
        
                                                    <li>
                                                        <a href="single-product.php?id=' . $row['product_id'] . '" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>                                             
                                                    </li>
        
        
                                                </ul>   
                                            </div>
                    </div>
                    <div class="grid__wraper__info">
                        <h3 class="grid__wraper__tittle">
                            <a href="single-product.php?id=' . $row['product_id'] . '">' . $row['product_name'] . '</a>
                        </h3>
                        <div class="grid__wraper__price">
                            <span>Rs ' . $row['unit_price'] . '</span> 
                        </div>
                     
                    </div>
                </div>
              </div>';
                                }
                            } else {
                                echo "<p>No products available</p>";
                            }

                            ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="best__selling__button">
                                        <a class="default__button" href="products.php?category=Women">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                        <div class="row">

                            <?php


                            $query = "SELECT * FROM product where subcat_id = 2 limit 12"; // Database se products fetch karna
                            $result = $conn->query($query);


                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="grid__wraper">
                    <div class="grid__wraper__img">
                        <div class="grid__wraper__img__inner">
                            <a href="single-product.php?id=' . $row['product_id'] . '">
                     <img class="primary__image" src=' . $row['image'] . ' alt="Primary Image">
                                                    
                                    
                            </a>
                        </div>
                    <div class="grid__wraper__icon">                                
                                                <ul>
                                                    <li>
                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <a class="quick-view-btn" href="#" 
                                           data-id="' . $row['product_id'] . '" 
                                           data-name="' . $row['product_name'] . '" 
                                           data-price="' . $row['unit_price'] . '" 
                                           data-desc="' . $row['description'] . '" 
                                           data-image="' . $row['image'] . '">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </span>
                                </li>
        
                                                    <li>
                                                        <a href="single-product.php?id=' . $row['product_id'] . '" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>                                             
                                                    </li>
        
        
                                                </ul>   
                                            </div>
                    </div>
                    <div class="grid__wraper__info">
                        <h3 class="grid__wraper__tittle">
                            <a href="single-product.php?id=' . $row['product_id'] . '">' . $row['product_name'] . '</a>
                        </h3>
                        <div class="grid__wraper__price">
                            <span>Rs ' . $row['unit_price'] . '</span> 
                        </div>
                     
                    </div>
                </div>
              </div>';
                                }
                            } else {
                                echo "<p>No products available</p>";
                            }

                            ?>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="best__selling__button">
                                    <a class="default__button" href="products.php?category=Kids">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">
                        <div class="row">

                            <?php


                            $query = "SELECT * FROM product ORDER BY RAND() LIMIT 12;"; // Database se products fetch karna
                            $result = $conn->query($query);


                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="grid__wraper">
                    <div class="grid__wraper__img">
                        <div class="grid__wraper__img__inner">
                            <a href="single-product.php?id=' . $row['product_id'] . '">
                     <img class="primary__image" src=' . $row['image'] . ' alt="Primary Image">
                                                    
                                    
                            </a>
                        </div>
                    <div class="grid__wraper__icon">                                
                                                <ul>
                                                    <li>
                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <a class="quick-view-btn" href="#" 
                                           data-id="' . $row['product_id'] . '" 
                                           data-name="' . $row['product_name'] . '" 
                                           data-price="' . $row['unit_price'] . '" 
                                           data-desc="' . $row['description'] . '" 
                                           data-image="' . $row['image'] . '">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </span>
                                </li>
        
                                                    <li>
                                                        <a href="single-product.php?id=' . $row['product_id'] . '" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>                                             
                                                    </li>
        
        
                                                </ul>   
                                            </div>
                    </div>
                    <div class="grid__wraper__info">
                        <h3 class="grid__wraper__tittle">
                            <a href="single-product.php?id=' . $row['product_id'] . '">' . $row['product_name'] . '</a>
                        </h3>
                        <div class="grid__wraper__price">
                            <span>Rs ' . $row['unit_price'] . '</span> 
                        </div>
                     
                    </div>
                </div>
              </div>';
                                }
                            } else {
                                echo "<p>No products available</p>";
                            }

                            ?>

                        </div>
                    </div>





                    <div class="tab-pane fade" id="projects__four" role="tabpanel" aria-labelledby="projects__four">
                        <div class="row">

                            <?php


                            $query = "SELECT * FROM product ORDER BY RAND() LIMIT 12;"; // Database se products fetch karna
                            $result = $conn->query($query);


                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="grid__wraper">
                    <div class="grid__wraper__img">
                        <div class="grid__wraper__img__inner">
                            <a href="single-product.php?id=' . $row['product_id'] . '">
                     <img class="primary__image" src=' . $row['image'] . ' alt="Primary Image">
                                                    
                                    
                            </a>
                        </div>
                    <div class="grid__wraper__icon">                                
                                                <ul>
                                                    <li>
                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <a class="quick-view-btn" href="#" 
                                           data-id="' . $row['product_id'] . '" 
                                           data-name="' . $row['product_name'] . '" 
                                           data-price="' . $row['unit_price'] . '" 
                                           data-desc="' . $row['description'] . '" 
                                           data-image="' . $row['image'] . '">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </span>
                                </li>
        
                                                    <li>
                                                        <a href="single-product.php?id=' . $row['product_id'] . '" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>                                             
                                                    </li>
        
        
                                                </ul>   
                                            </div>
                    </div>
                    <div class="grid__wraper__info">
                        <h3 class="grid__wraper__tittle">
                            <a href="single-product.php?id=' . $row['product_id'] . '">' . $row['product_name'] . '</a>
                        </h3>
                        <div class="grid__wraper__price">
                            <span>Rs ' . $row['unit_price'] . '</span> 
                        </div>
                     
                    </div>
                </div>
              </div>';
                                }
                            } else {
                                echo "<p>No products available</p>";
                            }

                            ?>



                        </div>
                    </div>


                </div>






            </div>
        </div>
        <!-- best__selling__start -->

        <!-- cowndown__banner start -->
        <div class="cowndown__banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="cowndown__banner__inner">
                            <div class="cowndown__banner__title">
                                <h2>Best Offer - Up to <span>50%</span></h2>
                            </div>
                            <p>Explore our latest New Arrivals &amp; unlock discounts of up to 50% off!</p>
                            <div class="cowndown__banner__cowndown" data-countdown="2026/01/01">
                                <div class="count">
                                    <p>28</p>
                                    <span>Days</span>
                                </div>
                                <div class="count">
                                    <p>20</p>
                                    <span>Hours</span>
                                </div>

                                <div class="count">
                                    <p>28</p>
                                    <span>Min</span>
                                </div>

                                <div class="count">
                                    <p>28</p>
                                    <span>Sec</span>
                                </div>
                            </div>
                            <div class="cowndown__banner__button">
                                <a class="default__button" href="products.php?category=Women">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 pt-4">
                        <div class="cowndown__banner__img">
                            <img src="assets/images/sale2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cowndown__banner end -->






        <!-- animate__content__start -->
        <div class="animate__content sp_bottom_100">
            <div class="container-fluid full__width__padding">
                <div class="animate__content__wrap">
                    <div class="animate__content__single">
                        <span> Returns accepted for 30 days</span>
                    </div>
                    <div class="animate__content__single animate__content__single--2">
                        <span> Free return shipping</span>
                    </div>
                    <div class="animate__content__single">
                        <span> No restocking fee</span>
                    </div>
                    <div class="animate__content__single animate__content__single--2">
                        <span> No final sale items</span>
                    </div>
                    <div class="animate__content__single">
                        <span> 100% Payment Secure </span>
                    </div>
                    <div class="animate__content__single animate__content__single--2">
                        <span>Online Support</span>
                    </div>
                    <div class="animate__content__single">
                        <span> Returns accepted for 30 days</span>
                    </div>
                    <div class="animate__content__single animate__content__single--2">
                        <span> Free return shipping</span>
                    </div>
                    <div class="animate__content__single">
                        <span> No restocking fee</span>
                    </div>
                    <div class="animate__content__single animate__content__single--2">
                        <span> No final sale items</span>
                    </div>
                    <div class="animate__content__single">
                        <span> 100% Payment Secure </span>
                    </div>
                    <div class="animate__content__single animate__content__single--2">
                        <span>Online Support</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- animate__content__start -->


        <!-- fetaure__section__start -->
        <div class="feature__2 sp_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="feature__2__single">
                            <div class="feature__2__icon">
                                <img src="img/feature/feature__1.svg" alt="">
                            </div>
                            <div class="feature__2__text">
                                <h4>Free Shipping</h4>
                                <p>On orders on <strong>all orders</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="feature__2__single">
                            <div class="feature__2__icon">
                                <img src="img/feature/feature__2.svg" alt="">
                            </div>
                            <div class="feature__2__text">
                                <h4>Money Back</h4>
                                <p>Money back in 15 days..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="feature__2__single">
                            <div class="feature__2__icon">
                                <img src="img/feature/feature__3.svg" alt="">
                            </div>
                            <div class="feature__2__text">
                                <h4>Secure Checkout</h4>
                                <p>100% Payment Secure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="feature__2__single">
                            <div class="feature__2__icon">
                                <img src="img/feature/feature__4.svg" alt="">
                            </div>
                            <div class="feature__2__text">
                                <h4>Online Support</h4>
                                <p>Ensure the product quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fetaure__section__end -->

        <!-- instagram__start -->
        <!-- <div class="instagram">
            <div class="container">
                <div class="row">
                    <div class="section__title text-center">
                        <h2>Follow on Instagram</h2>
                        <p><a href="#" target="_blank" title="https://www.instagram.com/">@marino-themes</a></p>
                    </div>
                </div>
            </div>
            <div class="instagram__img__wraper">
                <div class="row row__custom__class instagram__slider__active slider__default__arrow slider__default__arrow slider__default__arrow--2">

                    <div class="col-sm-12 column__custom__class">
                        <div class="instagram__img">
                            <a class="popup__img" href="img/instagram/gallery-1.jpg"> <img src="img/instagram/gallery-1.jpg" alt="Instagram Gallery Image"></a>
                        </div>
                    </div>

                    <div class="col-sm-12 column__custom__class">
                        <div class="instagram__img">
                            <a class="popup__img" href="img/instagram/gallery-2.jpg"> <img src="img/instagram/gallery-2.jpg" alt="Instagram Gallery Image"></a>
                        </div>
                    </div>

                    <div class="col-sm-12 column__custom__class">
                        <div class="instagram__img">
                            <a class="popup__img" href="img/instagram/gallery-3.jpg"> <img src="img/instagram/gallery-3.jpg" alt="Instagram Gallery Image"></a>
                        </div>
                    </div>

                    <div class="col-sm-12 column__custom__class">
                        <div class="instagram__img">
                            <a class="popup__img" href="img/instagram/gallery-4.jpg"> <img src="img/instagram/gallery-4.jpg" alt="Instagram Gallery Image"></a>
                        </div>
                    </div>

                    <div class="col-sm-12 column__custom__class">
                        <div class="instagram__img">
                            <a class="popup__img" href="img/instagram/gallery-6.jpg"> <img src="img/instagram/gallery-6.jpg" alt="Instagram Gallery Image"></a>
                        </div>
                    </div>

                    <div class="col-sm-12 column__custom__class">
                        <div class="instagram__img">
                            <a class="popup__img" href="img/instagram/gallery-7.jpg"> <img src="img/instagram/gallery-7.jpg" alt="Instagram Gallery Image"></a>
                        </div>
                    </div>


                </div>
            </div>
        </div> -->
        <!-- instagram__end -->



        <?php
        include("assets/components/footer.php")
        ?>



        </div>
        <!-- footer__section__end -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Quick View Modal -->
        <div class="grid__quick__view__modal modalarea modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="grid__quick__img">
                                    <img src="" id="modal-product-image" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="grid__quick__content">
                                    <h3 id="modal-product-name"></h3>
                                    <div class="quick__price">
                                        Rs <span id="modal-product-price"></span>
                                    </div>
                                    <p id="modal-product-description"></p>
                                    <a id="modal-add-to-cart" class="default__button" href="">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {
                $('.quick-view-btn').click(function(e) {
                    e.preventDefault();

                    var id = $(this).data('id');
                    var name = $(this).data('name');
                    var price = $(this).data('price');
                    var desc = $(this).data('desc');
                    var image = $(this).data('image');

                    $('#modal-product-name').text(name);
                    $('#modal-product-price').text(price);
                    $('#modal-product-description').text(desc);
                    $('#modal-product-image').attr('src', image);

                    $('#modal-add-to-cart').attr('href', 'single-product.php?id=' + id);
                });
            });
        </script>



    </main>


    <?php
    include("assets/components/scripts.php")
    ?>

</body>


</html>