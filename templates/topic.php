<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Squad of Technical mind">
    <link rel="icon" href="favicon.ico">

    <title>How did you learn HTML and CSS? s</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
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
          <a class="navbar-brand" href="index.html">Talking Space Forum</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create Account</a></li>
            <li><a href="create.html">Create Topic</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="main-col">
                    <div class="block">
                    <h1 class="pull-left">How did you learn CSS and HTML?</h1>
                    <h4 class="pull-right">A Simple PHP forum engine</h4>
                        <div class="clearfix"></div>
                        <hr />
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
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="block">
                        <h3>Login Form</h3>
                        <form role="form">
                            <div class="form-group">
                                <label>Username</label>
                                <input name="username" type="email" class="form-control" placeholder="Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="password" />
                            </div>
                            <button name="do_login" type="submit" class="btn btn-primary">Login</button> <a class="btn btn-default" href="register.html">Create Account</a>
                        </form>
                    </div>
                    <div class="block">
                        <h3>Categories</h3>
                        <div class="list-group">
                            <a href="#" class="list-group-item active">All topics <span class="badge pull-right">14</span></a>
                            <a href="#" class="list-group-item">Design <span class="badge pull-right">4</span></a>
                            <a href="#" class="list-group-item">Development <span class="badge pull-right">9</span></a>
                            <a href="#" class="list-group-item">Business Marketing <span class="badge pull-right">12</span></a>
                            <a href="#" class="list-group-item">Search Engine <span class="badge pull-right">17</span></a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

    </div><!-- /.container -->
  </body>
</html>
