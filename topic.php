<?php require('core/init.php'); ?>
<?php 
//Create Topic Object
$topic = new Topic;

//Get Category id from url
$topic_id = $_GET['id'];

//Get Template and Assign Vars
$template = new Template('templates/topic.php');

//Assign Variables to template object

$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->gettopic($topic_id)['title'];

//Display template
echo $template;

?>