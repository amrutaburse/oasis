<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/shopee.css">

    <title>Hello, world!</title>
    <style>
      body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  text-decoration: none;
  color: #5cb874;
}

a:hover {
  color: #80c792;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #5cb874;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}
.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}
.back-to-top:hover {
  background: #78c48c;
  color: #fff;
}
.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  background: #fbfbfb;
  font-size: 15px;
  height: 40px;
  padding: 0;
}
#topbar .contact-info a {
  line-height: 0;
  color: #444444;
  transition: 0.3s;
}
#topbar .contact-info a:hover {
  color: #5cb874;
}
#topbar .contact-info i {
  color: #5cb874;
  line-height: 0;
  margin-right: 5px;
}
#topbar .contact-info .phone-icon {
  margin-left: 15px;
}
#topbar .social-links a {
  color: #6f6f6f;
  padding: 4px 12px;
  display: inline-block;
  line-height: 1px;
  transition: 0.3s;
}
#topbar .social-links a:hover {
  color: #5cb874;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: #fff;
  transition: all 0.5s;
  z-index: 997;
  height: 70px;
}
#header.header-scrolled {
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}
#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
}
#header .logo a {
  color: #5cb874;
}
#header .logo img {
  max-height: 40px;
}

.scrolled-offset {
  margin-top: 70px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-size: 15px;
  color: #222222;
  white-space: nowrap;
  transition: 0.3s;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #5cb874;
}
.navbar .getstarted, .navbar .getstarted:focus {
  color: #5cb874;
  padding: 8px 25px;
  margin-left: 30px;
  border-radius: 4px;
  border: 2px solid #5cb874;
  transition: 0.3s;
  font-size: 14px;
}
.navbar .getstarted:hover, .navbar .getstarted:focus:hover {
  background: #5cb874;
  color: #fff;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  text-transform: none;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #5cb874;
}
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #222222;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}
.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(9, 9, 9, 0.9);
  transition: 0.3s;
  z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #222222;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #5cb874;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #5cb874;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}
.jumbotron {
  background-color: #EDDDD4;
}

    </style>
    
  </head>
  <body>

<!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <!-- <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55 -->
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">FASHION</a></h1>

<!--       <h1 class="logo me-auto"><a href="index.html">Green</a></h1>
 -->      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About Us</a></li>
          <li><a class="nav-link scrollto" href="product.php">Products</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="equipment.php">Equipment</a></li>
          
              
          <li><a class="nav-link scrollto" href="contactus.php">Contact Us</a></li>
          <li><a class="getstarted scrollto" href="https://webmail.au.syrahost.com/">Mail Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<br><br>

  <!-- Start Team  -->
  <div class="jumbotron " id="Team" style="height: 620px;" > 
  <!-- Start Team Jumbotron -->
    <div class="container">     <!-- Start Team Container -->
      <img src="images/Alter.jpg" style="height:500px; width:1100px;">
      <br><br>
      <h1>Fashion</h1>
      <p>A custom Shopify site for a lifestyle brand and housewares shop</p>
      
      </div>    <!-- End Team Row-->
    </div>  <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->

  <br><br>

<div class="container">
<div class="row">
 <div class="col-md-4"> 
  <img src="images/front14.webp" class="rounded-circle" alt="Cinque Terre" width="350" height="350"> 
</div>

<div class="col-md-4"> 
  <img src="images/front15.webp" class="rounded-circle" alt="Cinque Terre" width="350" height="350"> 
</div>
 

 <div class="col-md-4"> 
  <img src="images/front8.jpg" class="rounded-circle" alt="Cinque Terre" width="350" height="350"> 
</div>
 
   </div>
   </div> 

   <div class="testimonials-main-section">
    <div class="container">
        <div class="Shop-Fabric-title">
            <h3>Happy Customers</h3>
            <p>Statements from the ones who made Statements in our garments!</p>
        </div>

        <div class="row align-items-center">
            <div class="col-md-12">
                <div id="testimonials-slider" class="owl-carousel owl-theme owl-bottomleft-narrow">
                    <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Preeti Acharya</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>Love the collection with so many varieties in color and prints.</p>
                        </blockquote> 
                    </div>
                    <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Needhi Nair</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>A fabulous range of fabrics. It’s great to choose from so many different types.</p>
                        </blockquote> 
                    </div>
                     <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Krithika Agrawal</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>My favorite place for all ethnic shopping. It is so good to find premium festival wear as well as beautiful casual sarees and kurtis for every day, all in one place.</p>
                        </blockquote> 
                    </div>
                    <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Avni.P</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>I am in love with this boutique in Tirunelveli. Such good staff, great variety.</p>
                        </blockquote> 
                    </div>
                     <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Khushi Shah</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>I love visiting this place. It is such a wonderful shopping experience with Ms.Hema and her entire team. Everybody is very helpful with showing you around and picking sarees.</p>
                        </blockquote> 
                    </div>
                     <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Bhavika Niti</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>I ordered a saree online. I was worried about the quality at first but it turned out even better than I expected. Thank you!</p>
                        </blockquote> 
                    </div>
                    <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Sahasra Reddy</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>I was impressed with the cooperation of the staff and speed of delivery.</p>
                        </blockquote> 
                    </div>
                    <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Kannagi Thevar</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>All my festive sarees are from this boutique. I just love the different types of collections they offer. It is my go-to place.</p>
                        </blockquote> 
                    </div>
                    <div class="item">
                        <div class="testimonial-author">
                            <!-- <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="https://shivanesboutique.com/pub/static/version1644924706/frontend/Smartwave/porto/en_US/images/shop24_author1.jpg" alt=""/></div>-->
                            <p><strong>Pranjali Jani</strong><span>&nbsp</span></p>
                        </div>
                        <blockquote class="testimonial">
                            <p>Exclusive collections and amazing quality. I will definitely order again.</p>
                        </blockquote> 
                    </div>
                </div>
                <script type="text/javascript">
                require([
                    'jquery',
                    'owl.carousel/owl.carousel.min'
                ], function ($) {
                    $("#testimonials-slider").owlCarousel({
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: true,
                        margin: 0,
                        nav: false,
                        dots: true,
                        navRewind: true,
                        animateIn: 'fadeIn',
                        animateOut: 'fadeOut',
                        loop: true,
                        items:3,
                        responsive:{
                            0:{
                                items:1,
                                nav:true
                            },
                            600:{
                                items:1,
                                nav:false
                            },
                            1024:{
                                items:3,
                                nav: false,
                                dots: true,
                            }
                        }
                    });
                });
                </script>

            </div>
          
        </div>
    </div>
</div>
    </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
