<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/cb.css">

	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
	<!-- font awesome 4 cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!------- font awesome---------------------->
	<script src="https://kit.fontawesome.com/332a215f17.js" cross origin="anonymous"></script>

	<title>Cascade Built</title>
</head>
<body>
	<section class="header">
		 <?php include_once('inc/header.php');?>
		<div class="text-box">
			<h1>Modern Innovative Architecture</h1>
			<p>We collect and analyze information about your general usage of the website, products, services, and courses.<br> We might track your usage patterns to see what features of the website you commonly use.</p>
			<a href="about" class="hero-btn">Know More</a>
		</div>

	</section>

	<!-----Service Section----->
	
	<section class="service">
		<h1>Services We Offer</h1>
		<p>To increase productivity and cost effectiveness on the market.
		</p>
		<div class="row">
			<div class="service-col">
				<h3>Architechtural & Engineering Consultancy</h3>
				<p>It provides professional planning, design, construction management, and budgeting services for capital construction projects including new structures.</p>
			</div>

			<div class="service-col">
				<h3>Civil Construction & Infrastructure Development</h3>
				<p>public and private physical structures such as roads, railways, bridges, tunnels, water supply etc.</p>
			</div>

			<div class="service-col">
				<h3>BIM & MEP Consultancy</h3>
				<p>BIM(Building Information Modelling) & MEP(Mechanical Electrical Plumbing)Management.</p>
			</div>
		</div>

	</section>

	<!-----------Project---------------->
	<section class="project">
		<h1>Our Projects</h1>
		<p>To increase productivity and cost effectiveness on the market.
		</p>
		<div class="row">
			<div class="project-col">
				<img src="image/p1.jpg">
				<div class="layer">
					<h3>Commercial</h3>
				</div>
			</div>

			<div class="project-col">
				<img src="image/p1.jpg">
				<div class="layer">
					<h3>Residential</h3>
				</div>
			</div>

			<div class="project-col">
				<img src="image/p1.jpg">
				<div class="layer">
					<h3>Industrial</h3>
				</div>
			</div>

		</div>

	</section>
<!-----------Features------------>

<section class="features">
	<h1>Some Features that Made us Unique</h1>
	<p>Who are in extremely love with eco friendly system.</p>
	<div class="row">
		<div class="features-col">
			<img src="image/hos.jpg">
			<h3>Professional Service</h3>
			<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
		</div>

		<div class="features-col">
			<img src="image/techskill.jpg">
			<h3>Technical Skills</h3>
			<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
			
		</div>

		<div class="features-col">
			<img src="image/staff.jpg">
			<h3>Experts Staff</h3>
			<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
		</div>

	</div>
</section>

<!----------testimonials----------->

<section class="testimonials">
	<h1>What Our Clients Says</h1>
	<p>Who are in extremely love with eco friendly system.</p>

	<div class="row">
		<div class="testimonials-col">
			<img src="image/clients1.jpg">
			<div>
				<p>We collect and analyze information about your general usage of the website, products, services, and courses.<br> We might track your usage patterns to see what features of the website you commonly use.</p>
				<h3>Miss.Suzy</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>

			</div>

		</div>

		<div class="testimonials-col">
			<img src="image/c2.jpg">
			<div>
				<p>We collect and analyze information about your general usage of the website, products, services, and courses.<br> We might track your usage patterns to see what features of the website you commonly use.</p>
				<h3>Mr.Alexis</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>

			</div>

		</div>

	</div>
</section>


<!------- Call to Action----------------->

<section class="cta">
	<h1>We collect and analyze information about <br>your general usage of the website</h1>
	<a href="contact" class="hero-btn">CONATACT US</a>
	
</section>



<!-------Footer---------------->

<section class="footer">
	<h4>About Us</h4>
	<p>We collect and analyze information about your general usage of the website, products, services, and courses.<br> We might track your usage patterns to see what features of the website you commonly use.</p>

	<div class="icons">
		<i class="fa fa-facebook"></i>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-instagram"></i>
		<i class="fa fa-whatsapp"></i>
	</div>
	<p>Made with<i class="fa fa-heart-o"></i> by Cascade Built</p>
</section>













<!----JavaScript for Toggle Menu------>
	<script>
		var navLinks = document.getElementById("navLinks");

		function showMenu(){
			navLinks.style.right = "0";
		}
		function hideMenu(){
			navLinks.style.right = "-200px";
		}

	</script>

</body>
</html>