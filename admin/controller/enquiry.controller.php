<?php
include"../../config.php";
include "../../services/database.php";

if(isset($_POST['action']) && $_POST['action']=='view-modal'){
    $query = "SELECT * FROM contact where id=".$_POST['contactId'];
    $stmt= $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result,true);
    // echo $_POST['contactId'];
}

?>