<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/nasarna-live/nasarna/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 15:18:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>ZECAF Website</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header" class="wpo-site-header wpo-header-style-3">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-sm-7 col-12">
                        <div class="contact-intro">
                            <ul>
                                <li><i class="fi flaticon-call"></i>Phone Number</li>
                                <li><i class="fi flaticon-envelope"></i> info@zecaf.org.ng</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-6 col-sm-5 col-12">
                        <div class="contact-info">
                            <ul>
                                {{--<li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Sign Up</a></li>--}}
                                <li><a class="theme-btn" href="">Donate Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end topbar -->


        {{--nav bar here--}}
        @include('includes.nav')

    </header>
    <!-- end of header -->


    <!-- wpo-about-area start -->
    <div class="wpo-about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 colsm-12">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span>About Us</span>
                            <h2>Who We Are</h2>
                        </div>
                        <p>Zazzau Emirate Community Advancement Foundation (ZECAF) is a Not For Profit and Non-Political Organisation established by the Late Emir of Zazzau, Alhaji Shehu Idris CFR in 2002, with the sole aims and objectives of ensuring unity within the Emirate, harnessing and channeling the vast human resource of the Emirate towards socio-economic development.</p>
                        <div class="btns">
                            <a href="#" class="theme-btn" tabindex="0">Contact Us</a>
                            {{-- <ul>
                                 <li class="video-holder">
                                     <a href="https://www.youtube.com/embed/iSbzh0r9IV4?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"></a>
                                 </li>
                                 <li class="video-text">
                                     <a href="https://www.youtube.com/embed/iSbzh0r9IV4?autoplay=1" class="video-btn" data-type="iframe" tabindex="0">
                                         Watch Our Video
                                     </a>

                                 </li>
                             </ul>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 colsm-12">
                    <div class="wpo-about-img-3">
                        <img src="assets/images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-about-area end -->



    <script>
        let input = document.getElementById('input');

        const handleSearch = (e) => {
            let inputValue = e.target.value.toLowerCase();
            let array = document.getElementsByClassName('item')

            for (let i = 0; i < array.length; i++) {
                let image = array[i]
                let caption = image.getAttribute('data-caption').toLowerCase()
                let title = image.getAttribute('title').toLowerCase()
                caption.includes(inputValue) || title.includes(inputValue)? image.style.display = 'inline' : image.style.display = 'none'
            }
        }
        input.addEventListener('keyup', handleSearch);

        window.addEventListener("load", function () {
            baguetteBox.run(".gallery", {
                captions: true,
                buttons: "auto",
                animation: "fadeIn",
            });
        })
    </script>



    <!-- wpo-team-area start -->
    <div class="wpo-team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>OUR GOVERNING BODY</span>
                        <h2>Governing Body of The Zazzau Emirate</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($governing_bodies as $governing_body)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 custom-grid">
                        <div class="wpo-team-wrap">
                            <div class="wpo-team-img">
                                <img src="images/{{$governing_body->image}}" alt="">
                            </div>
                            <div class="wpo-team-content">
                                <div class="wpo-team-text-sub">
                                    <h2>{{$governing_body->name}}</h2>
                                    <span>{{$governing_body->position}}</span>
                                    {{--  <ul>
                                          <li><a href="#"><i class="ti-facebook"></i></a></li>
                                          <li><a href="#"><i class="ti-twitter"></i></a></li>
                                          <li><a href="#"><i class="ti-google"></i></a></li>
                                          <li><a href="#"><i class="ti-instagram"></i></a></li>
                                      </ul>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Governing Body</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- wpo-team-area end -->


    <!-- world area start -->
    <div class="wpo-world-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-world-section">
                        <h2>Lets Chenge The World With Humanity</h2>
                        <a href="#"><img src="assets/images/team/1.png" alt="">Become A Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- world area end -->


    <div class="wpo-ne-footer">
        <!-- start wpo-news-letter-section -->
        <section class="wpo-news-letter-section">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="wpo-newsletter">
                            <h3>Follow us For ferther information</h3>
                            <div class="wpo-newsletter-form">
                                <form>
                                    <div>
                                        <input type="text" placeholder="Enter Your Email" class="form-control">
                                        <button type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-news-letter-section -->
        <!-- start wpo-site-footer -->
        @include('includes.footer')
        <!-- end wpo-site-footer -->
    </div>
</div>
<!-- end of page-wrapper -->
<!-- All JavaScript files
================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins for this template -->
<script src="assets/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/nasarna-live/nasarna/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 15:18:37 GMT -->
</html>
