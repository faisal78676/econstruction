<?php include "../config.php"; ?>
<?php include "./includes/head.php";?>
<?php include "../services/database.php";

$query = "SELECT id,full_name,email_id,type_of_work FROM contact";
$stmt= $conn->prepare($query);
$stmt->execute();
  

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
    <div class="container-fluid">
        <div class="row">
            <?php include(ADMININC.'sidebar.php');?>
            <div class="col-md-10 content-area">
                <div class="wrapper">
                <div class="content-title">
                        <h1>Enquiereis</h1>
                        <!-- <div><a href="/admin/users/add.php" class="btn btn-outline-light"><i class="fas fa-user-plus"></i></a></div> -->
                    </div>
                    <div class="content-list">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Work</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                // $html='';
                                foreach($result as $key=>$res){
                                    //  print_r($res["email"]);
                                     echo '<tr class="table-list">
                                    <td>'.$res["full_name"].'</td>
                                    <td>'.$res["email_id"].'</td>
                                    <td>'.$res["type_of_work"].'</td>
                                    <td>                                        
                                        <button class="btn btn-info btn-sm view-modal" data-id="'.$res["id"].'" title="View"><i class="fas fa-eye"></i></button>
                                    </td>
                                </tr>';
                                }
                                // echo $html;
                            ?>
                            

                            
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="showContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            
        </div>
    </div>
<?php 
include_once "./includes/footer.php";
?>

<script>
        $(document).ready(function(){
            $('.view-modal').click(function(){
                var id = $(this).attr('data-id');
                $.ajax({        
                        url: "./controller/enquiry.controller.php",
                        type: "POST",
                        data: {action:'view-modal',contactId:id},
                        success: function (response) {
                            var data = JSON.parse(response);
                            console.log('response',data);
                            $('.modal-dialog').html(`<div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <table>
                                            <tr>
                                            <h4>${data[0].full_name}</h4>
                                            </tr>
                                            <tr><h4>${data[0].email_id}</h4></tr>
                                            <tr><h4>${data[0].type_of_work}</h4></tr>
                                            <tr><h4>${data[0].message}</h4></tr>
                                        </table>
                                </div>                                
                                </div>`);
                            
                        $("#showContactModal").modal('show');

                                
                            
                            
                            // console.log('response',JSON.parse(response));
                            // var resp = JSON.parse(response);
                            // if(resp.success){
                            //     console.log('response',response);
                            // }
                            
                        }
                });
            });
        });
</script>
