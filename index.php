<?php require('core/init.php'); ?>
<?php 
//Get Template and Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Variables
$template->heading ="This is Template heading";


//Display template
echo $template;

?>