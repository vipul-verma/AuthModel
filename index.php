<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet"> 
        <link rel="stylesheet" href="css/style.css">
        <title>Auth</title>
    </head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-center">
            	<div class="authSection onyxBg clearfix">
                	<div class="col-md-12">
                    	<ul class="nav nav-pills nav-justified">
                          <li><a href="#register" aria-controls="signup" role="pill" data-toggle="pill" class="btn btn-default fs16 f600 btn-tab">Register</a></li>
                          <li class="active"><a href="#login" aria-controls="login" role="pill" data-toggle="pill" class="btn btn-default fs16 f600 btn-tab">Log In</a></li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane whiteFg" id="register">
                            	<div class="login-form-heading text-center">
                                	<h2>Fill in the details</h2>
                                </div>
                            	<form action="index.php" method="post" class="register-form">
                                	  <div class="form-group">
                                        <label for="" class="f600">Full Name</label>
                                        <input type="email" class="form-control onyxBg bRad0 whiteFg fs16" id="" placeholder="Full Name *">
                                      </div>
                                	  <div class="form-group">
                                        <label for="" class="f600">Email address</label>
                                        <input type="email" class="form-control onyxBg bRad0 whiteFg fs16" id="" placeholder="Email *">
                                      </div>
                                      <div class="form-group">
                                        <label for="" class="f600">Password</label>
                                        <input type="password" class="form-control onyxBg bRad0 whiteFg fs16" id="" placeholder="Password *">
                                      </div>
                                      <div class="form-group">
                                        <label for="" class="f600">Re-enter Password</label>
                                        <input type="password" class="form-control onyxBg bRad0 whiteFg fs16" id="" placeholder="Re-enter Password *">
                                      </div>
                                      <button type="submit" class="btn btn-default btn-register f600 fs21" name="register">Register</button>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane whiteFg active fade in" id="login">
                            	<div class="login-form-heading text-center">
                                	<h2>Welcome Back !</h2>
                                </div>
                            	<form action="index.php" method="post" class="login-form">
                                	  <div class="form-group">
                                        <label for="" class="f600">Email address</label>
                                        <input type="email" class="form-control onyxBg bRad0 whiteFg fs16" id="" placeholder="Email *">
                                      </div>
                                      <div class="form-group">
                                        <label for="" class="f600">Password</label>
                                        <input type="password" class="form-control onyxBg bRad0 whiteFg fs16" id="" placeholder="Password *">
                                      </div>
                                      <div class="form-group">
                                        <p class="forgot"><a href="forgot.php" class="satinSheenGoldFg">Forgot Password?</a></p>
                                      </div>
                                      <button type="submit" class="btn btn-default btn-login f600 fs21" name="login">Log In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
		</div>
	</div>

<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
</body>
</html>
