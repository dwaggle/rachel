<?php

  class homeView{
  
       function __construct(){
	   
	     ?>
			<!DOCTYPE html>
			<html lang="en">

			<head>

			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			  <meta name="description" content="">
			  <meta name="author" content="">

			  <title>Landing Page</title>

			  <!-- Bootstrap core CSS -->
			  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

			  <!-- Custom fonts for this template -->
			  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
			  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
			  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

			  <!-- Custom styles for this template -->
			  <link href="css/landing-page.min.css" rel="stylesheet">

			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
			  <script src="script.js"></script>
			  
			</head>

			<body>

			  <!-- Navigation -->
			  <nav class="navbar navbar-light bg-light static-top">
				<div class="container">
				  <a class="navbar-brand" href="#">Page Flipping</a>
				  <a class="btn btn-primary" href="index.php?flag=register" button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button> </a> 
				
				</div>
			  </nav>

			  <!-- Masthead -->
			  <header class="masthead text-white text-center">
				<div class="overlay"></div>
				<div class="container">
				  <div class="row">
					<div class="col-xl-9 mx-auto">
					  <h1 class="mb-5">Never Overpay for books ever again</h1>
					</div>
					<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
					  <form>
						<div class="form-row">
						  <div class="col-12 col-md-9 mb-2 mb-md-0">
						  
						  <div id="search">
						 <form id="myform">
    						
							 <input type="search" id="books" class="form-control form-control-lg" placeholder="Enter Book Name or ISBN...">
						  </div>
						  <div class="col-12 col-md-3">
							<button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
						 </div>
						  </form>
							
 
							 <!-- 
								<form action="../Model/eBaySearch.html" method="POST">
	
								<div>
									<input type="text" name="query"  placeholder="Enter Book Title or ISBN"  />    
									Under:  $<select name="maxPrice">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
									</select>
									<button type="submit" >Go!</button>
								</div>
							  </form>
							-->
  
  
						  </div>
						</div>
					  </form>
					</div>
				  </div>
				</div>
			  </header>

			  <!-- Icons Grid -->
			  <section class="features-icons bg-light text-center">
				<div class="container">
				  <div class="row">
					<div class="col-lg-4">
					  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
						  <i class="icon-screen-desktop m-auto text-primary"></i>
						</div>
						<h3>Fully Responsive</h3>
						<p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
					  </div>
					</div>
					<div class="col-lg-4">
					  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
						  <i class="icon-layers m-auto text-primary"></i>
						</div>
						<h3>Bootstrap 4 Ready</h3>
						<p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
					  </div>
					</div>
					<div class="col-lg-4">
					  <div class="features-icons-item mx-auto mb-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
						  <i class="icon-check m-auto text-primary"></i>
						</div>
						<h3>Easy to Use</h3>
						<p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
					  </div>
					</div>
				  </div>
				</div>
			  </section>

			  <!-- Image Showcases -->
			  <section class="showcase">
				<div class="container-fluid p-0">
				  <div class="row no-gutters">

					<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/1209397.jpg');"></div>
					<div class="col-lg-6 order-lg-1 my-auto showcase-text">
					  <h2>Coming Soon</h2>
					  <p class="lead mb-0">Desired based calculator on wholsale prices.  </p>
					</div>
				  </div>
				  <div class="row no-gutters">
					<div class="col-lg-6 text-white showcase-img" style="background-image: url('img/book_open_pages_215165.jpg');"></div>
					<div class="col-lg-6 my-auto showcase-text">
					  <h2>Company Goal</h2>
					  <p class="lead mb-0">Our goal is to assist students and readrs of books finding the best prices for their books.  </p>
					</div>
				  </div>
				  <div class="row no-gutters">
					<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/Lib.jpg');"></div>
					<div class="col-lg-6 order-lg-1 my-auto showcase-text">
					  <h2>About the Creators</h2>
					  <p class="lead mb-0">Three college students just trying to pass a class.</p>
					</div>
				  </div>
				</div>
			  </section>

			  <!-- Testimonials -->
			  <section class="testimonials text-center bg-light">
				<div class="container">
				  <h2 class="mb-5">What people are saying...</h2>
				  <div class="row">
					<div class="col-lg-4">
					  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<img class="img-fluid rounded-circle mb-3" src="img/9810.jpg" alt="">
						<h5>― Albert Einstein</h5>
						<p class="font-weight-light mb-0">“Any fool can know. The point is to understand.”</p>
					  </div>
					</div>
					<div class="col-lg-4">
					  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<img class="img-fluid rounded-circle mb-3" src="img/1244.jpg" alt="">
						<h5>― Mark Twain</h5>
						<p class="font-weight-light mb-0">“I was gratified to be able to answer promptly, and I did. I said I didn’t know.”</p>
					  </div>
					</div>
					<div class="col-lg-4">
					  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<img class="img-fluid rounded-circle mb-3" src="img/275648.jpg" alt="">
						<h5>― Socrates</h5>
						<p class="font-weight-light mb-0">“I cannot teach anybody anything. I can only make them think”</p>
					  </div>
					</div>
				  </div>
				</div>
			  </section>

			  <!-- Call to Action -->
			  <section class="call-to-action text-white text-center">
				<div class="overlay"></div>
				<div class="container">
				  <div class="row">
					<div class="col-xl-9 mx-auto">
					  <h2 class="mb-4">Ready to get started? Sign up now!</h2>
					</div>
					<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
					  <form>
						<div class="form-row">
						  <div class="col-12 col-md-9 mb-2 mb-md-0">
							<input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
						  </div>
						  <div class="col-12 col-md-3">
						   
							<!-- <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button> -->
						    <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
						  </div>
						</div>
					  </form>
					</div>
				  </div>
				</div>
			  </section>

  
			  <!-- Bootstrap core JavaScript -->
			  <script src="vendor/jquery/jquery.min.js"></script>
			  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

			</body>

			</html>

<?php
	   
	   }
  
  }


?>
