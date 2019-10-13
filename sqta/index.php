<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title></title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  		<a class="navbar-brand" href="index.php">MB</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
      			<li class="nav-item active">
        			<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#menu">Menu</a>
      			</li>
      			<li class="nav-item">
       				<a class="nav-link" href="#contact">Contact Us</a>
      			</li>
      			
    		</ul>
  		</div>
	</nav>


		<div class="col-md-12 cover-style">
			<div id="cover-content">
				<h4 style="">NEIGHBOURHOOD BAKERY</h4>
				<br>
				<h1 style="">MAINLAND BAKERY</h1>
				<br>
			</div>
		</div>		


	<div class="container-fluid">
		<div class="row">
			<div id="welcome">
				<h1>Welcome</h1>
				<p>ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
			</div>
		</div>

		<div id="menu" style="text-align: center; font-weight: bold; font-size: 50px;padding-top: 100px; padding-bottom: 50px; ">Menu</div>

		<div class="row animated bounceInUp delay-1s">
			<div class="col-md-8 cakes">
				<a href="cakes.php">Cakes</a>
			</div>
			<div class="col-md-4 biscuits">
				<a href="biscuits.php">Biscuits</a>
			</div>
		</div>
		<br>
		<div class="row animated bounceInUp delay-1s">
			<div class="col-md-4 cookies ">
				<a href="cookies.php">Cookies</a>
			</div>
			<div class="col-md-4 pastries">
				<a href="pastries.php">Pastries</a>
			</div>

			<div class="col-md-4 coffee">
				<a href="coffee.php">Coffee</a>
			</div>
		</div>
		<br>
		<div class="row animated bounceInUp delay-1s ">
			<div class="col-md-6 savory">
				<a href="savoury.php">Savory</a>
			</div>
			<div class="col-md-6 breads">
				<a href="breads.php">Breads</a>
			</div>
		</div>
	</div>


	<div class="container-fluid form" id="contact">
		<div>

			<h3 style="text-align: center; font-size: 50px; font-weight: bold; padding-bottom: 50px;">Contact Us</h3>
			<form action="form.php" method="post">

  			<div class="form-group">
    			<label for="exampleFormControlInput1">Email</label>
    			<input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
  			</div>
  			<div class="form-group">
    			<label for="exampleFormControlTextarea1" >Comments</label>
    			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
  			</div>
  			<input type="Submit" name="submit" class="btn btn-success">
		</form>

		</div>
	</div>
	

<div class="footer">
<footer class="page-footer" style="padding-top:10px; padding-bottom: 10px;  background-color: #d6d6c2; color: #ffffff;" >

  <div class="text-center">© 2019 Copyright:
    <a href="#"> MD.com</a>
  </div>

</footer>
</div>
<!-- Footer -->








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>