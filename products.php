<?php
$category = isset($_GET['category']) ? $_GET['category'] : 'default';

// Define content based on category
$categories = [
    'Women' => [
        'title' => 'Unstitched Elegance: Craft Your Own Style',
        'description' => 'Discover premium unstitched fabrics designed for elegance and creativity. Stitch your dreams into reality <br>with timeless designs and luxurious textures.',
        'image' => 'assets/images/women/women_hero.png'
    ],
    'Kids' => [
        'title' => 'Adorable Styles for Little Trendsetters',
        'description' => 'Explore comfy outfits for kids, designed to bring joy and style to every moment.',
        'image' => 'assets/images/kids/kids_hero.png'
    ],
    'default' => [
        'title' => 'Explore Our Latest Collection',
        'description' => 'Find the best designs crafted for elegance and comfort.',
        'image' => 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80'
    ]
];

// Set selected category data
$selectedCategory = $categories[$category] ?? $categories['default'];
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Products | Nafees Cloth</title>
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
        <div style="height: 80vh; background-image: url(<?php echo $selectedCategory['image']; ?>); background-size: cover; background-position: center;" class="position-relative w-100">
            <div class="position-absolute text-white d-flex flex-column align-items-center justify-content-center" style="top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0,0,0,.75);">
                <center>
                    <h1 class="mb-2 mt-2 font-weight-bold text-center text-warning">
                        <?php echo $selectedCategory['title']; ?>
                    </h1>
                    <span>
                        <?php echo $selectedCategory['description']; ?>
                    </span>
                </center>

                <div class="text-center mt-3">
                    <!-- hover background-color: white; color: black; -->
                    <a href="#products" id="filled" class="btn px-5 py-3 text-white mt-3 mt-sm-0 mx-1 default__button">Explore Products</a>

                </div>
            </div>
        </div>

        <!-- herobanner__end -->



        <!-- best__selling__start -->
        <div class="best__selling sp_bottom_80 mt-5" id="products">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="section__title">
                            <h2>Best <?php echo $category ?> Collection</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="best__selling__tab">
                            <ul class="nav  best__selling__tab__wrap" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="product__tap__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button"><?php echo $category ?></button>
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
                         
                            if ($category == "Women") {
                                $query = "SELECT * FROM product where subcat_id = 1 ";
                            } elseif ($category == "Kids") {
                                $query = "SELECT * FROM product where subcat_id = 2 ";
                            } // Database se products fetch karna
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




                    <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">
                        <div class="row">

                            <?php

                            if ($category == "Women") {
                                $query = "SELECT * FROM product where subcat_id = 1 ORDER BY RAND() LIMIT 12;";
                            } elseif ($category == "Kids") {
                                $query = "SELECT * FROM product where subcat_id = 2 ORDER BY RAND() LIMIT 12";
                            }

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

                            if ($category == "Women") {
                                $query = "SELECT * FROM product where subcat_id = 1 ORDER BY RAND() LIMIT 12;";
                            } elseif ($category == "Kids") {
                                $query = "SELECT * FROM product where subcat_id = 2 ORDER BY RAND() LIMIT 12";
                            }

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







        <!-- animate__content__start -->
        <div class="animate__content sp_bottom_100 mb-5">
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