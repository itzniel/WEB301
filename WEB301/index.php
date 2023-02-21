<!doctype html>
<html lang="en">
	<head>
		<title>The Game of Soccer</title>
		<style>
		<?php include('css/Main.css'); ?> 
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/script.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
	<body>
		<div id="overlay">
			<div id="lightboxWrapper">
				<div id="lightbox">
					<div id="close">X</div>
		<div id="lightboxContent"></div>
				</div>
			</div>
		</div>
		<div id="container">
			<div id="nav"><?php include('includes/Header.php'); ?> </div>
			
			
			<section class="row">
				<div class="col-12">
				
				<h1>The Game of Soccer</h2>
				<picture>
 				<source srcset="images/liverpool.jpeg" media="(max-width: 639px)">
 				<img src="images/liverpool.jpeg" alt="major">
				</picture>
				<em>For more click</em>    <button id ="lightboxBtn">Click me</button>
				</div>
			</section>
			<section class="row">	
			<div class="col-6">Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</div>
			<div class="col-6">Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</div>
			</section>
			<section class="row">	
			<div class="col-4">What is Lorem Ipsum?
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
			when an unknown printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the leap into 
			electronic typesetting, remaining essentially unchanged. It was popularised in 
			the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
			and more recently with desktop publishing
			software like Aldus PageMaker including versions of Lorem Ipsum.
			</div>
			<div class="col-4">Why do we use it?
			It is a long established fact that a reader will be 
			distracted by the readable content of a page when
			looking at its layout. The point of using Lorem 
			Ipsum is that it has a more-or-less normal distribution 
			of letters, as opposed to using 'Content here, content here'
			, making it look like readable English. Many desktop publishing 
			packages and web page editors now use Lorem Ipsum as their default model text,
			 and a search for 'lorem ipsum' will uncover many web sites still in their 
			 infancy. Various versions have evolved over the years, sometimes by accident,
			  sometimes on purpose (injected humour and the like).
			</div>
			<div class="col-4">
			Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


			</div>
			</section>
		  <footer>
		<div id="footer"><?php include('includes/Footer.php'); ?> </div>
		</footer>
			
		</div>
		
	</body>

</html>