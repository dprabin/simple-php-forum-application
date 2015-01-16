<?php require('core/init.php'); ?>
<?php 
//Create Topic Object
$topic = new Topic;

//Get Template and Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Variables to template object
$template->topics = $topic->getAllTopics();


//Display template
echo $template;

?>