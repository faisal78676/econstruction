
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/cb.css">
	<link rel="stylesheet"  href="css/style.css">

	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
	<!-- font awesome 4 cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!------- font awesome---------------------->
	<script src="https://kit.fontawesome.com/332a215f17.js" cross origin="anonymous"></script>
	
	<title>Login</title>
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
	<?php
if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
	header('Location: /');
	exit();
} 
?>
		<h1>Login</h1>
	</section>

	<section class="login-sec">
		<div class="row login-form">
			<div class="contact-col">
				<form id="login_form">
					<input type="email" name="emailName" placeholder="Email" required>
					<input type="password" name="passwordName" placeholder="password" required>					
					<button type="submit" class="hero-btn red-btn" >Login</button>
				</form>
				<div id="resp_show"></div>				
			</div>

		</div>
	</section>
	










	<?php include_once('inc/footer.php');?>
	<script src="js/jquery.min.js"></script>
	<script src="js/validate.js"></script>
	
	<script>
				jQuery(document).ready(function () {
    
    var validators = jQuery("#login_form").validate({
        rules: {
            emailName: {required: true},
            passwordName:  {required: true},            
          },
        submitHandler: function (form) { // for demo                        
            loginData = $(form).serializeArray();
            // alert('sdf');
            loginData.push({name:'action',value:'login'});
            // console.log('registerData',loginData);
            $.ajax({        
                url: '../services/form.controller.php',                   
                type: "POST",                
                data: loginData,                
                success: function (response) {                    
					const data = JSON.parse(response)
					console.log('dat',data);
					debugger;
                     if(data.success){
						 window.location.href='/';
					 }
                }
            })
        }
    });
});
			</script>

</body>
</html>