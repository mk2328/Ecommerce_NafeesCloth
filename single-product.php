<?php
// Database Connection
include("assets/connection/connection.php");

// Get Product ID from URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($product_id > 0) {
    // Fetch Product Data
    $sql = "SELECT product_id, product_name, description, unit_price, subcat_id, image, qty FROM product WHERE product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "<p>Product not found!</p>";
        exit;
    }
} else {
    echo "<p>Invalid Product ID!</p>";
    exit;
}
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Details | Nafees Cloth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <?php
    include("assets/components/links.php")
    ?>
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
            /* Make it responsive */
            margin-top: 0px !important;
            width: auto;
            margin: auto;
            max-height: 90vh;
            
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




</head>


<body>


    <main class="main_wrapper body__overlay">

        <!-- header__topbar__start -->
        <?php
        include("assets/components/header.php")
        ?>
        <!-- header section end -->


        <!-- breadcrumb__start -->
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__title">
                            <h1>Product</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="color__blue">
                                    Product Details
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb__end -->



        <!-- single__product__start -->
        <div class="single__product sp_top_50 sp_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="featurearea__details__img">
                            <div class="featurearea__big__img">
                                <div class="featurearea__single__big__img">
                                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['product_name']; ?>" style="max-height: 500px;max-width: 450px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mt-3">
                        <div class="single__product__wrap">
                            <div class="single__product__heding">
                                <h2><?php echo $product['product_name']; ?></h2>
                            </div>
                            <div class="single__product__price">
                                <span>Rs <?php echo number_format($product['unit_price']); ?></span>
                            </div>

                            <hr>

                            <div class="single__product__description">
                                <p><?php echo $product['description']; ?></p>
                            </div>

                            <div class="single__product__special__feature">
                                <ul>
                                    <li>
                                        <strong>Availability:</strong>
                                        <span><?php echo $product['qty']; ?> left in stock</span>
                                    </li>
                                </ul>
                            </div>

                            <hr>

                            <div class="single__product__quantity">
                                <div class="qty-container">
                                    <button class="qty-btn-minus btn-qty" type="button">-</button>
                                    <input type="text" name="qty" value="1" class="input-qty" id="product-qty">
                                    <button class="qty-btn-plus btn-qty" type="button">+</button>
                                </div>
                                <a class="default__button add-to-cart-btn" href="#"
                                    data-id="<?php echo $product['product_id']; ?>"
                                    data-name="<?php echo $product['product_name']; ?>"
                                    data-price="<?php echo $product['unit_price']; ?>"
                                    data-image="<?php echo $product['image']; ?>">
                                    <i class="fas fa-shopping-cart"></i> Add to cart
                                </a>

                            </div>

                            <p class="single__product__car">
                                <img src="img/car/car.webp" height="25" alt="Delivery Date">
                                Estimated Delivery Date: <strong>09-12 August, 2024</strong>
                            </p>

                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- single__product__end -->


        <!-- discription__section__start -->

        <div class="descriptionarea sp_bottom_80 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 descriptionarea__tab__wrapper">
                        <ul class="nav  descriptionarea__tab__button" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="descriptionarea__link active" data-bs-toggle="tab" data-bs-target="#description" type="button" aria-selected="false" role="tab" tabindex="-1">Description</button>
                            </li>
                            <!--                             
                            <li class="nav-item" role="presentation">
                                <button class="descriptionarea__link" data-bs-toggle="tab" data-bs-target="#product__Type" type="button" aria-selected="true" role="tab" tabindex="-1">Product Type</button>
                            </li> -->
                            <li class="nav-item" role="presentation">
                                <button class="descriptionarea__link" data-bs-toggle="tab" data-bs-target="#delivery__system" type="button" aria-selected="false" role="tab">Delivery system</button>
                            </li>
                        </ul>
                        <div class="tab-content tab__content__wrapper" id="myTabContent1">
                            <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description">

                                <p>
                                    As opposed to using 'Content here, content here', making it look like readable
                                    English. Many desktop publishing packages and web page editors now use Lorem
                                    Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                    many web sites still in their infancy. Various versions have evolved over the
                                    years, sometimes by accident, sometimes on purpose injected humour and the
                                    like. It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nobis provident eius. Tenetur facilis, illo nesciunt numquam non, odit iure, quia recusandae deleniti nihil excepturi?
                                </p>


                            </div>

                            <!-- <div class="tab-pane fade " id="product__Type" role="tabpanel" aria-labelledby="product__Type">

                                <p>
                                    As opposed to using 'Content here, content here', making it look like readable
                                    English. Many desktop publishing packages and web page editors now use Lorem
                                    Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                    many web sites still in their infancy. Various versions have evolved over the
                                    years, sometimes by accident, sometimes on purpose injected humour and the
                                    like. It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters
                                </p>
                                <p>
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                    isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                    generators on the Internet tend to repeat predefined chunks as necessary, making
                                    this the first true generator on the Internet. It uses a dictionary of over 200
                                    Latin words, combined with a handful of model sentence structures, to generate
                                    Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                    always free from repetition, injected humour, or non-characteristic words etc
                                </p>


                            </div> -->
                            <div class="tab-pane fade" id="delivery__system" role="tabpanel" aria-labelledby="delivery__system">

                                <p>
                                    As opposed to using 'Content here, content here', making it look like readable
                                    English. Many desktop publishing packages and web page editors now use Lorem
                                    Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                    many web sites still in their infancy. Various versions have evolved over the
                                    years, sometimes by accident, sometimes on purpose injected humour and the
                                    like. It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters
                                </p>
                                <p>
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                    isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                    generators on the Internet tend to repeat predefined chunks as necessary, making
                                    this the first true generator on the Internet. It uses a dictionary of over 200
                                    Latin words, combined with a handful of model sentence structures, to generate
                                    Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                    always free from repetition, injected humour, or non-characteristic words etc
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- discription__section__end -->

        <!-- related__section__start -->
        <div class="related__section sp_bottom_50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title text-center">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>

                <div class="row grid__responsive row__custom__class feature__slider__active slider__default__arrow">
                    <?php
                    $query = "SELECT * FROM product WHERE subcat_id = 1 LIMIT 12"; // Products fetch karna
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-xl-3 column__custom__class">
                <div class="grid__wraper">
                    <div class="grid__wraper__img">
                        <div class="grid__wraper__img__inner">
                            <a href="single-product.php?id=' . $row['product_id'] . '">
                                <img class="primary__image" src="' . $row['image'] . '" alt="Primary Image">
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
                            <del>Rs ' . ($row['unit_price'] + 500) . '</del>
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
        <!-- related__section__start -->


        <!-- faq__section__start -->
        <div class="faq sp_bottom_50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="faq__heading text-center section__title">
                            <h2 class="">FAQs</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How to buy a product?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How can i make refund from your website?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        I am a new user. How should I start?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        I am a new user. How should I start?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq__section__end -->


        <!-- contact__section__start  -->
        <div class="single__product__contact sp_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single__product__contact__text text-center">
                            <h2>For furthermore help, contact with our support team.</h2>
                            <div class="single__product__contact__button">
                                <a href="#" class="default__button">Contact Us</a>
                            </div>
                            <h3 class="single__product__contact__number"><i class="fas fa-phone"></i> +0123-456-789</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact__section__end  -->



        <!-- footer__section__start -->
        <?php
        include("assets/components/footer.php")
        ?>
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


    <!-- JS here -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {


            // Add to Cart Functionality
            document.querySelector(".add-to-cart-btn").addEventListener("click", function(e) {
                e.preventDefault();

                let productId = this.getAttribute("data-id");
                let productName = this.getAttribute("data-name");
                let productPrice = this.getAttribute("data-price");
                let productImage = this.getAttribute("data-image");
                let quantity = document.getElementById("product-qty").value;

                let cart = localStorage.getItem("cart") ? JSON.parse(localStorage.getItem("cart")) : [];

                let existingProductIndex = cart.findIndex(item => item.id === productId);

                if (existingProductIndex !== -1) {
                    cart[existingProductIndex].qty = parseInt(cart[existingProductIndex].qty) + parseInt(quantity);
                } else {
                    let product = {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        image: productImage,
                        qty: quantity
                    };
                    cart.push(product);
                }

                localStorage.setItem("cart", JSON.stringify(cart));

                alert("Product added to cart!");

                window.location.href = "cart.php";

            });
        });

        console.log(localStorage.getItem("cart"));
    </script>


</body>



</html>