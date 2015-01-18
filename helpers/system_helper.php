<?php

//Redirect to Page
function redirect($page=FALSE, $message=NULL, $message_type=NULL){
    if(is_string($page)){
        $location = $page;
    } else{
        $location=$_SERVER['SCRIPT_NAME'];
    }
    
    //Check for message
    if($message != NULL){
        //set message
        $_SESSION['message'] = $message;
    }
    
    //Check for message type
    if($message_type != NULL){
        //set message type
        $_SESSION['message_type'] = $message_type;
    }
    
    //Redirect
    header('Location: '.$location);
    exit();
}

//Display Message
function displayMessage(){
    if(!empty($_SESSION['message'])){
        $message = $_SESSION['message'];
        if(!empty($_SESSION['message_type'])){
            $message_type = $_SESSION['message_type'];
            //create output
            if ($message_type == 'error'){
                echo '<div class="alert alert-danger">'.$message.'</div>';
            } else {
                echo '<div class="alert alert-success">'.$message.'</div>';
            }
            //Unset Message
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        } else {
            echo '';
        }
    }
}

?>