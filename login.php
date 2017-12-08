<?php
require 'db_besic.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link  rel="stylesheet" href="login.css"/>
		<link  rel="stylesheet" href="sweetalert2.min.css"/>
	<link  rel="stylesheet" href="sweetalert2.css"/>
	<script type="text/javascript" src="sweetalert2.js"></script>
	<script type="text/javascript" src="sweetalert2.min.js"></script>
</head>
<body>


<?php

if(isset($_POST['submit'])){

	$email=$_POST['email'];
$password=$_POST['password'];
$status=$_POST['status'];
$captcha_val="12345";

if($email!=""&&$password!=""&&$status!=""){
	if($captcha_val=="12345")
	{
		if($status=="Student"){
			$conn=db_connection();
		mysqli_select_db($conn,"dfd_database");
		$st=mysqli_query($conn,"SELECT * from signup where email='$email'");
      		$row=mysqli_fetch_array($st);
      		$db_email=$row[1];
      		$db_password=$row[2];


      		//echo $db_email."      ".$db_password;
      		if($db_password==$password){
      			 $_SESSION["U_email"] = $email;
      			 header("Location: home.php");
        			exit;


      			
      		}
      		else{
      			?>
	<script>
	swal('Opps..','Wrong Password .','error');
	</script>
	<?php
      		}
		}
		else if($status=="Teacher")
		{




			$conn=db_connection();
		mysqli_select_db($conn,"dfd_database");
		$st=mysqli_query($conn,"SELECT * from teacher_info where email='$email'");
      		$row=mysqli_fetch_array($st);
      		$db_email=$row[1];
      		$db_password=$row[2];
      		if($db_password==$password){
      			 $_SESSION["U_email"] = $email;
      			 header("Location: profile_teacher.php");
        			exit;


      			
      		}
      		else{
      			?>
	<script>
	swal('Opps..','Wrong Password .','error');
	</script>
	<?php
      		}
			//codefor teacher
		}
		else if($status=="Admin"){
			if($email=="ashik@diu.edu.bd"&& $password=="ashik"){
				 $_SESSION["U_email"] = $email;
      			 header("Location: admin_pan.php");
        			exit;

			}

		}
		

	}else{
		?>
	<script>
	swal('Opps..','Fill the Captcha proparly','error');
	</script>
	<?php
	}


 }

 else{
	?>
	<script>
	swal('Opps..','You need to fill all the input fielt ','error');
	</script>
	<?php
}

}



?>


<div id="menu_bar">
	<ul>
<li><a href="index.php"><i><b>PORTAL</b></i></a></li>
<!-- <li><a href="out_result.php"><i><b>RESULT</b></i></a></li> -->
<li><a href="signup.php"><i><b>SIGN UP</b></i></a></li>



</ul>

</div>

<div id="login">

<div id="logo"></div>
<h2 id="msg">Login Form</h2>





<form action="login.php" method="post">
<input type="text" name="email" id="email" placeholder="Enter Email"><br>
<input type="password" name="password" id="password" placeholder="Enter Password"><br>
<select id="select" name="status">
	<option value="Student">Student</option>
	<option value="Teacher">Teacher</option>
	<option value="Admin">Admin</option>

</select>
<!-- <div >
	<h2 id="captcha">12345</h2>
	<input type="text" name="captcha_val" id="captcha_val" placeholder="Enter value">


</div> -->
<input type="submit" name="submit" value="Submit" id="submit"><br>
</form>

	

</div>

<div id="foot">
	<h3 id="foot_msg">All Rights reserved @ Ashikur Rahman</h3>
</div>
</body>
</html>