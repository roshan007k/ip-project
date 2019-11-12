<?php

$conn =new mysqli("localhost","root","","freebook");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Session start//
session_start();
if (isset($_POST['add'])) {
	
}

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>FreeBook.in</title>
	<link rel="stylesheet" type="text/css" href="effects.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body style="background-color: #ffffff !important;">
	<header>
		<h3 class="header1"><a href="home.php" style="text-decoration: none;color: #11053c;"><span style="color: #f8f6fe;">Free</span>Book</a></h3>
		<nav>
				<ul class="nav-links">
					<li><a class="nav-link" href="home.php">Home</a></li>
					<li><a class="nav-link" href="about.php">About</a></li>
					<li><a class="nav-link" href="products.php">Discussions</a></li>
				</ul>
			</nav>
			<div class="cart">
				<a href="cart.php"><img src="cart.svg" alt="cart"></a>
			</div>
			<div class="logout">
				<a href="header.php" style="text-decoration: none;margin-right: 50px; color: white !important;">Logout</a>
			</div>


	</header>
	<div class="home1">
		<div class="tag1">
			<h2 style="color: black;"><strong>Love to learn?</strong></h2>
			<h4 style="color: black;">Want books for free?</h4>
			<button class="button3"><a href="about.php"style="text-decoration: none;">Click here to know more</button></a>
		</div>
	</div>

<form action="" method="post">
<div class="card1" style="font-family: 'Montserrat', sans-serif !important; background-color: #ffffff !important;">
	<div class="card">
		<div class="image">
		   <img src="book2.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK1</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
		<br>
		<span class="prize"><strong>Rs-300</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id" value="id">
		</div>
	</div>
<!--cards -->
	<div class="card">

		<div class="image">
		   <img src="home2.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK2</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
		<br>
		<span class="prize"><strong>Rs-350</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add"  style="margin-left: 10px;">>Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
<!--cards -->


	<div class="card">

		<div class="image">
		   <img src="book3.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK3</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-270</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
<!--cards -->


	<div class="card">

		<div class="image">
		   <img src="hom1.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK4</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-300</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;" >Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
<!--cards -->


	<div class="card">

		<div class="image">
		   <img src="suyog.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK5</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-320</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
<!--cards -->

	<div class="card">

		<div class="image">
		   <img src="dalit.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK6</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-500</strong></span><br>
		<button>Read More...</button>
		<button  type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
<!--cards -->

	<div class="card">

		<div class="image">
		   <img src="book12.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK7</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-450</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add"  style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
<!--cards -->


	<div class="card">

		<div class="image">
		   <img src="book14.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK8</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-360</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
<!--cards -->


	<div class="card">

		<div class="image">
		   <img src="ashu.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK9</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-280</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
	<div class="card">

		<div class="image">
		   <img src="dalit.jpg"alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK10</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-390</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
	<div class="card">

		<div class="image">
		   <img src="book14.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK11</h1>
		</div>
		<div class="des">
		 <p>You can Add Description Here...</p>
		 		<br>
		<span class="prize"><strong>Rs-250</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		</div>
	</div>
	<div class="card">

		<div class="image">
		   <img src="ashu.jpg" alt="My Sample image">
		</div>
		<div class="title">
		 <h1>
		BOOK12</h1>
		</div>
		<div class="des">
		 <p>
		You can Add Description Here...</p>
				<br>
		<span class="prize"><strong>Rs-520</strong></span><br>
		<button>Read More...</button>
		<button type="submit" name="add" style="margin-left: 10px;">Add to cart</button>
		<input type="hidden" name="id">
		</div>
	</div>
</div>
</form>
</div>

	<footer style="position: relative;">&copy;Copyright Inc.Terms and Conditions<br/>
</footer>

</body>
</html>