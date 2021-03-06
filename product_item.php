<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item - Blingbling</title>


	<?php include "parts/meta.php"; ?>
</head>
<body class="body1">
	
	<?php include "parts/navbar.php"; ?>

	<?php include "parts/title.php"; ?>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


	<div class="container content">
		<div class="row">
            <div class="col-sm">
            	<div class="slideshow">
            		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
	  					<ol class="carousel-indicators">
	    					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  					</ol>
	 					
	 					 <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" src="img/34.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="img/56.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="img/34.jpg" alt="Third slide">
						    </div>
	  					</div>
					 	
					 	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
						</a>
	  					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
					    </a>
					</div>
				</div>
            </div>
            
            <div class="col-sm">
                <div class="col-sm">
                    <h1 class="itemTitle">Item <?= $_GET['id'] ?></h1>
                    <div class="description">
                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <p class="price">Price:  $40</p>
                    <Button class="form-button addtocart detailButton">
                    	<span>Add to cart</span>
                    </Button>
                </div>
            </div>
        </div>
	</div>

	<?php include "parts/footer.php"; ?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>