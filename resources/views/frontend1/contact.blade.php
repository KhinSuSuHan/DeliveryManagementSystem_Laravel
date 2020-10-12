@extends('frontend1template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Miya Delivery Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
  <link rel="stylesheet" href="{{ asset('frontend1/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend1/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend1/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend1/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend1/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend1/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend1/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend1/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend1/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend1/css/style.css') }}">
</head>

<body>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mb-5">
          <form action="#" class="p-5 bg-white">
            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label>
                <input type="text" id="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control">
              </div>
            </div>
            <div class="row form-group">
          <div class="col-md-12">
                <label class="text-black" for="email">Email</label> 
                <input type="email" id="email" class="form-control">
              </div>
            </div>
           <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label> 
                <input type="subject" id="subject" class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5">

          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Sule Square, sule Pagoda Road, Yangon</p>
            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#"> 09-421128653,54,55</a></p>
            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">miyadms@gmail.com</a></p>
          </div>

          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">More Info</h3>
            <p>Our Miya Delivery Service was established in the year of 2002. At 41st Street Botahtaung Township our very first office was located and our Decade-Old mail busi- ness was born ...read more</p>
            <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>

 
</div>

<script src="{{ asset('frontend1/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend1/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('frontend1/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend1/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend1/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend1/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('frontend1/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('frontend1/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend1/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('frontend1/js/aos.js') }}"></script>

<script src="{{ asset('frontend1/js/main.js') }}"></script>

</body>
</html>

@endsection
