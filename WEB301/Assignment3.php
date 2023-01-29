<!doctype html>
<html lang="en">
	<head>
		<title>The Game of Soccer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			#container { max-width: 960px; margin: 0 auto; display: block; }
			#nav { width: 99.6%; height: 75px; background-color: rgb(170, 40, 40); }
			#main { width: 99.6%; height: 500px; background-image: url(https://images.pexels.com/photos/1884574/pexels-photo-1884574.jpeg); object-fit: cover; background-size:cover; }
			#column1 { width: 49.6%; height: 200px; background-color: rgba(134, 132, 122, 0.688); display: inline-block; }
			#column2 { width: 49.6%; height: 200px; background-color: rgb(147, 22, 22); ; display: inline-block; }	
				
			
			@media screen and (max-width: 639px) {
				#container { width: 100%; }
				#main { width: 100%; height: 300px;  }
				#column1 { width: 100%; height: 150px; background-color: rgba(134, 132, 122, 0.688); }
				#column2 { width: 100%; height: 150px; background-color:rgb(147, 22, 22);  }		
			}
		</style>
	</head>
	<body>
 
		<div id="container">
			<div id="nav"><?php include('includes/Header.php'); ?> </div>
			<div id="main"></div>
			<div id="column1"></div>
      <div id="column2"></div>
			
		</div>
	</body>
</html>