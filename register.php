<?php require('core/init.php'); ?>
<?php 
//Create Topic Object
$topic = new Topic;

if(isset($_POST['register'])){
    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = md5($_POST['password']);
    $data['password2'] = md5($_POST['password2']);
    $data['about'] = $_POST['about'];
    $data['last_activity'] = date("Y-m-d H:i:s");
    
    //Upload Avatar image
    if ($user->uploadAvatar()){
        $data['avatar'] = $_FILES["avatar"]["name"];
    } else {
        $data['avatar'] = 'noimage.png';
    }
}

//Get Template and Assign Vars
$template = new Template('templates/register.php');

//Assign Vars

//Display template
echo $template;

?>