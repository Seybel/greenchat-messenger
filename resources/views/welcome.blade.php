<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Greenchat - Messaging Platform for Farmers and Consumers</title>

    <!-- ==============================================
		FAVICON
		=============================================== -->
    <link rel="shortcut icon" href="{{ asset('img/master/favicon.ico') }}">

    <!-- ==============================================
		CSS
        =============================================== -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home-custom-3.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animation.aos.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/css/all.min.css') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            z-index: 100;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #fff;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
        @endif
    </div>

    <!--SLIDER START-->
    <div class="main-slider">
        <div class="slides">
            <div class="slides-nav">
                <nav class="slides-nav__nav">
                    <!-- <button class="slides-nav__prev js-prev">Prev</button>
                    <button class="slides-nav__next js-next">Next</button> -->
                </nav>
            </div>

            <div class="slide is-active">
                <div class="slide-content">
                    <figure class="slide-figure">
                        <div class="slide-img" style="background-image: url(img/images/accordion-slider1.jpg)"></div>
                    </figure>
                    <header class="slide-header">
                        <div class="slide-caption">
                            <div class="title-line">
                                <h2>Finest Products</h2>
                            </div>
                            <div class="slide-description">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                        </div>
                    </header>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <figure class="slide-figure">
                        <div class="slide-img" style="background-image: url(img/images/accordion-slider2.jpg)"></div>
                    </figure>
                    <header class="slide-header">
                        <div class="slide-caption">
                            <div class="title-line">
                                <h2>Best Farming</h2>
                            </div>
                            <div class="slide-description">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                        </div>
                    </header>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <figure class="slide-figure">
                        <div class="slide-img" style="background-image: url(img/images/accordion-slider3.jpg)"></div>
                    </figure>
                    <header class="slide-header">
                        <div class="slide-caption">
                            <div class="title-line">
                                <h2>Precision Agriculture</h2>
                            </div>
                            <div class="slide-description">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                        </div>
                    </header>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <figure class="slide-figure">
                        <div class="slide-img" style="background-image: url(img/images/accordion-slider4.jpg)"></div>
                    </figure>
                    <header class="slide-header">
                        <div class="slide-caption">
                            <div class="title-line">
                                <h2>Cultivating Ideas</h2>
                            </div>
                            <div class="slide-description">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <!--SLIDER END-->

    <!--HOME ABOUT START-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ag-about">
                        <h5>About GreenChat</h5>
                        <h2>Bridging the communication gap between farmers and consumers.</h2>
                        <p>Helping farmers to emerging markets maximize their profits. We provide an easy to use platform for customers to chat online directly with agents, traders and/farmers to deliver financing, farm products, and customized advice with radical efficiency and scalability.
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                        </p>
                        <hr class="divider">
                        <div class="span-bullets">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="left-list">
                                        <p>Matching consumers with farmers </p>
                                        <p>Reducing costs and focus</p>
                                        <p>Bringing ingenuity to market</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="right-list">
                                        <p>Improving human health</p>
                                        <p>Integrating digital agriculture</p>
                                        <p>Supports Chatting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ag-icon-list">
                            <div class="ag-inner-box-left">
                                <figure class="ag-icon"><img src="img/master/svg-icon-1.svg" alt=""></figure>
                                <h4>Customer Oriented</h4>
                                <p>Same as saying through shrinking from toil and pain.</p>
                            </div>
                            <div class="ag-inner-box-right">
                                <figure class="ag-icon"><img src="img/master/svg-icon-3.svg" alt=""></figure>
                                <h4>Nature Sustainable</h4>
                                <p>Same as saying through shrinking from toil and pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 space-break">
                    <figure class="ag-about-pic"><img src="img/images/img15.jpg" alt=""></figure>
                </div>
            </div>
        </div>

        <!--SERVICES SECTION START-->
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Services</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="services-box">
                        <figure class="services-icon"><img src="img/master/seeding.svg" alt=""></figure>
                        <h3>Natural Products</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                    </div>
                </div>
                <div class="col-lg-4 tablet-view">
                    <div class="services-box">
                        <figure class="services-icon"><img src="img/master/wheat.svg" alt=""></figure>
                        <h3>Pure Wheats</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                    </div>
                </div>
                <div class="col-lg-4 tablet-view">
                    <div class="services-box">
                        <figure class="services-icon"><img src="img/master/cow-face.svg" alt=""></figure>
                        <h3>Native Cattle</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                    </div>
                </div>
                <div class="col-lg-4 desktop-view">
                    <div class="services-box">
                        <figure class="services-icon"><img src="img/master/tractor-view.svg" alt=""></figure>
                        <h3>Land Preparation</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                    </div>
                </div>
                <div class="col-lg-4 desktop-view">
                    <div class="services-box">
                        <figure class="services-icon"><img src="img/master/fruit.svg" alt=""></figure>
                        <h3>Natural Fruits</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                    </div>
                </div>
                <div class="col-lg-4 desktop-view">
                    <div class="services-box">
                        <figure class="services-icon"><img src="img/master/broccoli.svg" alt=""></figure>
                        <h3>Fresh Vegetables</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--SERVICES SECTION END-->

        <div class="container-fluid ag-full-bg">
            <div class="righ-panel">
                <div class="ag-panel-content">
                    <div class="panel-title">
                        <h5>WHY US</h5>
                        <h2>A bright nature of decision</h2>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <hr class="divider">
                    <div class="span-counter">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="inner-counter">
                                    <figure class="counter-icon"><img src="img/master/cow-face.svg" alt=""></figure>
                                    <div class="counter-statistics">
                                        <div class="counter">121</div>
                                        <p>CULTIVATED YARDS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="inner-counter">
                                    <figure class="counter-icon"><img src="img/master/wheat.svg" alt=""></figure>
                                    <div class="counter-statistics">
                                        <div class="counter">843</div>
                                        <p>CULTIVATED YARDS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="inner-counter">
                                    <figure class="counter-icon"><img src="img/master/seeding.svg" alt=""></figure>
                                    <div class="counter-statistics">
                                        <div class="counter">291</div>
                                        <p>CULTIVATED YARDS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid ag-vector-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="testimonial-slider" class="owl-carousel">
                                <div class="testimonial">
                                    <div class="client-avatar">
                                        <img src="img/images/avatar1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-author">
                                        <h3>Laura</h3>
                                        <p>Education</p>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum
                                            molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="client-avatar">
                                        <img src="img/images/avatar2.jpg" alt="">
                                    </div>
                                    <div class="testimonial-author">
                                        <h3>Roger</h3>
                                        <p>Medicine</p>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum
                                            molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="client-avatar">
                                        <img src="img/images/avatar3.jpg" alt="">
                                    </div>
                                    <div class="testimonial-author">
                                        <h3>Gustavo</h3>
                                        <p>Web Developer</p>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum
                                            molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    </section>

    <!--FOOTER START-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <figure class="footer-logo"><img src="img/master/logo.png" alt=""></figure>
                    <div class="footer-info">
                        <p> 8273 Somewhere in the globe, Universe, 33276 Milky Way.</p>
                        <p>+ 0414 4444 4040</p>
                        <p>info@greenchat.com</p>
                    </div>
                </div>
                <div class="col-lg-4 footer-col">
                    <h4>POPULAR SITES</h4>
                    <div class="footer-nav">
                        <div class="footer-nav-left">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="/faq">Faq</a></li>
                            </ul>
                        </div>
                        <div class="footer-nav-right">
                            <ul>
                                <li><a href="#">Privacy &amp; Policy</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 footer-col">
                    <h4>NEWSLETTER</h4>
                    <div class="newsletter">
                        <p>Suscribe to our newsletter and get the lastest scoop right to your inbox!</p>
                        <form action="#" method="post" name="sign-up">
                            <input type="email" class="input" id="email" name="email" placeholder="Your email address" required>
                            <input type="submit" class="button" id="submit" value="SIGN UP">
                        </form>
                        <p class="cursive">Your email is safe with us, we don't spam.</p>
                    </div>
                </div>
            </div>
            <hr class="divider">
            <div class="bottom-footer">
                <div class="copytight">
                    <p>© 2019 GreenChat <span><em>...Bridging your communication gap</em></span></p>
                </div>
                <div class="social-footer">
                    <div class="social-items"><a href="#">
                            <div class="icon-fa"><i class="fab fa-facebook-f"></i></div>
                        </a></div>
                    <div class="social-items"><a href="#">
                            <div class="icon-fa"><i class="fab fa-twitter"></i></div>
                        </a></div>
                    <div class="social-items"><a href="#">
                            <div class="icon-fa"><i class="fab fa-instagram"></i></div>
                        </a></div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOTER END-->

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->

    <!-- ==============================================
	JAVASCRIPTS
	=============================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agroland.js"></script>
    <script src="js/util.js"></script>
    <script src="js/swipe-content.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider-caraousel.js"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-101241150-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>