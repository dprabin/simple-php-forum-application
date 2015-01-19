<?php include('core/init.php'); ?>
<?php
    if(isset($_POST['do_logout'])){        
        //Create user object
        $user = new User;
        
        if($user->logout()){
            redirect('index.php','You have been logged out.', 'success');
        } else {
            redirect('index.php','Something went wrong.', 'error');
        }
    } else {
        redirect('index.php');
    }

?>