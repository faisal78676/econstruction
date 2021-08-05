<?php include_once($_SERVER['DOCUMENT_ROOT'].'\config.php'); ?>
<?php include "../services/database.php";?>
<?php include "../admin/includes/head.php";?>
    <div class="container-fluid">
        <div class="row">
            <?php include(ADMININC.'sidebar.php');?>
            <div class="col-md-10 content-area">
                <div class="wrapper">
                <div class="content-title">
                    <h1>Slideshow</h1>  
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
                </div>
                <div class="content">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 align-self-center">
                          
                            
                     
    <section>
                    <div class="content-list">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                
                                <tr>
                                    <td>one</td>
                                    <td>asdf</td>
                                    <td>sadfs</td>
                                    <td>    
                                        <a href="/admin/users/edit.php/?id='.$res["id"].'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm delete-user" data-id="'.$res["id"].'" title="Delete"><i class="fas fa-trash-restore-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>one</td>
                                    <td>asdf</td>
                                    <td>sadfs</td>
                                    <td>    
                                        <a href="/admin/users/edit.php/?id='.$res["id"].'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm delete-user" data-id="'.$res["id"].'" title="Delete"><i class="fas fa-trash-restore-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>one</td>
                                    <td>asdf</td>
                                    <td>sadfs</td>
                                    <td>    
                                        <a href="/admin/users/edit.php/?id='.$res["id"].'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm delete-user" data-id="'.$res["id"].'" title="Delete"><i class="fas fa-trash-restore-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>one</td>
                                    <td>asdf</td>
                                    <td>sadfs</td>
                                    <td>    
                                        <a href="/admin/users/edit.php/?id='.$res["id"].'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm delete-user" data-id="'.$res["id"].'" title="Delete"><i class="fas fa-trash-restore-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>one</td>
                                    <td>asdf</td>
                                    <td>sadfs</td>
                                    <td>    
                                        <a href="/admin/users/edit.php/?id='.$res["id"].'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm delete-user" data-id="'.$res["id"].'" title="Delete"><i class="fas fa-trash-restore-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>one</td>
                                    <td>asdf</td>
                                    <td>sadfs</td>
                                    <td>    
                                        <a href="/admin/users/edit.php/?id='.$res["id"].'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm delete-user" data-id="'.$res["id"].'" title="Delete"><i class="fas fa-trash-restore-alt"></i></button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    </div>
    </section>
    
                        </div>
                        
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    
<!-- Modal Box -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="slideshow">
                                
                                    <div class="form-group">
                                    <label for="formGroupExampleInput2">Title</label>
                                    <input type="text" name="title" class="form-control"  placeholder="Title">
                                </div>
                                    <div class="form-group">
                                    <label for="formGroupExampleInput2">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                    
                                        
                                
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Image</label>
                                    <input type="file" class="form-control"  placeholder="Image">
                                </div>
                                <button type="submit" id="save_user" class="btn btn-primary">Save</button>
                                    
                                
                            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Box Ed -->

<?php 
include_once ADMIN."/includes/footer.php";
?>
<script>
        // $('#save_user').click(function(){
        //     $('#singup').validate()
        // });
        var validator = jQuery("#slideshow").validate({
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