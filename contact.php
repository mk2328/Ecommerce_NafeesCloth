<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact | Nafees Cloth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <?php
    include("assets/components/links.php");

    ?>

    <style>
        .success-message {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>




</head>


<body>


    <main class="main_wrapper body__overlay overflow__hidden">



        <!-- header section start -->
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
                            <h1>Contact</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="color__blue">
                                    Contact
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb__end -->


        <!-- contact__section__start -->
        <div class="contactarea sp_top_80 sp_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="contactarea__single">
                            <h3>Email Address</h3>
                            <p>example@example.com <br>example2@example.com</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="contactarea__single">
                            <h3>Phone Number</h3>
                            <p>+0123-456789 <br>+9879-654321</p>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="contactarea__single">
                            <h3>Office Address </h3>
                            <p>Your Street Address, City Name, State, <br>ZIP Code, Country.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- contact__section__end -->

        <!-- contactarea__form__area start -->
        <div class="contactarea__form sp_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contactarea__form__area">
                            <h4 class="contactarea__form__title">Send Message</h4>
                            <!-- Success & Error Messages -->
                            <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
                                <p class="success-message">✅ Your message has been sent successfully!</p>
                            <?php } ?>

                            <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
                                <p class="error-message">❌ Something went wrong. Please try again.</p>
                            <?php } ?>

                            <form id="contact-form" class="contact-form" action="contact_process.php" method="post">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="contactarea__form__input">
                                            <input type="text" placeholder="Enter your name" class="" name="con_name" id="con_name" required>

                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="contactarea__form__input">
                                            <input type="text" placeholder="Enter email address" class="" name="con_email" id="con_email" required>

                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="contactarea__form__input">
                                            <input type="text" placeholder="Enter phone number" class="" name="con_phone" id="con_phone" required>

                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="contactarea__form__input">
                                            <input type="text" placeholder="Enter subject" class="" name="con_subject" id="con_subject" required>

                                        </div>

                                    </div>

                                    <div class="col-xl-12">
                                        <div class="contactarea__form__input">
                                            <textarea placeholder="Enter message" class="custom-textarea" name="con_message" id="con_message" required></textarea>

                                        </div>

                                    </div>

                                    <div class="col-xl-12">
                                        <div class="contactarea__form__button">
                                            <button type="submit" value="submit" class="default__button" name="submit">Submit</button>

                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- contactarea__form__area end -->

        <!-- contact__map__start -->
        <div class="contact__map sp_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact__map__inner">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29210.20802773719!2d90.43968000000001!3d23.773183999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1723315989605!5m2!1sen!2sbd" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact__map__end -->







        <!-- footer__section__start -->
        <?php
        include("assets/components/footer.php")
        ?>
        <!-- footer__section__end -->







    </main>


    <?php
    include("assets/components/scripts.php")
    ?>

   


</body>



</html>