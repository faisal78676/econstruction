<?php 
include "../../config.php";
include "../../services/database.php";
include "../includes/head.php";


$query = "SELECT id,username,email FROM users";
$stmt= $conn->prepare($query);
$stmt->execute();
  

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// foreach($result as $key=>$res){
//     print_r($res);
// }
// echo '<pre>';
// print_r($result);
// echo '</pre>';
// exit('sdf');
// echo json_encode(['success'=>ture,'data'=>$result],true);
?>
    <div class="container-fluid">
        <div class="row">
            <?php include(ADMININC.'sidebar.php');?>
            <div class="col-md-10 content-area">
                <div class="wrapper">
                    <div class="content-title">
                        <h1>Users</h1>
                        <div><a href="/admin/users/add.php" class="btn btn-outline-light"><i class="fas fa-user-plus"></i></a></div>
                    </div>
                    <div class="content-list">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                // $html='';
                                foreach($result as $key=>$res){
                                    //  print_r($res["email"]);
                                     echo '<tr>
                                    <td>'.$res["username"].'</td>
                                    <td>'.$res["email"].'</td>
                                    // <td>
                                    //     <a href="/admin/users/edit.php/?id='.$res["id"].'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                    //     <button class="btn btn-danger btn-sm delete-user" data-id="'.$res["id"].'" title="Delete"><i class="fas fa-trash-restore-alt"></i></button>
                                    // </td>
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
    
<?php 

include_once ADMIN."includes/footer.php";
?>

<script>
        $(document).ready(function(){
            $('.delete-user').click(function(){
                var id = $(this).attr('data-id');
                $.ajax({        
                        url: "../controller/user-crud.php",
                        type: "POST",
                        data: {action:'deleteUser',userId:id},
                        success: function (response) {
                            console.log('response',JSON.parse(response));
                            var resp = JSON.parse(response);
                            if(resp.success){
                                location.reload(true);

                            }
                            
                        }
                });
            });
        });
</script>