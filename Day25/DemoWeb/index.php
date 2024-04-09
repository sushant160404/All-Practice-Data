<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DemoWeb</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BIKE GURU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/bike1.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="Images/bike2.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="Images/bike3.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- about us -->
  <section class="my-5">
  	<div class="py-5">
  		<h2 class="text-center">
  			About Us
  		</h2>
  	</div>
  	<div class="container-fluid">
  		<div class="row">
  	<div class="col-lg-6 col-md-6 col-12">
  		<img src="Images/bike4.jpg" class="img-fluid aboutimg">
  	</div>
  	<div class="col-lg-6 col-md-6 col-12">
  		<h1 class="display-4">I am Bike Guru!</h1>
  		<p class="py-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
  		<a href="about.php" class="btn btn-success">Check Me</a>
  	</div>		
  </div>
  	</div>
  	
  </section>

  <section class="my-5">
  	<div class="py-5">
  		<h2 class="text-center">
  			Our Services
  		</h2>
  	</div>
  	<div  class="container-fluid">
  		<div class="row">
  			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
  					<img class="card-img-top" src="Images/service1.jpg" alt="Card image">
  					<div class="card-body">
  						<h4 class="card-title">Engine Oil Service</h4>
  						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo.</p>
  						<a href="#" class="btn btn-primary">See Profile</a>
  					</div>
  				</div>
  			</div>

  			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
  					<img class="card-img-top" src="Images/service2.jpg" alt="Card image">
  					<div class="card-body">
  						<h4 class="card-title">Engine Cleaning Service</h4>
  						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo.</p>
  						<a href="#" class="btn btn-primary">See Profile</a>
  					</div>
  				</div>
  			</div>

  			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
  					<img class="card-img-top" src="Images/service3.jpg" alt="Card image">
  					<div class="card-body">
  						<h4 class="card-title">Bike Cleaning Service</h4>
  						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo.</p>
  						<a href="#" class="btn btn-primary">See Profile</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>

  <section class="my-5">
  	<div class="py-5">
  		<h2 class="text-center">
  			Galary
  		</h2>
  	</div>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  				<img src="Images/galary1.jpg" class="img-fluid pb-4">
  			</div>
  		</div>
  		
  	</div>
  </section>


  <section class="my-5">
  	<div class="py-5">
  		<h2 class="text-center">
  			Contact Me
  		</h2>
  	</div>
  	<div class="w-50 mx-auto">
  		<form action="userinfo.php" method="post">
  			<div class="form-group">
  				<label>User :-</label>
  				<input type="text" name="user" class="form-control">
  			</div>
  			<div class="form-group">
  				<label>Email Id. :-</label>
  				<input type="text" name="email" class="form-control">
  			</div>
  			<div class="form-group">
  				<label>Mobile No. :-</label>
  				<input type="text" name="mobile" class="form-control">
  			</div>
  			<div class="form-group">
  				<label>Comment :-</label>
  				<textarea class="form-control" type="text" name="comment">
  				</textarea>
  			</div>
  			<button type="submit" class="my-2 btn btn-success">Submit</button>
  			<!-- <div class="text-center">
  				<button type="submit" class="my-2 btn btn-success">Submit</button>
  			</div> -->
  		</form>
  	</div>
  </section>



<footer class="p-2 bg-dark text-white text-center">
	<div>@sushant_develop's</div>
</footer>

  

    






























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>