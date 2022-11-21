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
                                <li><a class="theme-btn" href="donate.html">Donate Now</a></li>
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
    <!-- .wpo-breadcumb-area start -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Latest News</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->
    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="wpo-wpo-blog-content clearfix">
                        <div class="post">
                            <div class="entry-media">
                                <img src="images/{{$blog_single->blog_image}}" alt>
                            </div>
                            <ul class="entry-meta">
                                <li><a href="#"><i class="ti-calendar"></i> {{ \Carbon\Carbon::parse($blog_single->created_at)->isoFormat('MMM Do YYYY')}}</a></li>
                            </ul>
                            <h2>{{$blog_single->blog_title}}</h2>
                            <p>{{$blog_single->blog_paragraph}}</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="wpo-blog-sidebar">
                        <div class="widget search-widget">
                            <h3>Search Here</h3>
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search Post..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Recent posts</h3>
                            <div class="posts">
                                @forelse($recent_posts as $recent_post)
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="images/{{$recent_post->blog_image}}" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">{{$recent_post->blog_title}}</a></h4>
                                        <span class="date">{{ \Carbon\Carbon::parse($recent_post->created_at)->isoFormat('MMM Do YYYY')}}</span>
                                    </div>
                                </div>
                                    @empty
                                <p>No Recent Posts</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->
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


<!-- Mirrored from wpocean.com/html/tf/nasarna-live/nasarna/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 15:41:09 GMT -->
</html>
