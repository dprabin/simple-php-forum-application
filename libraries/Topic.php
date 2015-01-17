<?php 
class Topic {
    //Initialize DB Variable
    private $db;
    
    //Constructor
    public function __construct(){
        $this->db = new Database;
    }
    
    //Get All Topics
    public function getAllTopics(){
        $this->db->query("select topics.*, users.username, users.avatar, categories.name from topics inner join users on topics.user_id = users.id inner join categories on topics.category_id = categories.id order by create_date desc");
        
        //Assign Result Set
        $results = $this->db->resultset();
        return $results;
    }
    
    //Get Total Number of Topics
    public function getTotalTopics(){
        $this->db->query('select * from topics');
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }

    //Get Total Number of Categories
    public function getTotalCategories(){
        $this->db->query('select * from categories');
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }

}