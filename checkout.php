<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout | Nafees Cloth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <?php include("assets/components/links.php") ?>
    <?php include("assets/connection/connection.php") ?>

    <style>
        input {
            color: black !important
        }
    </style>

</head>

<body>

    <main class="main_wrapper body__overlay overflow__hidden">

        <?php include("assets/components/header.php") ?>

        <!-- breadcrumb__start -->
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__title">
                            <h1>Checkout</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="color__blue">
                                    Checkout
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb__end -->

        <!-- checkout__section__start -->
        <div class="checkoutarea sp_bottom_100 sp_top_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="checkoutarea__billing">
                            <div class="checkoutarea__billing__heading">
                                <h2>Billing Details</h2>
                            </div>
                            <div class="checkoutarea__billing__form">
                                <form action="place_order.php" method="POST" id="checkoutForm">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="checkoutarea__inputbox">
                                                <label for="first__name">First Name *</label>
                                                <input type="text" id="first__name" name="first_name" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="checkoutarea__inputbox">
                                                <label for="last__name">Last Name *</label>
                                                <input type="text" id="last__name" name="last_name" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="checkoutarea__inputbox">
                                                <label for="email__address">Email *</label>
                                                <input type="email" id="email__address" name="email" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="checkoutarea__inputbox">
                                                <label for="phone__number">Phone *</label>
                                                <input type="text" id="phone__number" name="phone" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="checkoutarea__inputbox">
                                                <label for="address__info">Address *</label>
                                                <input type="text" id="address__info" name="address" placeholder="Your Address" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="checkoutarea__inputbox">
                                                <label for="city">City *</label>
                                                <input type="text" id="city" name="city" placeholder="Your City" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="checkoutarea__inputbox">
                                                <label for="post__code">Zip Code *</label>
                                                <input type="text" id="post__code" name="zip_code" placeholder="Post Code/Zip Code" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="checkoutarea__inputbox">
                                                <label for="order__note">Order Notes</label>
                                                <input type="text" id="order__note" name="order_notes" placeholder="Order Notes (Optional)">
                                            </div>
                                        </div>
                                        <input type="hidden" name="total_price" id="total_price">
                                    </div>
                                    <div class="checkoutarea__payment__input__box">
                                        <button type="submit" class="default__button" id="placeOrderBtn">
                                            Place Order
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="checkoutarea__payment__wraper">
                            <div class="checkoutarea__total">
                                <h3>Your order</h3>
                                <form action="#" method="post">
                                    <div class="checkoutarea__table__wraper" style="overflow-x:auto;">
                                        <table class="checkoutarea__table">
                                            <thead>
                                                <tr class="checkoutarea__item">
                                                    <td class="checkoutarea__ctg__type"> Product</td>
                                                    <td class="checkoutarea__cgt__des"> Total</td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                            <div class="checkoutarea__payment clearfix">
                                <div class="checkoutarea__payment__toggle">
                                    <form action="#">
                                        <div class="checkoutarea__payment__total">

                                            <div class="checkoutarea__payment__type">
                                                <input type="radio" id="pay-toggle03" name="pay" checked readonly>
                                                <label for="pay-toggle03">Cash on Delivery</label>
                                            </div>

                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout__section__end-->

        <!-- footer__section__start -->
        <?php include("assets/components/footer.php") ?>
        <!-- footer__section__end -->

    </main>

    <!-- JS here -->
    <?php include("assets/components/scripts.php") ?>

</body>

<script>
    function updateCheckoutSummary() {
        var cart = JSON.parse(localStorage.getItem("cart")) || [];
        var orderTableBody = document.querySelector(".checkoutarea__table tbody");

        if (cart.length === 0) {
            orderTableBody.innerHTML = `<tr><td colspan="2" style="text-align:center;">Your cart is empty.</td></tr>`;
            document.getElementById('total_price').value = 0;
            return;
        }

        var subtotal = 0;
        var cartItemsHTML = '';

        cart.forEach(function(item) {
            var itemTotal = parseFloat(item.price) * parseInt(item.qty);
            subtotal += itemTotal;

            cartItemsHTML += `
                <tr class="checkoutarea__item prd-name">
                    <td class="checkoutarea__ctg__type" style="display: flex; align-items: center; gap: 10px;">
                        <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                        ${item.name} × <span>${item.qty}</span>
                    </td>   
                    <td class="checkoutarea__cgt__des">Rs ${itemTotal.toFixed(2)}</td>
                </tr>
            `;
        });

        var shippingCost = 0; // Free Shipping
        var total = subtotal + shippingCost;

        orderTableBody.innerHTML = `
            ${cartItemsHTML}
            <tr class="checkoutarea__item">
                <td class="checkoutarea__ctg__type">Subtotal</td>
                <td class="checkoutarea__cgt__des">Rs ${subtotal.toFixed(2)}</td>
            </tr>
            <tr class="checkoutarea__item">
                <td class="checkoutarea__item">Shipping</td>
                <td class="checkoutarea__cgt__des ship-opt">
                    <div class="checkoutarea__shipp">
                        <label for="pay-toggle2">Rs ${shippingCost} (Free Shipping)</label>
                    </div>
                </td>
            </tr>
            <tr class="checkoutarea__item">
                <td class="checkoutarea__itemcrt-total">Total</td>
                <td class="checkoutarea__cgt__des prc-total">Rs ${total.toFixed(2)}</td>
            </tr>
        `;

        document.getElementById('total_price').value = total;
    }

    document.addEventListener("DOMContentLoaded", updateCheckoutSummary);
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("checkoutForm");
        const placeOrderBtn = document.getElementById("placeOrderBtn");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent normal form submission

            // Disable button and show spinner
            placeOrderBtn.disabled = true;
            placeOrderBtn.innerHTML = `
                <span class="spinner" style="
                    display: inline-block; 
                    width: 18px; 
                    height: 18px; 
                    border: 3px solid #fff; 
                    border-top: 3px solid #3498db; 
                    border-radius: 50%; 
                    animation: spin 1s linear infinite; 
                    margin-right: 8px;
                "></span> Placing Order, Please Wait...
            `;

            // Get cart from LocalStorage
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            // Prepare form data + cart data
            let formData = new FormData(this);
            formData.append("cart", JSON.stringify(cart)); // Append cart JSON string

            // Send AJAX request
            fetch("place_order.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        localStorage.removeItem("cart"); // Clear cart on success
                        window.location.href = "order-confirmation.php?order_id=" + data.order_id;
                    } else {
                        alert("Order failed: " + data.error);
                        // Restore button state
                        placeOrderBtn.disabled = false;
                        placeOrderBtn.innerHTML = "Place Order";
                    }
                })
                .catch(error => {
                    alert("An error occurred: " + error);
                    // Restore button state
                    placeOrderBtn.disabled = false;
                    placeOrderBtn.innerHTML = "Place Order";
                });
        });
    });

    // Spinner CSS animation
    const style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = `
    @keyframes spin {
      0% { transform: rotate(0deg);}
      100% { transform: rotate(360deg);}
    }
    `;
    document.head.appendChild(style);
</script>

</html>
