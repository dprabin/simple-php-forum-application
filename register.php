<?php require('core/init.php'); ?>
<?php 
//Create Topic Object
$topic = new Topic;
//Create User Object
$user = new User;
//Create validate object
$validate = new Validator;

if(isset($_POST['register'])){
    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = md5($_POST['password']);
    $data['password2'] = md5($_POST['password2']);
    $data['about'] = $_POST['about'];
    $data['last_activity'] = date("Y-m-d H:i:s");
    
    //Required fields
    $field_array = array('name','email','username','password','password2');
    
    if ($validate->isRequired($field_array)){
        if($validate->isValidEmail($data['email'])){
            if($validate->passwordsMatch($data['password'],$data['password2'])){
                //Upload Avatar image
                if ($user->uploadAvatar()){
                    $data['avatar'] = $_FILES["avatar"]["name"];
                } else {
                    $data['avatar'] = 'noimage.png';
                }

                //Register User
                if($user->register($data)){
                    redirect('index.php', 'You are registered and can now log in','success');
                } else {
                    redirect('register.php', 'Something went wrong with registration','error');
                }
            } else {
                redirect('register.php',"Your Passwords do not match.",'error');
            }
        } else {
            redirect('register.php',"Use a valid email address.",'error');
        }
    } else {
        redirect('register.php',"Please fill in All required fields",'error');
    }
    

}

//Get Template and Assign Vars
$template = new Template('templates/register.php');

//Assign Vars

//Display template
echo $template;

?>