<?php require('core/init.php'); ?>
<?php 
//Create Topic Object
$topic = new Topic;
//Create User Object
$user = new User;

//Get Template and Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Variables to template object
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();

//Display template
echo $template;

?>