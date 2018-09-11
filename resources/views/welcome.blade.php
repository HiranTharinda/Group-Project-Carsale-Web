<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | C&S Car Sale</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="{{ asset('js/app.js') }}"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type = "text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type = "text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type = "text/javascript" src="js/smoothscroll.js"></script>
	<script type = "text/javascript" src="js/jquery.cycle2.caption2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
	<!-- <link href="css/styles.css" rel="stylesheet" type="text/css"> -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	</head>

	<body>



    <div class="wrapper">
            <header>

                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                            <a href="#home" style="color: white">C&S CAR SALE</a>
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="#buypage">BUY</a></li>
                                    <li><a href="#sellpage">SELL</a></li>
                                    <li><a href="#leasepage">LEASE</a></li>
                                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                              </ul>
                        </div>
                  </nav>

            </header>
  </div>
  <script type="text/javascript">

       // Menu-toggle button

       $(document).ready(function() {
             $(".menu-icon").on("click", function() {
                   $("nav ul").toggleClass("showing");
             });
       });

       // Scrolling Effect

       $(window).on("scroll", function() {
             if($(window).scrollTop()) {
                   $('nav').addClass('black');
             }

             else {
                   $('nav').removeClass('black');
             }
       })


       </script>


<div class="overlaycas" id="home">
    <img src="img\c&s.png">
</div>
  <div class="cycle-slideshow">

    <img src="img/slide1.png">
    <img src="img/slide2.png">
    <img src="img/slide3.png">
  </div>


	<!-- Photo Slider End

	<!--Buy-->
	<div id = "buy">
<button type="button" class="btn btn-primary btn-lg" style="position:absolute;top: 1650px;
    left: 1320px; height:80px; width:300px; background:#ff3000; font-size: 30px; z-index:0;">BUY VEHICLES</button>
	<!--	<img src="img/buybutton2.png" style="position:absolute">-->
	</div>
	<div id="buypage">
		<img src="img/buy.png" style="z-index:-100">
	</div>
	<!--Buy end-->

	<!--Sell-->
	<div id = "sell">
    <button type="button" class="btn btn-primary btn-lg" style="position:absolute;top: 2800px;
        left: 710px; height:100px; width:500px; background:#ff3000; font-size: 40px;z-index:0;">SELL VEHICLES</button>
	</div>
	<div id ="sellpage">
	<img src="img/sell.png" style="z-index:-100">
	</div>
	<!--Sell end-->

	<!--Leasing-->
	<div id = "lease">
    <button type="button" class="btn btn-primary btn-lg" style="position:absolute;top: 3940px;
        left: 710px; height:100px; width:560px; background:#ff3000; font-size: 30px;z-index:0;">CALCULATE LEASING RATES</button>
	</div>
	<div id="leasepage">
	<img src="img/Leasing.png" style="z-index:-100">
	</div>
	<!--Leasing end-->




	 <!-- Footer -->
		<footer class="page-footer font-small blue pt-4">

		  <!-- Footer Links -->
		  <div class="container-fluid text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

			  <!-- Grid column -->
			  <div class="col-md-6 mt-md-0 mt-3">

				<!-- Content -->
				<h5 class="text-uppercase" style="font-size: 25px">C&S CAR SALE</h5>
				<p>Fullfill all your automobile needs.</p>

			  </div>
			  <!-- Grid column -->

			  <hr class="clearfix w-100 d-md-none pb-3">

			  <!-- Grid column -->
			  <div class="col-md-3 mb-md-0 mb-3">

				<!-- Links -->
				<h5 class="text-uppercase">Our Services</h5>

				<ul class="list-unstyled">
				  <li>
					<a href="#buypage" style="color: #515151">Buy</a>
				  </li>
				  <li>
					<a href="#sellpage" style="color: #515151">Sell</a>
				  </li>
				  <li>
					<a href="#leasepage" style="color: #515151">Lease</a>
				  </li>

				</ul>

			  </div>
			  <!-- Grid column -->

			  <!-- Grid column -->
			  <div class="col-md-3 mb-md-0 mb-3">

				<!-- Links -->
				<h5 class="text-uppercase">Join Us</h5>

				<ul class="list-unstyled">
				  <li>
					<a href="#!" style="color: #515151">Register</a>
				  </li>
				  <li>
					<a href="#!" style="color: #515151">Login</a>
				  </li>

				</ul>

			  </div>
			  <!-- Grid column -->

			</div>
			<!-- Grid row -->

		  </div>
		  <!-- Footer Links -->


		</footer>
		<!-- Footer -->

	<!--Footer end-->

    </body>
</html>
