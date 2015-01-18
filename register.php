<?php require('core/init.php'); ?>
<?php 
//Create Topic Object
$topic = new Topic;

//Get Template and Assign Vars
$template = new Template('templates/register.php');

//Assign Vars

//Display template
echo $template;

?>