<?php include('includes/header.php'); ?>
<?php if($topics) : ?>
    <ul id="topics">
        <?php foreach ($topics as $topic) : ?>
            <li class="topic">
            <div class="row">
            <div class="col-md-2">
                <img class="avatar pull-left" src="templates/img/<?php echo $topic['avatar']; ?>">
            </div>    
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <h3><a href="topic.php"><?php echo $topic['title']; ?></a> </h3>
                    <div class="topic-info">
                        <a href="topics.php?category=<?php echo urlFormat($topic['category_id']); ?>"><?php echo $topic['name']; ?></a> >> 
                        <a href="topics.php?user=<?php echo urlFormat($topic['user_id']); ?>"><?php echo $topic['username']; ?></a> >>
                        Posted on: <?php echo formatDate($topic['create_date']); ?>
                    <span class="badge pull-right">3</span>
                    </div>
                </div>    
            </div>
            </div>
            </li>
    <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>No Topics to Display.</p>
<?php endif; ?>


<h3>Forum Statistics</h3>
<ul>
    <li>Total Number of Users: <strong>52</strong></li>
    <li>Total Number of Topics: <strong>10</strong></li>
    <li>Total Number of Categories: <strong>5</strong></li>
</ul>
<?php include('includes/footer.php'); ?>
