<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link  rel="stylesheet" href="signup.css"/>
	<link  rel="stylesheet" href="sweetalert2.min.css"/>
	<link  rel="stylesheet" href="sweetalert2.css"/>
	<script type="text/javascript" src="sweetalert2.js"></script>
	<script type="text/javascript" src="sweetalert2.min.js"></script>
</head>
<body>
<div id="menu_bar">
	<ul>
<li><a href="#"><i><b>PORTAL</b></i></a></li>
<li><a href="#"><i><b>RESULT</b></i></a></li>

<li><a href="index.php"><i><b>LOG IN</b></i></a></li>


</ul>

</div>

<div id="login">

<div id="logo"></div>
<h2 id="msg">Sign Up Form</h2>

<form method="post">
<input type="text" name="email" id="email" placeholder="Enter Email"><br>
<input type="password" name="password" id="password" placeholder="Enter Password"><br>
<select id="select" name="status">
	<option value="Student">Student</option>
	<option value="Teacher">Teacher</option>
	

</select>
<div >
	<h2 id="captcha">12345</h2>
	<input type="text" name="captcha_val" id="captcha_val" placeholder="Enter value">


</div>
<input type="submit" name="submit" value="Submit" id="submit" onclick="call_submit()"><br>

</form>


<script type="text/javascript">

	
	function call_submit(){
		var email_val=document.getElementById("email").value;
		var password_val=document.getElementById("password").value;
		var status_val=document.getElementById("select").value;
		var captcha_val=document.getElementById("captcha_val").value;
		if(email_val!=""&&password_val!=""&&status_val!=""&&captcha_val!=""){

			var 


		}
		else{
			alert('Opps..You need to fill all the input fielt ');
		}


	}
</script>	

</div>

<div id="foot">
	<h3 id="foot_msg">All Rights reserved @ Ashikur Rahman</h3>
</div>
</body>
</html>