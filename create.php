<?php require('core/init.php'); ?>
<?php 
//Create Topic object
$topic = new Topic;

//Get Template and Assign Vars
$template = new Template('templates/create.php');

//Assign Vars

//Display template
echo $template;

?>