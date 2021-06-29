<!DOCTYPE html>
<html>
<head>
	<title>UrDreams</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">UrDreams</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactus">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex">
      	<ul class="navbar-nav ml-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit" >Search</button>
      </form>
      <ul class="navbar-nav ml-auto">
      	<li class="nav-item">
          <a class="nav-link" href="login.php">Signup</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
       </ul>
    </div>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="images/la.jpg" alt="Los Angeles" width="1100" height="520">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <h5>"LA is always so much fun!!!"-Vinay pandey<h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/dc.jpg" alt="Chicago" width="1100" height="520">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <h5>"Thank you, Chicago for such memories!"-Riya solanki</h5>
        </div>
      </div>
    
      <div class="carousel-item">
        <img src="images/ny.jpg" alt="New York" width="1100" height="520">
        <div class="carousel-caption">
          <h3 >New York</h3>
          <h5 >“I fell in love. His name is New York.”-Tanmay rajput</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/bd.jpg" alt="" width="1100" height="520">
        <div class="carousel-caption">
          <h3>Kerala</h3>
          <h5>"The time spent with family is incomparable indeed!!"-Pratibha yadav</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/ba.jpg" alt="" width="1100" height="520">
        <div class="carousel-caption">
          <h3>The Himalayas</h3>
          <h5>"It is always great to be in lap of the Lord Shiva."-Jay Sharma</h5>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<section class="my-5">
	<div class="py-5">
		<b><h2 class="text-center">About us</h2><b>
		<hr>
	</div>

	<div class="container-fluid">
	  	<div class="row">
	  	    <div class="col-lg-6 col-md-6 col-12">
				<img src="images/img1.jpg" class="img-fluid aboutimg" >
	    	</div>
	    	<div class="col-lg-6 col-md-6 col-12">
				<em><h3 class="display-4">'UrDreams' makes your dreams come true.</h3></em>
				<small><h5 class="py-4">
					“Travel is the main thing you purchase that makes you more extravagant”. We, at ‘UrDreams’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly. We have been moving excellent encounters for a considerable length of time through our cutting edge planned occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life, brimming with extraordinary travel encounters.
				</h5></small>
				<a href="about.php" class="btn btn-success" class="bannerbtn" target="_blank">Check out more</a>
	    	</div>
		</div>
	</div>	
</section>

<section class="my-5">
	<div class="py-5">
		<b><h2 class="text-center" id="services">Our Services</h2><b>
			<hr>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img src="images/img2.jpg" class="card-img-top" alt="Card images" style="height: 50vh">
					<div class="card-body">
						<em><h4 class="card-title">Passport and Visa</h4></em>	
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img src="images/g13.jpg" class="card-img-top" alt="Card images" style="height: 50vh">
					<div class="card-body">
						<em><h4 class="card-title">Air, Water and Land travel support</h4>	</em>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img src="images/img3.jpg" class="card-img-top" alt="Card images" style="height: 50vh">
					<div class="card-body">
						<em><h4 class="card-title">Vehicle Rentals</h4> </em>	
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img src="images/img4.jpg" class="card-img-top" alt="Card images" style="height: 50vh">
					<div class="card-body">
						<em><h4 class="card-title">Hotel Stays</h4> </em>	
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img src="images/g12.jpg" class="card-img-top" alt="Card images" style="height: 50vh">
					<div class="card-body">
						<em><h4 class="card-title">Travel Insurance</h4> </em>	
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img src="images/img5.jpg" class="card-img-top" alt="Card images" style="height: 50vh">
					<div class="card-body">
						<em><h4 class="card-title">Tour Guide</h4></em>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<b><h2 class="text-center">Gallery</h2><b>
			<hr>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/g1.jpg" class="img-fluid pb-4" title="group in a bus,Hawaii" >

			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/g10.jpg" class="img-fluid pb-4" title="couple on hill,London" >

			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/g3.jpg" class="img-fluid pb-4" title="couple enjoying in Goa,India" >

			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/g9.jpg" class="img-fluid pb-4" title="Enjoying sunset,Paris" >

			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/g5.jpg" class="img-fluid pb-4" title="Solo trek in the Himalayas,India">

			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/g7.jpg" class="img-fluid pb-4" title="Bonfire days with family,South Africa" >

			</div>
		</div>
	</div>
</section>


<section class="my-5">
	<div class="py-5">
		<b><h2 class="text-center">Frequently asked Questions</h2><b>
			<hr>
	</div>
	<div class="container-fluid">
	  	<div class="row">
	  	    <div class="col-lg-6 col-md-6 col-12">
				<em><h5>WHY SHOULD I USE A TRAVEL AGENT TO BOOK A VACATION?</h5></em>
				<small><p>A travel agent takes all of the headache out of planning a trip and handles virtually all aspects of your travel, at absolutely no cost to you. The combined experience of the team and the feedback from our thousands of travelers provides an invaluable resource to the traveler planning an important trip.

In recent years, the top travel vendors have empowered and trained the agency community to be even more effective and efficient go-betweens.</p></small>
	    	</div>

	    	<div class="col-lg-6 col-md-6 col-12">
	    		<em><h5>CAN YOU WORK WITHIN A CERTAIN BUDGET?</h5></em>
	    		<small><p>Yes, we work within any and all realistic budgets, and an honest sharing of ideas and goals helps us immensely when making recommendations and suggested edits to travel plans.</p></small>
	    	</div>

	    	<div class="col-lg-6 col-md-6 col-12">
	    		<em><h5>DOES IT COST MONEY TO GET A QUOTE?</h5></em>
	    		<small><p>No, there is no fee for our vacation planning services as the travel vendors involved recognize our value and compensate us from the gross amount paid (what you would have paid even without our assistance). For those complicated international itineraries that require custom crafting and significant involvement of our international on-location partners, we do request an intent-to-travel deposit to begin the process. This deposit is applied to the reservations that are made on your behalf.</p></small>
	    	</div>

	    	<div class="col-lg-6 col-md-6 col-12">
	    		<em><h5>WHERE CAN I FIND MY ITINERARY ONCE MY TRIP IS BOOKED?</h5></em>
	    		<small><p>Your itinerary as booked by Professional Travel a Direct Travel Company is available on our website with your specific reservation code as the login. Since we are directly connected to vendors’ inventory systems (airlines, cruise lines, hotels, cars, rail, etc.), you will also be able to retrieve your information on their unique client sites, many of which offer a wealth of information to help you prepare for the trip ahead.</p></small>
	    	</div>

	    	<div class="col-lg-6 col-md-6 col-12">
	    		<em><h5>DO I NEED TRAVEL INSURANCE?</h5></em>
	    		<small><p>Travel insurance is available and recommended to protect your travel investment. Many trips, such as tours and cruises, involve non-refundable funds paid months in advance. Travel insurance protects you from losing this investment. Perhaps even more important is the ‘during travel’ coverage and assistance that comes with the top-flight insurance companies we carry.

Trip interruption due to illness or unforeseen circumstances can be very expensive, and medical care abroad is often not covered by domestic insurance plans. Also, an increasing number of countries require proof of medical insurance for travelers entering their country.</p></small>
	    	</div>

	    	<div class="col-lg-6 col-md-6 col-12">
	    		<em><h5>HOW DO I CANCEL A TRIP?</h5></em>
	    		<small><p>Call us right away. If it’s after normal business hours, please contact the next involved travel supplier (airline, hotel, tour operator, cruise line) to cancel any reservations you will not be able to use. If you purchased travel insurance, please contact the insurance company’s 24-hour line to start the cancellation process and ensure your maximum refund.</p></small>
	    	</div>

	    	<div class="col-lg-6 col-md-6 col-12">
	    		<em><h5>HOW DO I KNOW I CAN TRUST THIS TRAVEL VENDOR?</h5></em>
	    		<small><p>Professional Travel a Direct Travel Company is extremely cautious when it comes to choosing our business partners and vendors. This vetting of travel suppliers and support of the ‘good ones’ over the past 50+ years has given us preferred access to the world’s top trusted suppliers. In turn, they trust us to represent and care for the reputations they have earned over the years and to deliver the same high standard of care to our mutual clients.

As the trusted travel management provider for nearly 300 corporate accounts and thousands of business travelers, we are dedicated to delivering top level service every time. We choose to work only with known, reliable providers in order to maintain a high standard of quality service.</p></small>
	    	</div>

	    	<div class="col-lg-6 col-md-6 col-12">
	    		<em><h5>WHICH COUNTRY CAN I CHOOSE TO TRAVEL?</h5></em>
	    		<small><p>We provide our clients trip to almost all the country of the world. Even if that place is not directly reachble
	    		then we provide them the transports from a destined location to their selected place. We cover Asian,African,American,Europian
	    	countries. Hence we thereby are the largest service provider for our tourists.</p></small>
	    	</div>
		</div>
	</div>


</section>


<section class="my-5">
	<div class="py-5">
		<b><h2 class="text-center" id="contactus">Contact us</h2><b>
			<hr> 
	</div>
	
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post" autocomplete="off">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter your name here">
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter your mail id here">
			</div>

			<div class="form-group">
				<label>Mobile No.:</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter your mobile no. here">
			</div>

			<div class="form-group">
				<label>Comment:</label>
				<textarea class="form-control"  rows="7" name="comment" placeholder="Enter your comment here."></textarea>
			</div>

			<button type="submit" class="btn btn-success" onsubmit ="run()">Submit</button>
		</form>
	</div>

</section>
<script type="text/javascript">
	function run(){
		alert ("Your data is sent");
	}
</script>


<footer>
	<p class="p-3 bg-dark text-white text-center">@UrDreams.com</p>
</footer>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>