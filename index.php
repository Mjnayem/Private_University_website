<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
	body{
		
	}

	  #main_body{
      width: 90%;
      height: auto;
      position: absolute;
      left: 4%;
    }
		.fbox{
			text-align: center;
		}
		.fbox span{
			font-size: 70px;
		}
		.jumbotron{
			text-align: center;
		}
		.footer{
			text-align: center;
		}
	</style>

</head>
<body>
<div id="main_body">

<nav class="navbar navbar-inverse">
  <div class="container-fluid ">



   <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >Student Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav  navbar-right">
        <li class="toggle"><a href="index.php"><i><b>Portal</b></i><span class="sr-only">(current)</span></a></li>
        


          <!-- <li class="toggle"><a href="out_result.php"><i><b>Result</b></i><span class="sr-only">(current)</span></a></li> -->
          <li class="toggle"><a href="signup.php"><i><b>Sign Up</b></i><span class="sr-only">(current)</span></a></li>
           <li class="toggle"><a href="login.php"><i><b>Log In</b></i><span class="sr-only">(current)</span></a></li>


         </ul>
  </div>
  </nav>

<div class="container">
	
<div class="jumbotron">
	<h2>What is student portal ?</h2>
	<p>Welcome to the  International University Student Portal.The  International University Student Portal provides a single point of access to online university services and information for students.The portal can be accessed from any where in the world by using any device which have a web browser.</p>
	<p class="btn-group">
	<a href="signup.php" class="btn btn-success btn-lg">Create Account</a>
	<a href="login.php" class="btn btn-default btn-lg">Log In</a>
	</p>

</div>
<hr>


<!--<div class="row">

  <video width="400" height="250" controls>
	<source src="song.mp4" type="video/mp4">
	<source src="song.ogg" type="video/ogg">
	bkkkfgh
	</video>

	
</div>-->

<div class="row"><!--feature.....-->
	<div class="col-sm-4 fbox">
		<span class="glyphicon glyphicon-log-in"></span>
		<h3>How to Log In ?</h3>
	<p>Use Your Email(provided by  International University) and Password</p>
	<a class="btn btn-success">Read More..</a>
	</div>
	<div class="col-sm-4 fbox">
	<span class="glyphicon glyphicon-plus"></span>
		<h3>How to Create Account?</h3>
		<p>Click on the Sign Up or Create Account Button then a new window will come .After that fill the input fielts email must be @diu.edu.bd. then click on submit .</p>
		<a class="btn btn-success">Read More..</a>
	</div>
	<div class="col-sm-4 fbox">
	<span class="glyphicon glyphicon-leaf "></span>
		<h3>For what this site ?</h3>
		<p>This site is mainly for students of this university all of their information is stored in our database and it is a digital process to communicate with students.</p>
		<a class="btn btn-success ">Read More..</a>
	</div>

</div>
<hr>



<hr>
<footer class="footer">
	<p>Copy : Ashikur Rahman </p>
</footer>

</div>
</div>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
</body>
</html>