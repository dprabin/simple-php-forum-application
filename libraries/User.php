<?php

class User {
    //Initialize DB Variable
    private $db;
    
    //Constructor
    public function __construct(){
        $this->db = new Database;
    }
    
    //Register User
    public function register($data){
        //Query
        $this->db->query('insert into users (name, email, avatar, username, password, about, last_activity) values (:name, :email, :avatar, :username, :password, :about, :last_activity)');
        //Bind Values
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':avatar',$data['avatar']);
        $this->db->bind(':username',$data['username']);
        $this->db->bind(':password',$data['password']);
        $this->db->bind(':about',$data['about']);
        $this->db->bind(':last_activity',$data['last_activity']);
        //Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    
    //Upload User Avatar
    public function uploadAvatar(){
        $allowedExts = array("gif","jpg","jpeg","png");
        $temp = explode(".",$_FILES['avatar']['name']);
        $extension = end($temp);

        if((($_FILES['avatar']['type'] == 'image/gif')
            || ($_FILES['avatar']['type'] == 'image/jpeg')
            || ($_FILES['avatar']['type'] == 'image/jpg')
            || ($_FILES['avatar']['type'] == 'image/pjpg')
            || ($_FILES['avatar']['type'] == 'image/x-png')
            || ($_FILES['avatar']['type'] == 'image/png'))
           && ($_FILES['avatar']['size'] < 500000)
           && in_array($extension,$allowedExts)) {
                if ($_FILES['avatar']['error'] > 0){
                    redirect('register.php', $_FILES['avatar']['error'],'error');
                } else {
                    if (file_exists("images/avatars/" . $_FILES['avatar']['name'])){
                        redirect('register.php', 'File already exists','error');
                    } else {
                        move_uploaded_file($_FILES['avatar']['tmp_name'], "images/avatars/".$_FILES['avatar']['name']);
                        return true;
                    }
                }
        } else {
            redirect('register.php', 'Invalid File Type!','error');
        }

    }
    
    //User login 
    public function login($username,$password){
        $this->db->query('select * from users where username = :username and password = :password');
        //Bind values
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $result = $this->db->single();
        //check result
        if($this->db->rowCount()>0){
            $this->setUserData($result);
            return true;
        } else {
            return false;
        }
    }
    
    //Set User data
    private function setUserData($result){
        $_SESSION['is_logged_in']=true;
        $_SESSION['user_id']=$result['id'];
        $_SESSION['username']=$result['username'];
        $_SESSION['name']=$result['name'];
    }
    
    //User Logout
    public function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['name']);
        return true;
    }
    
    //Get total number of users
    public function getTotalUsers(){
        $this->db->query('select * from users');
        $result = $this->db->resultset();
        return $this->db->rowCount();
    }
}
?>