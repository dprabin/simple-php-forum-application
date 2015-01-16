<?php 
class Topic {
    //Initialize DB Variable
    private $db;
    
    //Constructor
    public function __construct(){
        $this->db = new Database;
    }
}