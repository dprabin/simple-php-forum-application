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
    
    //Get by Category
    public function getByCategory($category_id){
        $this->db->query('select topics.*, categories.*, users.username from topics
        inner join categories on topics.category_id=categories.id 
        inner join users on topics.user_id=users.id 
        where topics.category_id = :category_id');
        $this->db->bind(':category_id',$category_id);
        $results = $this->db->resultset();
        return $results;
    }
    
    //Get Category details
    public function getCategory($category_id){
        $this->db->query('select * from categories where id = :category_id');
        $this->db->bind(':category_id',$category_id);
        
        //Assign result
        $result = $this->db->single();
        return $result;
    }
    
    //Get Topic By ID
    public function getTopic($id){
        $this->db->query('select topics.*, users.username, users.name, users.avatar from topics
        inner join users on topics.user_id=users.id
        where topics.id = :id');
        $this->db->bind(':id',$id);
        
        $row = $this->db->single();
        return $row;
    }
 
    //Get replies for the topic
    public function getReplies($topic_id){
        $this->db->query('select replies.*,users.* from replies
        inner join users on replies.user_id=users.id
        where replies.topic_id = :topic_id
        order by create_date asc');
        $this->db->bind(':topic_id',$topic_id);
        $rows = $this->db->resultset();
        return $rows;
    }
    
    //get total replies
    public function getTotalReplies($topic_id){
        $this->db->query('select * from replies where topic_id = '.$topic_id);
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }
}