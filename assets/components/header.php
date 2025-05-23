<?php
session_start();
if (isset($_SESSION['user_id'])) :
?>
    <!-- header__topbar__start -->
    <div class="header__topbar desktop__menu__wrapper "  >
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="header__topbar__left">
                        <ul>
                            <li>Welcome! <?php echo $_SESSION['fullname']; ?></li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" d="M112 160l144 112 144-112" />
                                </svg> <?php echo $_SESSION['email']; ?>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="header__topbar__right">
                        <div class="header__topbar__social__icon">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header__topbar__end -->
<?php endif; ?>



<!-- header section start -->
<header>
    <div class="headerarea header__sticky" style="background-color:black">
        <div class="container desktop__menu__wrapper">
            <div class="row common__row position-relative">
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="headerarea__logo">
                        <a href="index.php"><img src="assets/images/logo.png" alt="" style="height:60px"></a>
                    </div>
                </div>



                <div class="col-xl-8 col-lg-8 col-md-7 main_menu_wrap">

                    <div class="headerarea__main__menu ">
                        <nav style="color:white !important">
                            <ul>
                                <li><a href='index.php'>Home</a> </li>



                                <li class="position-static">
                                    <a class='headerarea__has__dropdown' href='categories.html'>Categories
                                        <span class="header__label hot__color ">Trending</span>
                                    </a>

                                    <ul class="headerarea__submenu headerarea__megamenu">

                                        <li class="mega__menu__li mega__menu__image">
                                            <a class='menu__title text-dark' href='products.php?category=Women'>Women</a>
                                            <ul>
                                                <li>
                                                    <a href='products.php?category=Women'>
                                                        <img class="img-fluid" src="assets/images/women/w.jpeg"
                                                            alt="Collection">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="mega__menu__li mega__menu__image">
                                            <a class='menu__title text-dark' href='products.php?category=Kids'>Kids</a>
                                            <ul>
                                                <li>
                                                    <a href='products.php?category=Kids'>
                                                        <img class="img-fluid" src="assets/images/kids/k.jpeg"
                                                            alt="Collection">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>








                                    </ul>

                                </li>

                                <li><a href='about.php'>About</a> </li>
                                <li><a href='contact.php'>Contact</a> </li>
                                <li><a href='products.php?category=Women'>New Arrivals
                                        <span class="header__label hot__color">New</span>
                                    </a> </li>





                                <!-- <li><a class="headerarea__has__dropdown" href="#">Pages
                                    </a>

                                    <ul class="headerarea__submenu" >
                                        <li><a href='about.html'  style="color:black !important">About</a></li>
                                        <li><a href='contact.html'>Contact</a></li>
                                        <li><a href='service.html'>Service</a></li>
                                        <li><a href='faq.html'>FAQ</a></li>
                                        <li><a href='wishlist.html'>Wishlist</a></li>
                                        <li><a href='cart.html'>Cart</a></li>
                                        <li><a href='categories.html'>Categories</a></li>
                                        <li><a href='checkout.html'>Checkout</a></li>
                                        <li><a href="https://themeforest.net/user/marino-themes">Purchase Now</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </nav>
                    </div>

                </div>


                <div class="col-xl-2 col-lg-2 col-md-5">

                    <div class="headerarea__right">

                        <ul class="headerarea__right__nav">



                            <li>
                                <div class="setting__wrap cursor__pointer">
                                    <div class="setting__wrap__active">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path
                                                d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" />
                                            <path
                                                d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                        </svg>

                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="headermiddle__bar cursor__pointer">
                                    <div class="headermiddle__account">
                                        <div class="headermiddle__account__img">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                viewBox="0 0 512 512">
                                                <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <circle cx="400" cy="416" r="16" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"
                                                    d="M48 80h64l48 272h256" />
                                                <path
                                                    d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="bigcounter">0</span>

                                            <script>
                                                function updateCartCount() {
                                                    var cart = JSON.parse(localStorage.getItem("cart")) || [];
                                                    var cartCountElement = document.querySelector(".bigcounter");
                                                    var totalItems = cart.reduce((sum, item) => sum + parseInt(item.qty), 0);

                                                    cartCountElement.textContent = totalItems;
                                                }

                                                // Ensure count updates on page load and cart updates
                                                document.addEventListener("DOMContentLoaded", updateCartCount);
                                            </script>

                                        </div>

                                    </div>
                                </div>


                            </li>



                        </ul>

                    </div>

                </div>

            </div>


        </div>
    </div>

    <div class="container-fluid mob_menu_wrapper headerarea header__sticky">
        <div class="row align-items-center">
            <div class="col-sm-4 col-2">
                <div class="mobile-off-canvas">
                    <a class="mobile-aside-button" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-5">
                <div class="mobile-logo">
                    <a class="logo__mobile" href="index.php"><img src="assets/images/logo.png" alt="" style="height:60px;width: 85px;margin-left: -29% !important;"></a>
                </div>
            </div>
            <div class="col-sm-4 col-5">
                <div class="header-right-wrap">


                    <div class="header__right__inner__wrap d-flex align-items-center justify-content-end">

                        <ul class="headerarea__right headerarea__right__mobail__menu">


                            <li>
                                <div class="setting__wrap cursor__pointer">
                                    <div class="setting__wrap__active">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path
                                                d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" />
                                            <path
                                                d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                        </svg>

                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="headermiddle__bar cursor__pointer">
                                    <div class="headermiddle__account">
                                        <div class="headermiddle__account__img">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                viewBox="0 0 512 512">
                                                <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <circle cx="400" cy="416" r="16" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"
                                                    d="M48 80h64l48 272h256" />
                                                <path
                                                    d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class=" bigcounter">0</span>
                                            <script>
                                                function updateCartCount() {
                                                    var cart = JSON.parse(localStorage.getItem("cart")) || [];
                                                    var cartCountElement = document.querySelector(".bigcounter");
                                                    var totalItems = cart.reduce((sum, item) => sum + parseInt(item.qty), 0);

                                                    cartCountElement.textContent = totalItems;
                                                }

                                                // Ensure count updates on page load and cart updates
                                                document.addEventListener("DOMContentLoaded", updateCartCount);
                                            </script>

                                        </div>

                                    </div>
                                </div>


                            </li>

                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Mobile Menu Start Here -->
    <div class="mobile-off-canvas-active" style="background-color: black !important;">
        <a class="mobile-aside-close"><i class="fa fa-close"></i></a>
        <div class="header-mobile-aside-wrap">

            <div class="mobile__logo">
                <a href="index.php"><img src="assets/images/logo.png" alt="" style="height:60px"></a>
            </div>

            <!-- <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class="fa fa-search"></i></button>
                </form>
            </div> -->
            <div class="mobile-menu-wrap">

                <div class="mobile-navigation">

                    <nav>
                        <ul class="mobile-menu">
                            <li><a href='index.php'>Home</a> </li>
                            <li><a href='products.php?category=Women'>Women Collection</a> </li>
                            <li><a href='products.php?category=Kids'>Kids Collection</a> </li>
                            <li><a href='about.php'>About</a> </li>
                            <li><a href='contact.php'>Contact</a> </li>


                        </ul>
                    </nav>

                </div>


            </div>

            <div class="mobile-social-wrap">
                <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="pinterest" href="#"><i class="fab fa-pinterest"></i></a>
                <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end Here -->

    <!-- setting__wrap__list__start -->
    <div class="setting__wrap__list">
        <button class="setting__wrap__close">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <title>Close</title>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                    d="M368 368L144 144M368 144L144 368"></path>
            </svg>
        </button>

        <div class="setting__wrap__heading">
            <h6>
                <a>Account</a>
            </h6>
        </div>
        <div class="setting__wrap__list__inner">
            <ul>
                <?php
                if (isset($_SESSION['user_id'])) { ?>
                    <li><a href='account.php'>My Account</a></li>
                    <li><a href='cart.php'>My Cart</a></li>
                    <li><a href='logout.php'>Logout</a></li>
                <?php } else { ?>
                    <li><a href='login.php'>Login/Register</a></li>
                    <li><a href='cart.php'>My Cart</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- setting__wrap__list__end -->





    <!-- minicart__section__start -->
    <!-- minicart__section__start -->
    <section class="minicart">
        <div class="minicart__inner">
            <div class="minicart__wrapper">
                <div class="minicart__close__icon">
                    <div class="minicart__cart__text">
                        <strong>Cart</strong>
                    </div>
                    <button class="minicart__close__btn">
                        <i class="fa fa-close"></i>
                    </button>
                </div>

                <div class="minicart__single__wraper">
                    <!-- Cart Items Will be Loaded Here Dynamically -->
                </div>

                <div class="minicart__footer">
                    <div class="minicart__subtotal">
                        <span class="subtotal__title">Subtotal:</span>
                        <span class="subtotal__amount">Rs 0.00</span>
                    </div>
                    <div class="minicart__button">
                        <a class='default__button' href='cart.php'>View Cart</a>
                        <a class='default__button' href='checkout.php'>Checkout</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- minicart__section__end -->

    <script>
        function updateMiniCart() {
            var cart = JSON.parse(localStorage.getItem("cart")) || [];
            var minicartWrapper = document.querySelector(".minicart__single__wraper");
            var subtotalElement = document.querySelector(".subtotal__amount");
            var minicartFooter = document.querySelector(".minicart__footer"); // Footer ko target karna
            var subtotal = 0;

            minicartWrapper.innerHTML = ""; // Clear old data

            if (cart.length === 0) {
                minicartWrapper.innerHTML = "<p style='text-align: center;'>Your cart is empty.</p>";
                minicartFooter.style.display = "none"; // Hide subtotal & buttons
                return;
            }

            minicartFooter.style.display = "block"; // Show footer when cart has items

            cart.forEach(function(item, index) {
                var productTotal = parseFloat(item.price) * parseInt(item.qty);
                subtotal += productTotal;

                var cartItem = `
            <div class="minicart__single">
                <div class="minicart__single__img">
                    <a href="single-product.php?id=${item.id}">
                        <img src="${item.image}" alt="${item.name}">
                    </a>
                    <div class="minicart__single__close">
                        <button class="remove-item" data-index="${index}" title="Remove"><i class="fa fa-close"></i></button>
                    </div>
                </div>
                <div class="minicart__single__content">
                    <h4><a href="single-product.php?id=${item.id}">${item.name}</a></h4>
                    <span>${item.qty} x <span class="money">Rs ${parseFloat(item.price).toFixed(2)}</span></span>
                </div>
            </div>
        `;

                minicartWrapper.innerHTML += cartItem;
            });

            subtotalElement.textContent = "Rs " + subtotal.toFixed(2);

            // Remove Button Functionality
            document.querySelectorAll(".remove-item").forEach(button => {
                button.addEventListener("click", function() {
                    var index = this.getAttribute("data-index");
                    cart.splice(index, 1);
                    localStorage.setItem("cart", JSON.stringify(cart));
                    updateMiniCart(); // Update minicart after removing item
                });
            });
        }

        // Ensure cart updates on page load
        document.addEventListener("DOMContentLoaded", updateMiniCart);
    </script>

    <!-- minicart__section__end -->

</header>
<!-- header section end -->