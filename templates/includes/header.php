<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Squad of Technical mind">
    <link rel="icon" href="favicon.ico">

    <title>Welcome to PHP Forum Application</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI; ?>templates/css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo BASE_URI; ?>templates/js/bootstrap.js"></script>
    <script src="<?php echo BASE_URI; ?>templates/js/ckeditor/ckeditor.js"></script>
      
    <?php 
      //Check if title is set, if not Assign it
      if (!isset($title)){
        $title = SITE_TITLE;
      }
      ?>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Talking Space Forum</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <?php if(!isLoggedIn()) : ?>
                <li><a href="register.php">Create Account</a></li>
            <?php else : ?>
                <li><a href="create.php">Create Topic</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="main-col">
                    <div class="block">
                    <h1 class="pull-left"><?php echo $title; ?></h1>
                    <h4 class="pull-right">A Simple PHP forum engine</h4>
                        <div class="clearfix"></div>
                        <hr />
                        <?php displayMessage(); ?>