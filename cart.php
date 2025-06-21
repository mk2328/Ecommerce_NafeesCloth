<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart | Nafees Cloth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <?php
    include("assets/components/links.php")
    ?>
    <?php
    include("assets/connection/connection.php")
    ?>



</head>


<body>


    <main class="main_wrapper body__overlay overflow__hidden">

        <?php
        include("assets/components/header.php")
        ?>


        <!-- breadcrumb__start -->
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__title">
                            <h1>Cart</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="color__blue">
                                    Cart
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb__end -->



        <!-- cart__section__start -->
        <div class="cartarea sp_bottom_100 sp_top_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <form action="#">
                            <div class="cartarea__table__content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cartarea__shiping__update__wrapper">
                            <div class="cartarea__shiping__update">
                                <a class='default__button' href='index.php'>Continue Shopping</a>
                            </div>
                            <div class="cartarea__clear">
                                <a class="default__button" href="#" id="clear-cart">Clear Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="cartarea__tax">
                            <div class="cartarea__title">
                                <h4>Need Help with Your Order?</h4>
                            </div>
                            <div class="cartarea__text">
                                <p>Feel free to contact us for any queries!</p>
                                <p>📞 WhatsApp: +92 XXXXXXXX</p>
                                <p>📧 Email: support@yourstore.com</p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-md-6 col-12">
                        <div class="cartarea__discount__code__wrapper cartarea__tax">
                            <div class="cartarea__title">
                                <h4>Cart Note</h4>
                            </div>
                            <div class="cartarea__discount__code">
                                <p>Special instructions for seller</p>
                                <textarea name="note" id="CartSpecialInstructions" style="max-height: 80px !important;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-md-6 col-12">
                        <div class="cartarea__grand__totall cartarea__tax">
                            <div class="cartarea__title">
                                <h4>Cart Total</h4>
                            </div>
                            <h5>Cart Totals
                                <span>Rs 0</span>
                            </h5>
                            <a class="default__button" href="checkout.php">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart__section__end-->

        <script>
    function updateCartTotal() {
        var cart = JSON.parse(localStorage.getItem("cart")) || [];
        var cartTotalElement = document.querySelector(".cartarea__grand__totall h5 span"); // Cart total element
        var subtotal = 0;

        cart.forEach(function(item) {
            subtotal += parseFloat(item.price) * parseInt(item.qty);
        });

        if (cartTotalElement) {
            cartTotalElement.textContent = "Rs " + subtotal.toFixed(2);
        }
    }

    // Ensure cart total updates on page load
    document.addEventListener("DOMContentLoaded", updateCartTotal);
</script>




        <!-- footer__section__start -->
        <?php
        include("assets/components/footer.php")
        ?>
        <!-- footer__section__end -->




    </main>





    <!-- JS here -->
    <?php
    include("assets/components/scripts.php")
    ?>


</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let cartData = JSON.parse(localStorage.getItem("cart")) || [];
        let cartTableBody = document.querySelector("tbody");

        if (cartData.length === 0) {
            cartTableBody.innerHTML = `<tr><td colspan="6" style="text-align:center;">Cart is empty</td></tr>`;
            return;
        }

        cartTableBody.innerHTML = "";

        cartData.forEach((item, index) => {
            let total = item.price * item.qty;
            let row = document.createElement("tr");

            row.innerHTML = `
                <td class="cartarea__product__thumbnail">
                    <a href="#"><img src="${item.image}" alt="cart"></a>
                </td>
                <td class="cartarea__product__name"><a href="#">${item.name}</a></td>
                <td class="cartarea__product__price__cart"><span class="amount">Rs ${parseFloat(item.price).toFixed(2)}</span></td>
                <td class="cartarea__product__quantity">
                    <div class="featurearea__quantity">
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-qty" type="button" data-index="${index}"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="${item.qty}" class="input-qty" data-index="${index}" readonly>
                            <button class="qty-btn-plus btn-qty" type="button" data-index="${index}"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </td>
                <td class="cartarea__product__subtotal">Rs ${total.toFixed(2)}</td>
                <td class="cartarea__product__remove">
                    <a href="#" class="remove-item" data-id="${item.id}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <title>Trash</title>
                            <path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352" />
                            <path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        </svg>
                    </a>
                </td>
            `;

            cartTableBody.appendChild(row);
        });

        // Quantity Increase & Decrease Event
        document.querySelectorAll(".qty-btn-plus").forEach(btn => {
            btn.addEventListener("click", function() {
                let index = this.getAttribute("data-index");
                if (cartData[index].qty < 10) { // Max Quantity
                    cartData[index].qty++;
                    updateCart();
                }
            });
        });

        document.querySelectorAll(".qty-btn-minus").forEach(btn => {
            btn.addEventListener("click", function() {
                let index = this.getAttribute("data-index");
                if (cartData[index].qty > 1) { // Min 1 Quantity
                    cartData[index].qty--;
                    updateCart();
                }
            });
        });

        // Delete Item Confirmation
        document.querySelectorAll(".remove-item").forEach(btn => {
            btn.addEventListener("click", function(event) {
                event.preventDefault();
                let index = this.getAttribute("data-index");
                let confirmDelete = confirm("Are you sure you want to remove this item?");
                if (confirmDelete) {
                    cartData.splice(index, 1);
                    updateCart();
                }
            });
        });

        document.getElementById("clear-cart").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior
            let confirmClear = confirm("Are you sure you want to clear the entire cart?");
            if (confirmClear) {
                localStorage.removeItem("cart"); // Cart delete from LocalStorage
                location.reload(); // Page reload to update UI
            }
        });


        // Update Cart & Save to LocalStorage
        function updateCart() {
            localStorage.setItem("cart", JSON.stringify(cartData));
            location.reload(); // Page Reload to Reflect Changes
        }
    });
</script>



</html>