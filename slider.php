<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Code a Responsive Website with Twitter Bootstrap 3</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		
	</head>
	<body>					
			<div class="carousel slide" id="myCarousel">
			
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
					<li data-slide-to="1" data-target="#myCarousel"></li>
					<li data-slide-to="2" data-target="#myCarousel"></li>
				</ol>
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active" id="slide1">
						<div class="carousel-caption">
							<h4>РЕСТАВРАЦИЯ</h4>
							<p>Learn how to build your first responsive website with the brand new Twitter Bootstrap 3!</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide2">
						<div class="carousel-caption">
							<h4>ЖИВОПИСЬ</h4>
							<p>PSD to HTML5 &amp; CSS3 is a popular Udemy course that has helped thousands of aspiring web designers launch their web design career.</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide3">
						<div class="carousel-caption">
							<h4>ИЛЛЮСТРАЦИЯ</h4>
							<p>Learn how to buy a perfect domain name and hosting package, and get your website live on the web with ease.</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide4">
						<div class="carousel-caption">
							<h4>ДИЗАЙН</h4>
							<p>Learn how to buy a perfect domain name and hosting package, and get your website live on the web with ease.</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
				</div><!-- carousel-inner -->
				
				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
			
			</div><!-- end myCarousel -->
			
	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="js/script.js"></script>
	
	</body>
</html>

