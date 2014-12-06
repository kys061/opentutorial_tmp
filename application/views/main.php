<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Mobile Specific
    ========================================================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
   
    <style type="text/css">
      .form_control {
        padding-top: 20px;
      }
    </style>

    <!-- Title Tag
    ========================================================================= -->

    <!--Animations -->
    <!--[if lt IE 7 ]><html class="no-js ie ie6" lang="en"><![endif]-->
    <!--[if IE 7 ]><html class="no-js ie ie7" lang="en"><![endif]-->
    <!--[if IE 8 ]><html class="no-js ie ie8" lang="en"><![endif]-->
    <!--[if IE 9 ]><html class="no-js ie ie9" lang="en"><![endif]-->
    <!-- Site Favicon
    ========================================================================= -->
    <link rel="shortcut icon" href="#" title="Favicon" />

    <!-- WP HEAD
    ========================================================================= -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/layerslider.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/style.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/layout.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/font-awesome.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/magnific-popup.css">
    <!-- pe icon 7 filled-->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/pe-icon-7-filled.css">
     <!-- bootstrap -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/grid.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/responsive.css">
    <!-- flexslider -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/flexslider.css">
    <!-- anamations effect-->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/animations.min.css">
    <!-- Portfolio style -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/style-portfolio.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/skin.css">

    <!-- Browser Specical File-->
    <!--[if IE 8]>
    <link href="css/ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->    


</head>
<body>
  <?php

    if($this->session->flashdata('message')){
      ?> 
      <script type="text/javascript">
        alert('<?=$this->session->flashdata('message')?>')
      </script>
      <?php
    }
    ?>
  <div id="page" class="hfeed site">
    <header id="header" class="site-header" role="banner">
      <div id="frr-top-bar" class="top-bar-wrap">
        <div class="container">
          <div class="left-widget-wrap left">
            <div class="phone left">
              <i class="fa fa-phone"></i> (0) 0000 0000
            </div>
          </div>
          <div class="right-widget-wrap right">
            <div class="top-social">
              <ul id="social-area-top">
                <?php if($this->session->userdata('is_login')){ ?>
                  <li><a href="/tmp/auth/logout">LOG OUT</a></li>
                  <?php } else { ?>
                  <li><a href="/tmp/auth/login">Login</a></li>
                  <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="frr-top-nav-wrapper">
        <div class="container">
          <div class="row">
            <div id="logo" class="col-lg-4 col-md-12 col-sm-12">
              <div class="logo-outer">
                <a class="logo" href="index.html" title="Home">
                  <span></span>
                </a>
              </div>
            </div>
            <nav role="navigation">
              <div id="top-nav" class="col-lg-8 col-md-12 col-sm-12">
                <div class="top-nav-wrap right navbg">
                  <a class="mobile-menu-closed" href="#" id="mobile-menu-trigger">
                    <i class="fa fa-bars"></i>
                  </a>
                  <ul class="sf-menu" id="menu">
                    <li class="cl-effect-4">
                      <a href="">
                          <span>Home</span>
                      </a>
                    </li>
                    <li class="cl-effect-4">
                      <a href="/tmp/topic/story"><span>STORY</span></a>
                    </li>
                    <li class="cl-effect-4">
                      <a href=""><span>Portfolio</span></a>
                    </li>                    
                    <li class="dropdown cl-effect-4">
                      <a class="sf-with-ul" href="">
                          <span>Pages</span>
                      </a>
                      <ul>
                        <li>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <a href="">Elements</a>
                        </li>
                        <li>
                            <a href="">403 Page</a>
                        </li>
                        <li>
                            <a href="">404 Page</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>      
                        <li>
                            <a href="">Portfolio</a>
                        </li>                     
                        <li>
                            <a href="">Single Portfolio</a>
                        </li> 
                        <li>
                            <a href="">Pricing Tables</a>
                        </li>                           
                        <li>
                            <a href="">Testimonials</a>
                        </li>                                                                    
                        <li>
                            <a href="">Blog Single</a>
                        </li> 
                        <li>
                            <a href="">FAQ</a>
                        </li>                   
                      </ul>
                    </li>
                    <li class="cl-effect-4">
                      <a href="blog.html"><span>Blog</span></a>
                    </li>
                    <li class="mega-section cl-effect-4">
                      <a href="#"><span>Lists</span></a>
                      <div class="sf-mega">
                        <div class="sf-mega-section">
                          <strong><a href="#">First List</a></strong>
                          <ul class="mega-submenu">
                            <li>
                              <a href="#">About Us</a>
                            </li>
                            <li>
                              <a href="#">Our Team</a>
                            </li>
                            <li>
                              <a href="#">Another Link</a>
                            </li>
                            <li>
                              <a href="#">Testimonials</a>
                            </li>
                            <li>
                              <a href="#">Elements</a>
                            </li>
                            <li>
                              <a href="#">One More Link</a>
                            </li>
                            <li>
                              <a href="#">Jobs</a>
                            </li>
                            <li>
                              <a href="#">Terms</a>
                            </li>
                            <li>
                              <a href="#">Lorem Ipsum</a>
                            </li>
                            <li>
                              <a href="#">Press</a>
                            </li>
                            <li>
                              <a href="#">Lists Groups</a>
                            </li>
                            <li>
                              <a href="#">Home</a>
                            </li>
                            <li>
                              <a href="#">Dolor Sit</a>
                            </li>
                            <li>
                              <a href="#">Contact</a>
                            </li>
                          </ul>
                        </div>                  
                        <div class="sf-mega-section">
                          <strong><a href="#">Second List</a></strong>
                          <ul class="mega-submenu">
                            <li>
                              <a href="#">About Us</a>
                            </li>
                            <li>
                              <a href="#">Our Team</a>
                            </li>
                            <li>
                              <a href="#">Another Link</a>
                            </li>
                            <li>
                              <a href="#">Testimonials</a>
                            </li>
                            <li>
                              <a href="#">Elements</a>
                            </li>
                            <li>
                              <a href="#">One More Link</a>
                            </li>
                            <li>
                              <a href="#">Jobs</a>
                            </li>
                            <li>
                              <a href="#">Terms</a>
                            </li>
                            <li>
                              <a href="#">Lorem Ipsum</a>
                            </li>
                            <li>
                              <a href="#">Press</a>
                            </li>
                            <li>
                              <a href="#">Lists Groups</a>
                            </li>
                            <li>
                              <a href="#">Home</a>
                            </li>
                            <li>
                              <a href="#">Dolor Sit</a>
                            </li>
                            <li>
                              <a href="#">Contact</a>
                            </li>
                          </ul>
                        </div>
                        <div class="sf-mega-section">
                          <strong><a href="#">Third List</a></strong>
                          <ul class="mega-submenu">
                            <li>
                              <a href="#">About Us</a>
                            </li>
                            <li>
                              <a href="#">Our Team</a>
                            </li>
                            <li>
                              <a href="#">Another Link</a>
                            </li>
                            <li>
                              <a href="#">Testimonials</a>
                            </li>
                            <li>
                              <a href="#">Elements</a>
                            </li>
                            <li>
                              <a href="#">One More Link</a>
                            </li>
                            <li>
                              <a href="#">Jobs</a>
                            </li>
                            <li>
                              <a href="#">Terms</a>
                            </li>
                            <li>
                              <a href="#">Lorem Ipsum</a>
                            </li>
                            <li>
                              <a href="#">Press</a>
                            </li>
                            <li>
                              <a href="#">Lists Groups</a>
                            </li>
                            <li>
                              <a href="#">Home</a>
                            </li>
                            <li>
                              <a href="#">Dolor Sit</a>
                            </li>
                            <li>
                              <a href="#">Contact</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                     </li>                    
                    <li class="cl-effect-4">
                      <a href="contact.html"><span>Contact</span></a>
                    </li>
                    <li>
                      <a href="#small-dialog" class="popup-with-zoom-anim"><i class="fa fa-search"></i></a>
                      <form id="small-dialog" class="frr_fade zoom-anim-dialog mfp-hide">
                        <fieldset style="border:0;">
                          <ol style="list-style:none">
                          <li>
                            <span><i class="fa fa-search"></i></span>
                            <input id="search" name="search" type="text" placeholder="" autocomplete="off" required>
                          </li>
                          </ol>
                        </fieldset>
                      </form> <!-- END #small-dialog -->
                    </li>
                  </ul>
                </div>
              </div>
            </nav><!-- end top-nav -->
          </div>
        </div>
      </div>
    </header>
    <div class="content-wrapper">
      <div id="content" class="site-content">
        <section id="slide-show">
          <div id="frr-slider" class="wrapper-coca-slide container-fluid">
          <div class="frr-slider-outer-wrapper row">
            <div class="main_slider">
              <div id="layerslider">
              <!--layer slider starts-->
                <div class="ls-layer" style="slidedirection: top; slidedelay: 6000; durationin: 1500; durationout: 1500; delayout: 500;">
                  <img src="images/zion01.jpeg" class="ls-bg" alt="">
                  <h1 class="ls-s3 ls_large_text_01" style="position: absolute; top:150px; left: 20px; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 1000;">WELCOME TO <br>FORREST</h1>
                  <h4 class="ls-s3 l1-s1 ls_large_text_02" style="position: absolute; top:260px; left: 20px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 1000;">This is what you've been looking for.</h4>
                  <a class="button huge color round ls-s8" href="#" style="position: absolute; top:320px; left: 20px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 1100;">Features</a>
                  
                </div>
                <div class="ls-layer center" style="slidedirection: bottom; slideoutdirection : left; slidedelay: 5000; durationin: 1500; durationout: 1500; delayout: 500;">
                  <img src="images/zion02.jpeg" class="ls-bg" alt="">
                  <h1 class="ls-s3 ls_large_text_01" style="position: absolute; top:217px; left: 400px; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600;">    IS... DIFFERENT.</h1>
                  <h4 class="ls-s3 l1-s1 ls_large_text_02" style="position: absolute; top:296px; left: 400px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 700;">We offer unlimited support with the best team around.</h4>
                  <div class="ls-s3 center-button" style="position: absolute; top:366px; left: 20px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 1100;"><a class="button huge white round ls-s8" href="#">The Team</a></div>
                </div>
                <div class="ls-layer" style="slidedirection: right; slidedelay: 5000; durationin: 1500; durationout: 1500;">
                  <img src="images/zion03.jpeg" class="ls-bg" alt="">
                  <h1 class="ls-s3 ls_large_text_01" style="position: absolute; font-family:Arial; top:192px; left: 0px; slidedirection : right; slideoutdirection : left; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 400;">WE ARE HERE TO <br>HELP YOU</h1>
                  <h4 class="ls-s3 l1-s1 ls_large_text_02" style="position: absolute; top:308px; left: 0px; border-color:#fff; slidedirection : bottom; slideoutdirection : left; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 500;">Don't worry, you won't get lost.</h4>
                  <a class="button huge color round ls-s18" href="#" style="position: absolute; top:368px; left: 0px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 0;">Our Works</a>
                </div>
              </div>
              <!--layer slider ends-->
            </div>
          </div>
          </div><!-- END #frr-slider -->
        </section>
        <section id="frr-our-services" class="white">
          <div class="top-intro scissors">
            <h4 class="section-title">Our Services</h4>
            <p class="section-intro">Veniam adipisicing cupidatat dolor do adipisicing ipsum lorem modo.<br/>
            Reprehenderit minim blandit quam pulvinar vulputate.</p>
          </div>
          <div id="frr-our-services" class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 frr_fade float">
                <article class="post type-post" id="post-68">
                  <div class="featured-image ico-type">
                    <span class="pe-7s-monitor"></span>
                  </div>
                  <header class="entry-header">
                    <h3 class="entry-title">
                      <a rel="bookmark" href="#">Web Design</a>
                    </h3>
                  </header>
                  <div class="entry-excerpt">
                    Lorem ipsum reprehenderit minim in cillum exercitation labore quis.
                  </div>
                  <div class="entry-more">
                    <a href="#" class="frr_readmore">Read More →</a>
                  </div>
                </article>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 frr_fade float">
                <article class="post type-post" id="post-69">
                  <div class="featured-image ico-type">
                    <span class="pe-7s-phone"></span>
                  </div>
                  <header class="entry-header">
                    <h3 class="entry-title">
                      <a rel="bookmark" href="#">App Development</a>
                    </h3>
                  </header>
                  <div class="entry-excerpt">
                    Lorem ipsum reprehenderit minim in cillum exercitation labore quis.
                  </div>
                  <div class="entry-more">
                    <a href="#" class="frr_readmore">Read More →</a>
                  </div>
                </article>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 frr_fade float">
                <article class="post type-post" id="post-70">
                  <div class="featured-image ico-type">
                    <span class="pe-7s-graph2"></span>
                  </div>
                  <header class="entry-header">
                    <h3 class="entry-title">
                      <a rel="bookmark" href="#">Internet Marketing</a>
                    </h3>
                  </header>
                  <div class="entry-excerpt">
                    Lorem ipsum reprehenderit minim in cillum exercitation labore quis.
                  </div>
                  <div class="entry-more">
                    <a href="#" class="frr_readmore">Read More →</a>
                  </div>
                </article>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 frr_fade float">
                <article class="post type-post" id="post-71">
                  <div class="featured-image ico-type">
                    <span class="pe-7s-pen"></span>
                  </div>
                  <header class="entry-header">
                    <h3 class="entry-title">
                      <a rel="bookmark" href="#">Graphic Design</a>
                    </h3>
                  </header>
                  <div class="entry-excerpt">
                    Lorem ipsum reprehenderit minim in cillum exercitation labore quis.
                  </div>
                  <div class="entry-more">
                    <a href="#" class="frr_readmore">Read More →</a>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>        

        <section id="frr-the-team" class="bortb">
          <div class="top-intro users">
            <h4 class="section-title">My Family</h4>
            <p class="section-intro">we are famil,<br> 
            Let you know how happy we are </p>
          </div>
          <div id="frr-the-team-wrap" class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12 frr_fade">
                <article class="post type-post" id="post-72">
                  <div class="featured-image">
                    <a href="#"><img class="img-circle frr-team-img" alt="01 our team" src="images/kang01.jpg"/></a>
                  </div>
                  <header class="entry-header">
                    <h3 class="entry-title">
                      <a rel="bookmark" href="#">Kang</a>
                    </h3>
                  </header>
                  <div class="entry-excerpt">
                    남편
                  </div>
                </article>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 frr_fade">
                <article class="post type-post" id="post-73">
                  <div class="featured-image">
                    <a href="#"><img class="img-circle frr-team-img" alt="02 our team" src="images/IMG_0016.JPG"/></a>
                  </div>
                  <header class="entry-header">
                    <h3 class="entry-title">
                      <a rel="bookmark" href="#">Myang</a>
                    </h3>
                  </header>
                  <div class="entry-excerpt">
                    여보
                  </div>
                </article>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 frr_fade">
                <article class="post type-post" id="post-74">
                  <div class="featured-image">
                    <a href="#"><img class="img-circle frr-team-img" alt="03 our team" src="images/zion04.jpg"/></a>
                  </div>
                  <header class="entry-header">
                    <h3 class="entry-title">
                      <a rel="bookmark" href="#">Zion</a>
                    </h3>
                  </header>
                  <div class="entry-excerpt">
                    아들
                  </div>
                </article>
              </div>
              
            </div>
          </div>
        </section>               
        <section id="frr-three-cols" class="bg-01">
          <div id="frr-three-cols-wrap" class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12 frr_fade">
                <div class="frr-three-item box1">
                  <div class="happily-item-content">
                    <h4 class="frr-three-title">We Deliver</h4>
                    <p>Lorem ipsum reprehenderit minim in cillum exercitation labore quis velit occaecat tempor in nisi ullamco tempor.</p>
                    <!-- <a href="#" class="frr_readmore">Details →</a> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 frr_fade">
                <div class="frr-three-item gleam">
                  <div class="happily-item-content">
                    <h4 class="frr-three-title">Our Passion</h4>
                    <p>Lorem ipsum reprehenderit minim in cillum exercitation labore quis velit occaecat tempor in nisi ullamco tempor.</p>
                    <!-- <a href="#" class="frr_readmore">Details →</a> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 frr_fade">
                <div class="frr-three-item like">
                  <div class="happily-item-content">
                    <h4 class="frr-three-title">Happy Customers</h4>
                    <p>Lorem ipsum reprehenderit minim in cillum exercitation labore quis velit occaecat tempor in nisi ullamco tempor.</p>
                    <!-- <a href="#" class="frr_readmore">Details →</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="frr-featured-projects" class="bortb">
          <div class="top-intro portfolio">
            <h4 class="section-title">Latest Projects</h4>
            <p class="section-intro">Donec vestibulum facilisis turpis, vel ullamcorper dolor sodales id.<br />
            Vivamus nec enim blandit quam pulvinar vulputate.</p>
          </div>
          <div id="frr-featured-projects-wrap" class="container">
            <div class="featuredprojects-carousel responsive">
              <a id="featuredprojects-prev" class="prev" href="#"></a>
              <a id="featuredprojects-next" class="next" href="#"></a>
              <div class="clearfix"></div>
              <div class="row">
                <ul class="featuredprojects la-carousel">
                  <li class="col-lg-4 col-md-6 col-sm-12 frr_fade">
                    <article class="post type-post" id="post-64">
                      <div class="featured-image">
                        <a href="#"><img class="img-rounded" alt="work 01" src="images/work_01.jpg"/></a>
                      </div><!--/.featured-image-->
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Mountain People</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Identity
                      </div>
                    </article>
                  </li>
                  <li class="col-lg-4 col-md-6 col-sm-12 frr_fade">
                    <article class="post type-post" id="post-65">
                      <div class="featured-image">
                        <a href="#"><img class="img-rounded" alt="work 02" src="images/work_02.jpg"/></a>
                      </div><!--/.featured-image-->
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Quinton Elwood</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Web Design & Development
                      </div>
                    </article>
                  </li>
                  <li class="col-lg-4 col-md-6 col-sm-12 frr_fade">
                    <article class="post type-post" id="post-66">
                      <div class="featured-image">
                        <a href="#"><img class="img-rounded" alt="work 03" src="images/work_03.jpg"/></a>
                      </div><!--/.featured-image-->
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Carmen Architecture</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Graphic Design
                      </div>
                    </article>
                  </li>
                  <li class="col-lg-4 col-md-6 col-sm-12 frr_fade">
                    <article class="post type-post" id="post-67">
                      <div class="featured-image">
                        <a href="#"><img class="img-rounded" alt="work 04" src="images/work_04.jpg"/></a>
                      </div><!--/.featured-image-->
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Kendrick Design</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Web Design
                      </div>
                    </article>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>        
        <section id="coca-ignore" class="white">
          <div id="coca-ignore-wrap" class="container">
            <div class="row">
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap monitor">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-76">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Web Design</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap network">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-77">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Web Development</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap pen">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-78">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Graphic Design</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap paper-plane">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-79">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Internet Marketing</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap box2">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-80">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">App Development</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap like">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-81">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Illustration</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap way">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-82">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Strategy Solutions</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap look">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-83">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Search Engine Optimization</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="ignore-item col-lg-4 col-md-6 col-sm-12 frr_fade float">
                <div class="ignore-item-wrap chat">
                  <div class="ignore-item-content">
                    <article class="post type-post" id="post-84">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a rel="bookmark" href="#">Business Consulting</a>
                        </h3>
                      </header>
                      <div class="entry-excerpt">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="start-trial" class="green">
          <div id="colored-bg-wrap" class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="section-whtitle left-effect">
                  Do you want to hear more from us?
                </h3>
                <p class="right-effect">Feel free to get in touch!</p>
                <a href="#" class="frr-button-white frr_fade">Get a quote</a>
              </div>
            </div>
          </div>
        </section>        
        <section id="coca-notebook" class="bortb">
          <div id="frr-screen-wrap" class="container">
            <div class="row">
              <div id="screen-images" class="col-lg-7 col-md-12 col-sm-12 left-effect">
                <img alt="notebook" title="Notebook" src="images/forrest-screens.png"/>
              </div>
              <div id="screen-content" class="col-lg-5 col-md-12 col-sm-12 right-effect">
                <article class="post type-post" id="post-85">
                  <header class="entry-header">
                    <h3 class="entry-title">
                      <a rel="bookmark" href="#">People choose Forrest for a reason.</a>
                    </h3>
                  </header>
                  <div class="entry-excerpt">
                    Want to know what they say about us?<br> It's secret but... scroll down a little.
                    <a href="#" class="frr-button-green">Contact us</a>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
        <section id="frr-customers" class="white">
          <div class="top-intro tweet">
            <h4 class="section-title">Testimonials</h4>
          </div>
          <div id="frr-customers-wrap" class="container">
            <div id="features-slide" class="row">
              <div class="features-slide-wrapper features-slide-flexslider">
                <div class="features-main-slider">
                  <div class="flexslider">
                    <ul class="slides">
                      <li>
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-96">
                              <div class="post-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 01" src="images/work_01.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Lauren Lynn</p>
                                  <p><span>Mountain People</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-97">
                              <div class="post-content">
                                Consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. <a href="#">Ut laboris nisi</a> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 02" src="images/work_02.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Ericka Lenore</p>
                                  <p><span>Quinton Elwood</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-98">
                              <div class="post-content">
                                Consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. <a href="#">Ut laboris nisi</a> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 03" src="images/work_03.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Carmen Architecture</p>
                                  <p><span>Alyce Araceli</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-99">
                              <div class="post-content">
                               Consectetur adipisicing elit, <a href="#">sed do eiusmod</a> tempor incididunt ut laboreet dolore magna aliqua.  Ut laboris nisi enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 01" src="images/work_01.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Kendrick Design</p>
                                  <p><span>Kennell Jager</span></p>
                                </div>
                              </div>
                            </article>
                          </div>                          
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-96">
                              <div class="post-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 01" src="images/work_01.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Lauren Lynn</p>
                                  <p><span>Mountain People</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-97">
                              <div class="post-content">
                                Consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. <a href="#">Ut laboris nisi</a> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 02" src="images/work_02.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Ericka Lenore</p>
                                  <p><span>Quinton Elwood</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-98">
                              <div class="post-content">
                                Consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. <a href="#">Ut laboris nisi</a> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 03" src="images/work_03.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Carmen Architecture</p>
                                  <p><span>Alyce Araceli</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-99">
                              <div class="post-content">
                               Consectetur adipisicing elit, <a href="#">sed do eiusmod</a> tempor incididunt ut laboreet dolore magna aliqua.  Ut laboris nisi enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 01" src="images/work_01.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Kendrick Design</p>
                                  <p><span>Kennell Jager</span></p>
                                </div>
                              </div>
                            </article>
                          </div>                          
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-96">
                              <div class="post-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 01" src="images/work_01.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Lauren Lynn</p>
                                  <p><span>Mountain People</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-97">
                              <div class="post-content">
                                Consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. <a href="#">Ut laboris nisi</a> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 02" src="images/work_02.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Ericka Lenore</p>
                                  <p><span>Quinton Elwood</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-98">
                              <div class="post-content">
                                Consectetur adipisicing elit, sed do eiusmod tempor <b>incididunt ut labore</b> et dolore magna aliqua. <a href="#">Ut laboris nisi</a> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 03" src="images/work_03.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Carmen Architecture</p>
                                  <p><span>Alyce Araceli</span></p>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 frr_fade">
                            <article class="post type-post" id="post-99">
                              <div class="post-content">
                               Consectetur adipisicing elit, <a href="#">sed do eiusmod</a> tempor incididunt ut laboreet dolore magna aliqua.  Ut laboris nisi enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                              <div class="post-meta">
                                <div class="author-img">
                                  <a href="#"><img alt="testimonial 01" src="images/work_01.jpg"/></a>
                                </div>
                                <div class="author-name">
                                  <p>Kendrick Design</p>
                                  <p><span>Kennell Jager</span></p>
                                </div>
                              </div>
                            </article>
                          </div>                          
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div> <!-- End content-wrapper -->
    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="footer-wrapper container">
        <div class="row">
          <div class="sidebar footer-sidebar clearfix">
            <div class="col-lg-3 col-sm-3 col-md-3 widget-1 footer-widget first footer-widget">
              <div id="meta" class="widget widget_meta">
                <h3 class="widget-title">About</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3 widget-1 footer-widget footer-widget">
              <div id="tweet" class="widget widget_tweet">
                <h3 class="widget-title">@Forrest</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                <a href="#">http://t.co/53F0rRe5T </a>
                <p>via <a href="#">@forrest</a></p>
                <p><span><a href="#">2 days ago</a></span></p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3 widget-1 footer-widget footer-widget">
              <div id="newsletter-wrap" class="widget widget_get_touch">
                <h3 class="widget-title">Newsletter</h3>
                <p>If you wish to get updates from Forrest, you can sign up to the newsletter. </p>
                <form novalidate="" class="" name="cc-embedded-subscribe-form" method="post" action="#" id="subscribe_form">
                <input type="text" required placeholder="your@email.com" id="mce-EMAIL" class="subs_input" name="EMAIL" value="">
                <input type="submit" class="subs_submit" value="Submit" name="subscribe">
                </form>
              </div>
            </div>            
            <div class="col-lg-3 col-sm-3 col-md-3 widget-1 footer-widget last footer-widget">
              <div id="get_touch" class="widget widget_get_touch">
                <h3 class="widget-title">Contact</h3>
                <p><span>Address:</span> 11 Sixth Ave, Portsmouth PO6 3PD, United Kingdom</p>
                <p><span>Phone:</span> +44 (845) 345-8765</p>
                <p><span>Email:</span> <a href="mailto:hello@weareforrest.com">hello@weareforrest.com</a></p>
                <ul class="footer-tweet">
                  <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </footer>
    </div> <!-- End #page -->
    <!-- JavaScript -->
    <script src="/tmp/static/lib/forrest/js/jquery-1.11.1.min.js"></script>
    <script src="/tmp/static/lib/forrest/js/jquery.modernizr.js"></script>
    <script src="/tmp/static/lib/forrest/js/ddsmoothmenu.js"></script>
    <script src="/tmp/static/lib/forrest/js/jquery.isotope.min.js"></script>
    <script src="/tmp/static/lib/forrest/js/bootstrap.min.js"></script>
    <!-- Included LayerSlider -->
    <script src="/tmp/static/lib/forrest/js/jquery-easing-1.3.js"></script>
    <script src="/tmp/static/lib/forrest/js/greensock.js"></script>
    <script src="/tmp/static/lib/forrest/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="/tmp/static/lib/forrest/js/layerslider-animate.js"></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var FS = {"animation":"slide","pauseOnHover":"true","controlNav":"true","directionNav":"false","animationDuration":"500","slideshowSpeed":"5000","pauseOnAction":"false"};
    /* ]]> */
    </script>
    <!-- Portfolio -->
    <script type="text/javascript" src="/tmp/static/lib/forrest/js/jquery.flexverticalcenter.js"></script>
    <script type="text/javascript" src="/tmp/static/lib/forrest/js/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="/tmp/static/lib/forrest/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="/tmp/static/lib/forrest/js/app.js"></script>
    <!-- Flexslider -->
    <script src="/tmp/static/lib/forrest/js/jquery.flexslider.js"></script>
    <script src="/tmp/static/lib/forrest/js/jquery.carouFredSel-6.2.1-min.js"></script>
    <script src="/tmp/static/lib/forrest/js/jquery.countTo.js"></script>
    <!-- aminations-->
    <script src="/tmp/static/lib/forrest/js/viewportchecker.js"></script>
    <script src="/tmp/static/lib/forrest/js/animations.min.js"></script>
    <script src="/tmp/static/lib/forrest/js/appear.min.js"></script>
    <!-- countTo -->
    <script src="/tmp/static/lib/forrest/js/jquery.countTo.js"></script>
    <!-- menu -->
    <script src="/tmp/static/lib/forrest/js/hoverIntent.js"></script>
    <script src="/tmp/static/lib/forrest/js/superfish.js"></script>
    <script src="/tmp/static/lib/forrest/js/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="/tmp/static/lib/forrest/js/magnific-trigger.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="/tmp/static/lib/forrest/js/custom.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-36126967-6', 'auto');
      ga('send', 'pageview');

    </script>        
  </body>
</html>
