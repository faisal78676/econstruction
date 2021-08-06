<?php 
session_start();
// if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
  
// } 
?>
<nav>
			<a href="/"><img src="image/cb.logo.jpg" ></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="/">HOME</a></li>
					<li><a href="/service">SERVICES</a></li>
					<li><a href="/project">PROJECTS</a></li>
					<li><a href="/T&C">T&C</a></li>
					<li><a href="/about">ABOUT</a></li>
					<li><a href="/contact">CONTACT US</a></li>
					
					<?php if(isset($_SESSION['sess_user_id']) && !empty($_SESSION['sess_user_id'])) {?>
						<li><a href="/appointment">Appointment</a></li>
						<li><a href="/logout">Logout</a></li>
					<?php } else { ?>
						
						<li><a href="/login">Login</a></li>					
							<li><a href="/register">Register</a></li>
				<?php }		?>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>

		</nav>