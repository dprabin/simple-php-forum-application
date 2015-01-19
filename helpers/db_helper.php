<?php

/*
 * db_helper.php file contain functions that templates require 
 * like category count, reply count etc
 */

    //Count number of replies for each topic
    function replyCount($topic_id){
        $db = new Database;
        $db->query('select * from replies where topic_id = :topic_id');
        $db->bind(':topic_id',$topic_id);
        //Assign rows
        $rows = $db->resultset();
        //Get Count
        return $db->rowCount();
    }

    //Get all categories in DB
    function getCategories(){
        $db=new Database;
        $db->query('select * from categories');
        //Run query and assign it to results variable
        $results = $db->resultset();
        //return result
        return $results;
    }

    //User Post Count
    function userPostCount($user_id){
        $db = new Database;
        $db->query('select * from topics where user_id = :user_id');
        $db->bind(':user_id',$user_id);
        $rows = $db->resultset();
        $topic_count = $db->rowCount();
        
        $db->query('select * from replies where user_id = :user_id');
        $db->bind(':user_id',$user_id);
        $rows = $db->resultset();
        $reply_count = $db->rowCount();
        
        return $topic_count + $reply_count;
    }
    
    //Count post by category
    function postCountByCategory($category_id){
        $db = new Database;
        $db->query('select * from topics where category_id = :category_id');
        $db->bind(':category_id',$category_id);
        $result = $db->resultset();
        $category_count = $db->rowCount();
        return $category_count;
    }

    //Count total number of posts
    function totalPostCount(){
        $db = new Database;
        $db->query('select * from topics where 1');
        $result = $db->resultset();
        $count = $db->rowCount();
        return $count;
    }

?>