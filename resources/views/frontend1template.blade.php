
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logistics &mdash; Colorlib Website Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
  <link rel="stylesheet" href="{{ asset ('frontend1/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset ('frontend1/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend1/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend1/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend1/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend1/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend1/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend1/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend1/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset ('frontend1/css/style.css') }}">

</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            <!-- <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">V Delivery</a></h1> -->
        <img class="img-responsive2" src="frontend1/images/logo3.png">

          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="#">Home</a></li>
                <li class="has-children">
                  <a href="services.html">Services</a>
                  <ul class="dropdown">
                    <li><a href="#">Air Freight</a></li>
                    <li><a href="#">Ocean Freight</a></li>
                    <li><a href="#">Ground Shipping</a></li>
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#">Storage</a></li>
                  </ul>
                </li>
                <li><a href="{{route('list')}}">Locations</a></li>
                <li><a href="#">Price Calculator</a></li>
                <li><a href="{{route('order')}}">Schdeule Order</a></li>
                <li><a href="#">Guide</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

        </div>

      </div>
    </div>

  </header>

  

  <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


          <h2 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Send-It-Today Get-It-Tomorrow</h2><br>
          <i class="icon-heart" aria-hidden="true"></i>
          <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

        </div>
      </div>
    </div>
  </div>  

  <div class="container">
    <div class="row align-items-center no-gutters align-items-stretch overlap-section">
      <div class="col-md-4">
        <div class="feature-1 pricing h-100 text-center">
          <div class="icon">
            <span class="icon-dollar"></span>
          </div>
          <h2 class="my-4 heading">Best Prices</h2>
         <!--  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p> -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="free-quote bg-dark h-100">
          <h2 class="my-4 heading  text-center">Get Free Quote</h2>
          <form method="post">
            <div class="form-group">
              <label for="fq_name">Name</label>
              <input type="text" class="form-control btn-block" id="fq_name" name="fq_name" placeholder="Enter Name">
            </div>
            <div class="form-group mb-4">
              <label for="fq_email">Email</label>
              <input type="text" class="form-control btn-block" id="fq_email" name="fq_email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Get Quote">  
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-3 pricing h-100 text-center">
          <div class="icon">
            <span class="icon-phone"></span>
          </div>
          <h2 class="my-4 heading">24/7 Support</h2>
         <!--  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p> -->
        </div>
      </div>
    </div>
  </div>


<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">What We Offer</h2>
            <p class="color-black-opacity-5">Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
              <div>
                <h3>Air Freight</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
              <div>
                <h3>Ocean Freight</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3>Ground Shipping</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

   <div>
    @yield('content')
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Products</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Features</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
          <form action="#" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>

      </div>
    </div>
  </footer>
</div>

<script src="{{ asset ('frontend1/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/jquery-ui.js') }}"></script>
<script src="{{ asset ('frontend1/js/popper.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset ('frontend1/js/aos.js') }}"></script>

<script src="{{ asset ('frontend1/js/main.js') }}"></script>

</body>
</html>