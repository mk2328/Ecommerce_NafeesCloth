<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Nafees Cloth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">



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

        <!-- breadcrumb__start -->
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__title">
                            <h1>Login</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="color__blue">
                                    Login
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb__end -->


        <!-- login__section__start -->
        <div class="loginarea  sp_bottom_80 sp_top_80">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center" style="">
                    <div class="col-xl-8 offset-md-2 loginarea__col">
                        <ul class="nav  tab__button__wrap text-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Sign up</button>
                            </li>



                        </ul>
                    </div>


                    <div class="tab-content tab__content__wrapper" id="myTabContent">

                        <div class="tab-pane fade active show d-flex justify-content-center" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                            <div class="col-xl-8 offset-md-2 loginarea__col">
                                <div class="loginarea__wraper">
                                    <div class="loginarea__heading">
                                        <h5 class="login__title">Login</h5>
                                        <p class="login__description">Don't have an account yet? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Sign up for free</a></p>
                                    </div>



                                    <form action="login_process.php" method="POST">
                                        <div class="loginarea__form">
                                            <label class="form__label">Username or email</label>
                                            <input class="common__login__input" type="text" name="username_or_email" placeholder="Your username or email" required>
                                        </div>
                                        <div class="loginarea__form">
                                            <label class="form__label">Password</label>
                                            <input class="common__login__input" type="password" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                            <div class="form__check">
                                                <input type="checkbox" id="login__privacy">
                                                <label for="login__privacy">Remember Me</label>
                                            </div>
                                            <div class="text-end login__form__link">
                                                <a href="#">Forgot your password?</a>
                                            </div>
                                        </div>
                                        <div class="loginarea__button text-center">
                                            <button class="default__button" type="submit">Log In</button>
                                        </div>
                                    </form>


                                    <div class="loginarea__social__option">

                                        <ul class="loginarea__social__btn">
                                            <li><a class="default__button" href="#"><i class="fab fa-facebook-f"></i> facebook</a></li>
                                            <li><a class="default__button" href="#"><i class="fab fa-google"></i> Google</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade d-flex justify-content-center" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                            <div class="col-xl-8 offset-md-2 loginarea__col">
                                <div class="loginarea__wraper">
                                    <div class="loginarea__heading">
                                        <h5 class="login__title">Sign Up</h5>
                                        <p class="login__description">Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Log In</a></p>
                                    </div>



                                    <form action="register.php" method="POST">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="loginarea__form">
                                                    <label class="form__label">Full Name</label>
                                                    <input class="common__login__input" type="text" name="fullname" placeholder="Full Name" required>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="loginarea__form">
                                                    <label class="form__label">Username</label>
                                                    <input class="common__login__input" type="text" name="username" placeholder="Username" required>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="loginarea__form">
                                                    <label class="form__label">Email</label>
                                                    <input class="common__login__input" type="email" name="email" placeholder="Your Email" required>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="loginarea__form">
                                                    <label class="form__label">Phone Number</label>
                                                    <input class="common__login__input" type="tel" name="phone" placeholder="Phone Number" required>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="loginarea__form">
                                                    <label class="form__label">Address</label>
                                                    <input class="common__login__input" type="text" name="address" placeholder="Your Address" required>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="loginarea__form">
                                                    <label class="form__label">Password</label>
                                                    <input class="common__login__input" type="password" name="password" placeholder="Password" required>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="loginarea__form">
                                                    <label class="form__label">Re-Enter Password</label>
                                                    <input class="common__login__input" type="password" name="confirm_password" placeholder="Re-Enter Password" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                            <div class="form__check">
                                                <input type="checkbox" id="regi__privacy" required>
                                                <label for="regi__privacy">Accept the Terms and Privacy Policy</label>
                                            </div>
                                        </div>

                                        <div class="login__button text-center">
                                            <button class="default__button" type="submit">Sign Up</button>
                                        </div>
                                    </form>





                                </div>
                            </div>

                        </div>



                    </div>





                </div>




            </div>
        </div>


        <!-- footer__section__start -->
        <?php
        include("assets/components/footer.php")
        ?>

        </div>
        <!-- footer__section__end -->





    </main>





    <?php
    include("assets/components/scripts.php")
    ?>


</body>

</html>