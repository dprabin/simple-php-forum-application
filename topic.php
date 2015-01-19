<?php require('core/init.php'); ?>
<?php 
//Create Topic Object
$topic = new Topic;

//Get Category id from url
$topic_id = $_GET['id'];

//Process Reply message
if(isset($_POST['do_reply'])){
    //Create Data Array
    $data=array();
    $data['topic_id'] = $topic_id;
    $data['body'] = $_POST['body'];
    $data['user_id'] = getUser()['user_id'];
    
    //Create Validator Object
    $validate = new Validator;
    //Required Fields
    $field_array = array('body');
    
    if($validate->isRequired($field_array)){
        if($topic->reply($data)){
            redirect('topic.php?id='.$topic_id,'Your reply has been posted','success');
        } else {
            redirect('topic.php?id='.$topic_id,'Reply not posted. Something went wrong','error');
        }
    } else {
        redirect('topic.php?id='.$topic_id,'Reply not posted. Message must not be empty','error');
    }
}

//Get Template and Assign Vars
$template = new Template('templates/topic.php');

//Assign Variables to template object

$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->gettopic($topic_id)['title'];

//Display template
echo $template;

?>