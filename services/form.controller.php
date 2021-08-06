<?php
 include "../config.php";
 include "./database.php";

 if(isset($_POST['action']) && $_POST['action']=='contact'){
    // response {"fname":"fasdfi","emailId":"sdf@sdfc.om","work":"sdfs","messageId":"sdfsdf","action":"contact"}
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    $emailId = filter_var($_POST['emailId'], FILTER_SANITIZE_EMAIL);
    $work = filter_var($_POST['work'], FILTER_SANITIZE_STRING);
    $messageId = filter_var($_POST['messageId'], FILTER_SANITIZE_STRING);
    $date = date('Y-m-d H:i:s');
    $query = "INSERT INTO contact(full_name,email_id,type_of_work,message,created_at) VALUES(?,?,?,?,?)";
    $stmt= $conn->prepare($query);
    $stmt->execute([$fname,$emailId,$work,$messageId,$date]);
    echo json_encode(['success'=>true,'message'=>'Thank You for Submitting the form we will get back to you'],true);
    //  echo json_encode($_POST,true);
 } else if(isset($_POST['action']) && $_POST['action']== 'login' ){
    $emailId = filter_var($_POST['emailName'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['passwordName'], FILTER_SANITIZE_STRING);

    if($emailId != "" && $password != "") {
        
        try {
          $query = "select * from `users` where `email`=:email and `password`=:password";
          $stmt = $conn->prepare($query);
          $stmt->bindParam('email', $emailId, PDO::PARAM_STR);
          $stmt->bindValue('password', $password, PDO::PARAM_STR);
          $stmt->execute();
          
          $count = $stmt->rowCount();
          $row   = $stmt->fetch(PDO::FETCH_ASSOC);          
          
          if($count == 1 && !empty($row)) {
            /******************** Your code ***********************/
            session_start();

            $_SESSION['sess_user_id']   = $row['id'];
            $_SESSION['sess_username'] = $row['username'];
            $_SESSION['sess_email'] = $row['email'];
            // 
            // exit();

            echo json_encode(['success'=>true,'message'=>'Login successfully',$row],true);
          } else {
            echo json_encode(['success'=>false,'message'=>'Something went wrong'],true);
          }
        } catch (PDOException $e) {
          echo "Error : ".$e->getMessage();
        }
      } else {
        echo "Both fields are required!";
      }
    } else if(isset($_POST['action']) && $_POST['action']== 'register' ){
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $emailId = filter_var($_POST['emailName'], FILTER_SANITIZE_EMAIL);
      $password = filter_var($_POST['passwordName'], FILTER_SANITIZE_STRING);
      $date = date('Y-m-d H:i:s');
      $role = 'user';
      $query = "INSERT INTO users(username,email,password,created_at,user_role) VALUES(?,?,?,?,?)";
      $stmt= $conn->prepare($query);
      $stmt->execute([$username,$emailId,$password,$date,$role]);
      echo json_encode(['success'=>true,'message'=>'Thank You for Submitting the form we will get back to you'],true);
    } 

    if(isset($_POST['action']) && $_POST['action']=='appointment'){
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $user_id = filter_var($_POST['user_id'], FILTER_SANITIZE_STRING);      
      $work_type = filter_var($_POST['work_type'], FILTER_SANITIZE_STRING);
      $dateName = filter_var($_POST['dateName'], FILTER_SANITIZE_STRING);
      $date = date('Y-m-d H:i:s');
      $role = 'user';
      $query = "INSERT INTO appointment(username,date,work_type,user_id,created_at) VALUES(?,?,?,?,?)";
      $stmt= $conn->prepare($query);
      $stmt->execute([$username,$dateName,$work_type,$user_id,$date]);
      echo json_encode(['success'=>true,'message'=>'Will get Back to you'],true);

    }
     else {
     echo 'Bye';
 }
