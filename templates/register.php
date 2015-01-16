<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Squad of Technical mind">
    <link rel="icon" href="favicon.ico">

    <title>Register with us</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
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
                    <h1 class="pull-left">Create an Account</h1>
                    <h4 class="pull-right">A Simple PHP forum engine</h4>
                        <div class="clearfix"></div>
                        <hr />
                        
                        <form role="form" enctype="multipart/form-data" method="post" action="register.php">
                            <div class="form-group">
                                <label>Name*</label><input type="text" class="form-control" name="name" placeholder="Enter your Name" />
                            </div>
                            <div class="form-group">
                                <label>Email Address*</label><input type="email" class="form-control" name="email" placeholder="Enter your Email Address" />    
                            </div>
                            <div class="form-group">
                                <label>Choose Username*</label><input type="text" class="form-control" name="username" placeholder="Create a Username" />
                            </div>
                            <div class="form-group">
                                <label>Password*</label><input type="password" class="form-control" name="email" placeholder="Enter a Password" />
                            </div>
                            <div class="form-group">
                                <label>Upload Avatar</label><input type="file" name="avatar"/>
                            </div>
                            <div class="form-group">
                                <label>About Myself</label><textarea id="about" rows="6" cols="80" class="form-control" name="about" placeholder="Tell us something about yourself (Optional)"></textarea>
                            </div>   
                            <input name="register" type="submit" class="btn btn-default" value="Register" />
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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
