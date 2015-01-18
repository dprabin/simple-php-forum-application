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

?>