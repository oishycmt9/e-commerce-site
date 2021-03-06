@extends('front-end.master')
@section('content')
    <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | About Us :: w3layouts</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
        />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta tag Keywords -->

        <!-- Custom-Files -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Bootstrap css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Main css -->
        <link rel="stylesheet" href="css/fontawesome-all.css">
        <!-- Font-Awesome-Icons-CSS -->
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!-- pop-up-box -->
        <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
        <!-- menu style -->
        <!-- //Custom-Files -->

        <!-- web fonts -->
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
              rel="stylesheet">
        <!-- //web fonts -->

    </head>

    <body>

    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                        <i>|</i>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <!-- about -->
    <div class="welcome py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>A</span>bout
                <span>U</span>s</h3>
            <!-- //tittle heading -->
            <div class="row">
                <div class="col-lg-6 welcome-left">
                    <h3>Welcome</h3>
                    <h4 class="my-sm-3 my-2">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis hendrerit
                        libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</p>
                </div>
                <div class="col-lg-6 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
                    <img src="{{asset('/')}}/front-end/images/ab.jpg" class="img-fluid" alt=" ">
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->

    <!-- testimonials -->
    <div class="testimonials py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center text-white mb-lg-5 mb-sm-4 mb-3">
                <span>O</span>ur
                <span>C</span>ustomers
                <span>S</span>ays</h3>
            <!-- tittle heading -->
            <div class="row gallery-index">
                <div class="col-sm-6 med-testi-grid">
                    <div class="med-testi test-tooltip rounded p-4">
                        <p>"sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="row med-testi-left my-5">
                        <div class="col-lg-2 col-3 w3ls-med-testi-img">
                            <img src="{{asset('/')}}/front-end/images/user.jpg" alt=" " class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-lg-10 col-9 med-testi-txt">
                            <h4 class="font-weight-bold mb-lg-1 mb-2">Tyson</h4>
                            <p>fames ac turpis</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 med-testi-grid">
                    <div class="med-testi test-tooltip rounded p-4">
                        <p>"sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="row med-testi-left my-5">
                        <div class="col-lg-2 col-3 w3ls-med-testi-img">
                            <img src="{{asset('/')}}/front-end/images/user.jpg" alt=" " class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-lg-10 col-9 med-testi-txt">
                            <h4 class="font-weight-bold mb-lg-1 mb-2">Alejandra</h4>
                            <p>fames ac turpis</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 med-testi-grid">
                    <div class="med-testi test-tooltip rounded p-4">
                        <p>"sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="row med-testi-left mt-sm-5 my-5">
                        <div class="col-lg-2 col-3 w3ls-med-testi-img">
                            <img src="{{asset('/')}}/front-end/images/user.jpg" alt=" " class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-lg-10 col-9 med-testi-txt">
                            <h4 class="font-weight-bold mb-lg-1 mb-2">Charles</h4>
                            <p>fames ac turpis</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 med-testi-grid">
                    <div class="med-testi test-tooltip rounded p-4">
                        <p>"sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="row med-testi-left mt-5">
                        <div class="col-lg-2 col-3 w3ls-med-testi-img">
                            <img src="{{asset('/')}}/front-end/images/user.jpg" alt=" " class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-lg-10 col-9 med-testi-txt">
                            <h4 class="font-weight-bold mb-lg-1 mb-2">Jessie</h4>
                            <p>fames ac turpis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->

    <!-- footer -->

    <!-- //footer -->
    <!-- copyright -->

    <!-- //copyright -->

    <!-- js-files -->
    <!-- jquery -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //jquery -->

    <!-- nav smooth scroll -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //nav smooth scroll -->

    <!-- popup modal (for location)-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //popup modal (for location)-->

    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

        paypals.minicarts.cart.on('checkout', function (evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }

            if (total < 3) {
                alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                evt.preventDefault();
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- password-script -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- smoothscroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- //js-files -->

    </body>

    </html>
@endsection
