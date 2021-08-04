<?php
    include '../../config.php';
    include "../services/database.php";
    
    if($_POST['action']=='addNew'){
        if(!empty($_POST['username']) && !empty($_POST['emailId']) && !empty($_POST['password'])){
            $username      = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            $email         = filter_var($_POST['emailId'],FILTER_SANITIZE_EMAIL);
            // $username      = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            $password      = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            $password = md5($password);
            $date = date('Y-m-d H:i:s');
            $query = "INSERT INTO users(username,email,password,created_at) VALUES(?,?,?,?)";
            $stmt= $conn->prepare($query);
            $stmt->execute([$username,$email,$password,$date]);
            echo 'Save Successfully';
            echo json_encode(['success'=>true,'message'=>'User Save Successfully'],true);
        } else {
            echo json_encode(['success'=>false,'message'=>'All Field are Mandatory','errorcode'=>1],true);
        }
    } else if($_POST['action']="deleteUser"){

            $query = "DELETE FROM USERS WHERE id=".$_POST['userId']."";
            $conn->exec($query);
            echo json_encode(['success'=>true,'data'=>'Data Delete Successfully'],true);
        
    }
?>