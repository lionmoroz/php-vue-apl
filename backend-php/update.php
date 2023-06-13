<?php
 
    include_once 'config/database.php';
    include_once 'class/user.php';
    include 'cors.php';
    
    $database = new DB();
    $db = $database->getConnection();
    
    $item = new User($db);
    
    $data = json_decode(file_get_contents("php://input"));
    
    $item->id = $data->id;
    $item->first_name = $data->first_name;
    $item->last_name = $data->last_name;
    $item->email_id = $data->email_id;
   
    
    if($item->updateUser()){
        echo json_encode("User record updated.");
    } else{
        echo json_encode("User record could not be updated.");
    }
?>