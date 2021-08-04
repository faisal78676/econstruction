<?php include "../../config.php"; ?>
<?php include ADMIN."services/database.php";?>
<?php include "../includes/head.php";?>
    <div class="container-fluid">
        <div class="row">
            <?php include(ADMININC.'sidebar.php');?>
            <div class="col-md-10 content-area">
                <div class="wrapper">
                <div class="content-title">
                    <h1>New User</h1>                    
                </div>
                <div class="content">
                    <div class="row justify-content-md-center">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 align-self-center">
                            <form id="singup_form">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Username</label>
                                    <input type="text" name="username" class="form-control"  placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Email</label>
                                    <input type="text" name="emailId" class="form-control"  placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Password</label>
                                    <input type="password" name="password" class="form-control"  placeholder="Password">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="formGroupExampleInput2">Image</label>
                                    <input type="file" class="form-control"  placeholder="Image">
                                </div> -->
                                <button type="submit" id="save_user" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    
<?php 
include_once "../includes/footer.php";
?>
<script>
        // $('#save_user').click(function(){
        //     $('#singup').validate()
        // });
        var validator = jQuery("#singup_form").validate({
            rules: {
                full_name: {required: true,minlength: 3},                
                emailId: {required: true,email:true},
                username: {required: true,minlength: 3},                
                password: {required: true},                
                // terms :{required: true}
            },
            submitHandler: function (form) { // for demo
                formdata = $(form).serializeArray();
                formdata.push({name:'action',value:'addNew'});
                $.ajax({        
                        url: "../controller/user-crud.php",
                        type: "POST",
                        data: formdata,
                        success: function (response) {
                            console.log('response',response);
                        }
                });
            }
        });
</script>