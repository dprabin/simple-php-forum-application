<?php include('includes/header.php'); ?>

<ul id="topics">
    <li id="main-topic" class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="img/gravatar.jpg" />
                    <ul>
                        <li><strong>Humagain</strong></li>
                        <li>43 posts</li>
                        <li><a href="profile.php">Profile</a>  </li>
                    </ul>
                </div>
            </div>
        <div class="col-md-10">
            <div class="topic-content pull-right">
                <p>I just worked in split mode in dreamweaver and paid attention to what was that. Hwo did you learn CSS and HTML? How long did it take you until you were profficient?</p>
            </div>
        </div>
    </li>
    <li class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="img/gravatar.jpg" />
                    <ul>
                        <li><strong>Humagain</strong></li>
                        <li>43 posts</li>
                        <li><a href="profile.php">Profile</a>  </li>
                    </ul>
                </div>
            </div>
        <div class="col-md-10">
            <div class="topic-content pull-right">
                <p>Congrats on how to make a href and interesting an image ... You can learn HTML/CSS pretty fast, though how to use it in different scenarios is a whole other deal. I like to check out tutorials on how to implement newest withing HTML/CSS (HTML5/CSS3) or check out the work of others</p>
            </div>
        </div>
    </li>
    <li class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="img/gravatar.jpg" />
                    <ul>
                        <li><strong>Humagain</strong></li>
                        <li>43 posts</li>
                        <li><a href="profile.php">Profile</a>  </li>
                    </ul>
                </div>
            </div>
        <div class="col-md-10">
            <div class="topic-content pull-right">
                <p>HTML and CSS are basic. There is not much in them to learn. Learning how basic elements interact is the most complex part including cross-browser compatibility</p>
            </div>
        </div>
    </li>
    <li class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="img/gravatar.jpg" />
                    <ul>
                        <li><strong>Humagain</strong></li>
                        <li>43 posts</li>
                        <li><a href="profile.php">Profile</a>  </li>
                    </ul>
                </div>
            </div>
        <div class="col-md-10">
            <div class="topic-content pull-right">
                <p>Personally, I started to look at some examples and after I build some crappy sites, I learned quite well. As a recommendtaion, you can check http://www.w3schools.com. The site is pretty complete</p>
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
