<?php include('includes/header.php'); ?>

<ul id="topics">
    <li id="main-topic" class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="images/avatars/<?php echo $topic['avatar']; ?>" />
                    <ul>
                        <li><strong><?php echo $topic['username']; ?></strong></li>
                        <li><?php echo userPostCount($topic['user_id']); ?> Posts</li>
                        <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $topic['user_id']; ?>">Profile</a>  </li>
                    </ul>
                </div>
            </div>
        <div class="col-md-10">
            <div class="topic-content pull-right">
                <p>I just worked in split mode in dreamweaver and paid attention to what was that. Hwo did you learn CSS and HTML? How long did it take you until you were profficient?</p>
            </div>
        </div>
    </li>
</ul>
<h3>Reply to Topic</h3>
<form role="form">
    <div class="form-group">
        <textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
        <script>CKEDITOR.replace('reply');</script>
    </div>
</form>

<?php include('includes/footer.php'); ?>
