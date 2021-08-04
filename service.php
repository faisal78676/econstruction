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
	<section class="sub-header">
		<?php include_once('inc/header.php');?>
		<h1>Our Service</h1>
	</section>

	<!-----------Services-------------------->

	<section class="service">
		<h1>Services We Offer</h1>
		<p>To increase productivity and cost effectiveness on the market.
		</p>
		<div class="row">
			<div class="service-col">
				<h3>Project Management Consultancy</h3>
				<p>Project Management Consultancy deals with various factors such as Scheduling, Cost Budgeting, Risk Identifying, Monitoring & Controlling.</p>
			</div>

			<div class="service-col">
				<h3>Structural consultancy</h3>
				<p>Structural Consultancy is the leading name in providing architectural, structural and civil engineering consultancy services. We deal in all RCC, Steel and PSC designing projects.</p>
			</div>

			<div class="service-col">
				<h3>Interior Consultancy</h3>
				<p>Interior designers make project specifications for things like floors, millwork, moldings, lighting, and countertops.</p>
			</div>
		</div>


		<div class="row">
			<div class="service-col">
				<h3>Contract Management Consultancy</h3>
				<p>Contract Management is about managing that relationship, and those risks, to ensure that both parties get the result they originally wanted. Everything such as cash flow, revenue, obligations management, and all other areas around this, flow from this simple premise.</p>
			</div>

			<div class="service-col">
				<h3>BIM Consultancy</h3>
				<p>BIM (Building Information Modelling) is a process based solution to collaborative approach towards project coordination that is increasingly becoming indispensable for the AEC (Architecture, Engineering & Construction) industry.</p>
			</div>

			<div class="service-col">
				<h3>MEP Consultancy</h3>
				<p>MEP consultancy identifies critical mechanical, electrical and plumbing systems to improve the building's functionality. Lighting, water pipelines and HVAC systems are designed and installed to ensure power savings and cost reduction.</p>
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