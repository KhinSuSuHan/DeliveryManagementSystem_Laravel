
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
                    <li><a href="#">Express</a></li>
                    <li><a href="#">Box</a></li>
                  </ul>
                </li>
                <li><a href="{{route('list')}}">Locations</a></li>
                <li><a href="{{route('pricecalculator')}}">Price Calculator</a></li>
                <li><a href="{{route('order')}}">Schdeule Order</a></li>
                <li><a href="#">Guide</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
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
           <span class="icon-dollar"> 2000-2500 MMK</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="free-quote bg-dark h-100">
          <h2 class="my-4 heading  text-center">Check your Order?</h2>
          <form method="post">
            <div class="form-group">
              <label for="fq_name">Name</label>
              <input type="text" class="form-control btn-block" id="fq_name" name="fq_name" placeholder="Enter Name">
            </div>
            <div class="form-group mb-4">
              <label for="fq_email">Order ID</label>
              <input type="text" class="form-control btn-block" id="fq_email" name="fq_email" placeholder="Enter Order ID">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Check My Order">  
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
          <p>Call Center: 09-421128653,54,55</p>
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
                <h3>Right Time & Location</h3>
                <p>We are committed to bring your targeted message to the right audience at the right time and location.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
              <div>
                <h3>Unique Operation</h3>
                <p>With our unique operation model and over 16 years of working experience, we can target different range of customers beyond your expectation.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3>Door to Door Service</h3>
                <p> Door2Door is very convenient both for businesses as well as individuals wanting to  deliver from their homes.</p>
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
   
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12"> 
            <p> 
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            </p>

      </div>
    </div>
  </footer>
<!-- </div> -->

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