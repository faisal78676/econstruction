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
	<style>
		#resp_show{
			display:none;
		}
		.error{
			color:red;
		}
	</style>
</head>
<body>
	<section class="sub-header">
	<?php include_once('inc/header.php');?>
		<h1>Contact Us</h1>
	</section>

	<!------------Conatct Us---------------->

	<section class="location">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.348781307044!2d77.65355721464421!3d12.885279990912576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1357a30c7645%3A0x4749110ef22ca58b!2sSai%20Poorna%20Premier!5e0!3m2!1sen!2sin!4v1627995657432!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>

	<section class="contact-us">
		<div class="row">
			<div class="contact-col">
				<div>
					<i class="fa fa-building"></i>
					<span>
						<h5>Venkatdhari Heights, 2nd Floor Parapanna Agrahara Main Road, Opposite Sai Poorna Premier Apartment, Bangalore - 560068</h5>
						<p>Banglore, Karnataka,IN</p>
					</span>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<span>
						<h5>+91 9865321478</h5>
						<p>Monady to Satuday, 10AM to 6PM</p>
					</span>
				</div>

				<div>
					<i class="fa fa-home"></i>
					<span>
						<h5>info@cascadebuild.com</h5>
						<p>Email us for any enquiry</p>
					</span>
				</div>


			</div>

			<div class="contact-col">
				<form id="contact_form">
					<input type="text" name="fname" placeholder="Enter Your Name" required>
					<input type="email" name="emailId" placeholder="Enter email address" required>
					<input type="text" name="work" placeholder="Enter your type of work" required>
					<textarea rows="8" name="messageId" placeholder="Message" required></textarea>
					<button type="submit" class="hero-btn red-btn" >Send Message</button>
				</form>
				<div id="resp_show"></div>				
			</div>

		</div>
	</section>
	










	<?php include_once('inc/footer.php');?>
	<script src="js/jquery.min.js"></script>
	<script src="js/validate.js"></script>
	
	<script src="js/econstruction.js"></script>

</body>
</html>