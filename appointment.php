
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/cb.css">
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

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
		label{margin-left: 20px;}
/* #datepicker{width:180px; margin: 0 20px 20px 20px;} */
#datepicker > span:hover{cursor: pointer;}
.input-group-addon{
	display: none;
}
	</style>
</head>
<body>
	<section class="sub-header">
	<?php include_once('inc/header.php');?>
		<h1>Contact Us</h1>
	</section>

	<!------------Conatct Us---------------->

	<section class="contact-us">
		<div class="row login-form">
			

			<div class="contact-col">
				<form id="appointment_form">
					<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
    					<input class="form-control" type="text" name="dateName" readonly />
    					<span class="input-group-addon"></i></span>
					</div>					
					<select name="work_type">
						<option value="Project Management Consultancy">Project Management Consultancy</option>
						<option value="Structural consultancy">Structural consultancy</option>
						<option value="Interior Consultancy">Interior Consultancy</option>
						<option value="Contract Management Consultancy">Contract Management Consultancy</option>
						<option value="BIM Consultancy">BIM Consultancy</option>
						<option value="MEP Consultancy">MEP Consultancy</option>
					</select>
					<button type="submit" class="hero-btn red-btn" >Appointment</button>
				</form>
				<div id="resp_show"></div>				
			</div>

		</div>
	</section>
	










	<?php include_once('inc/footer.php');?>
	<script src="js/jquery.min.js"></script>
	<script src="js/validate.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>


	

<script>
$(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
				jQuery(document).ready(function () {
    
    var validators = jQuery("#appointment_form").validate({
        rules: {
            dateName: {required: true},
            work_type: {required: true},            
          },
        submitHandler: function (form) { // for demo                        
            appointmentData = $(form).serializeArray();
            // alert('sdf');
            appointmentData.push({name:'action',value:'appointment'});
			appointmentData.push({name:'username',value:'<?php echo $_SESSION['sess_username']?>'});
			appointmentData.push({name:'user_id',value:'<?php echo $_SESSION['sess_user_id']?>'});
            console.log('registerData',appointmentData);
            $.ajax({        
                url: '../services/form.controller.php',                   
                type: "POST",                
                data: appointmentData,                
                success: function (response) {                    
					const data = JSON.parse(response)
					console.log('dat',data);
                     if(data.success){
						 alert(data.message);
						 window.location.href='/login';
					 }
                }
            })
        }
    });
});
			

</script>

</body>
</html>