<?php

class User {
    
    
    //Upload User Avatar
    public funciton uploadAvatar(){
        $allowedExts = array("gif","jpg","jpeg","png");
        $temp = explode(".",$_FILES['avatar']['name']);
        $extension = end($temp);

        if((($_FILES['avatar']['type'] == 'image/gif')
            || ($_FILES['avatar']['type'] == 'image/jpeg')
            || ($_FILES['avatar']['type'] == 'image/jpg')
            || ($_FILES['avatar']['type'] == 'image/pjpg')
            || ($_FILES['avatar']['type'] == 'image/x-png')
            || ($_FILES['avatar']['type'] == 'image/png'))
           && ($_FILES['avatar']['size'] < 20000)
           && in_array($extension,$allowedExts)) {
                if ($_FILES['avatar']['error'] > 0){
                    redirect('register.php', $_FILES['avatar']['error'],'error');
                } else {
                    if (file_exists("images/avatars/" . $_FILES['avatar']['name'])){
                        redirect('register.php', 'File already exists','error');
                    } else {
                        move_upload_file($_FILES['avatar']['tmp_name']), "images/avatars".$_FILES['avatar']['name'];
                        return true;
                    }
                }
        } else {
            redirect('register.php', 'Invalid File Type!','error');
        }

    }

}
?>