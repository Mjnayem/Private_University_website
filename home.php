<?php
session_start();
?>

<?php
require 'db_besic.php';

 

 $email = $_SESSION["U_email"];

if($email == null){
    
    header("location:index.php");
    exit;
}



$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          $st=mysqli_query($conn,"SELECT * from personal_info_student  where email='$email'");
          $s_up=mysqli_fetch_array($st);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Timeline</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link  rel="stylesheet" href="bootstrap.min.css"/>

	<style type="text/css">
  

		
		  #main_body{
      width: 90%;
      height: auto;
      position: absolute;
      left: 4%;
    }
    .list-group-item{
      text-align: center;
      height: 80px;
      font-family: 'oswald',sans-serif;
    }


		@media only screen and (max-width: 900px){
			#main_body{
			width: 100%;
			height: auto;
			position: absolute;
			left: 0%;
		}

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
      <a class="navbar-brand" ><?php echo $s_up[1]." ".$s_up[2]." ".$s_up[3]?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav  navbar-right">
        <li class="toggle"><a href="home.php"><i><b>Home</b></i><span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i><b>Profile</b></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php"><i><b>Profile</b></i></a></li>
            <li><a href="editprofile.php"><i><b>Edit Profile</b></i></a></li>
            <li><a href="changepassword.php"><i><b>Change Password</b></i></a></li>
            
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i><b>Payment</b></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="payment_ledger.php"><i><b>Payment Ledger</b></i></a></li>
            <li><a href="payment_scheme.php"><i><b>Payment Scheme</b></i></a></li>
           
            
          </ul>
        </li>



            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i><b>Registration</b></i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="courseregi.php"><i><b>Course Registration</b></i></a></li>
            <li><a href="dropregi.php"><i><b>Drop Semester</b></i></a></li>
            <li><a href="paymoney.php"><i><b>Pay Money</b></i></a></li>
            


          </ul>
        </li>
          <li class="toggle"><a href="result.php"><i><b>Result</b></i><span class="sr-only">(current)</span></a></li>
           <li class="toggle"><a href="logout.php"><i><b>Log out</b></i><span class="sr-only">(current)</span></a></li>


         </ul>
  </div>
  </nav>


<div class="list-group">
  <h2 class="list-group-item active ">
   Student Dashboard
  </h2>
  
</div>
<h3>Please give suggestions to improve our University</h3>

<?php
if(isset($_POST['submit'])){
  $cat=$_POST['catagory'];
  $msg=$_POST['message'];
  if($msg!=""){

    $conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          mysqli_query($conn ,"INSERT INTO student_suggestion (email,catagory,message) VALUES('$email','$cat','$msg')");

  }else{
    ?>
  <script>
  swal('Opps..','Type a Message first  ','error');
  </script>
  <?php
  }

}



?>
<form action="home.php" method="post">
  <div class="form-group ">
   
     
    <select class="form-control" name="catagory">
  <option value="Other">Other</option>
  <option value="Student Portal">Student Portal</option>
  <option value="Hostal">Hostal</option>
  <option value="Transport">Transport</option>
  <option value="Security">Security</option>
  <option value="Library">Library</option>
  <option value="Accounts">Accounts</option>
  <option value="Exam">Exam</option>
  <option value="My Dept.">My Dept</option>
</select>

  </div>

  
  <div class="form-group ">
  
  <textarea class="form-control" collam="3" name="message"></textarea>
  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </div>
</form>


<h3>Your Suggestion to improve our University</h3>
<div class="table-responsive">

<table class="table table-condensed">
 <tr>
<th>Suggestion Type</th>
<th>Suggestion Description</th>
</tr>
<?php

          $st=mysqli_query($conn,"SELECT * from student_suggestion  where email='$email'");
         while($s_up=mysqli_fetch_array($st)){
          echo "

          <tr>
  <td >$s_up[2]</td>
  <td >$s_up[3]</td>
</tr>
          ";

         }

?>



</table>


</div>

  </div>
</body>
</html>