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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Drop Regi</title>
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
    #list-item-tit{
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

<?php

$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          $st=mysqli_query($conn,"SELECT * from personal_info_student  where email='$email'");
          $s_up=mysqli_fetch_array($st);

?>

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
<div class="container">

<div class="row">
<div class="list-group" >
  <h2 class="list-group-item active " id="list-item-tit">
   Drop Course
  </h2>
</div>
</div>

<?php

$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          $st=mysqli_query($conn,"SELECT * from signup  where email='$email'");
          $s_up=mysqli_fetch_array($st);
          $student_id=$s_up[0];
          $tb_name="stu".$s_up[0];



           $code="";
          $title="";
          $crdt="";
          $paymoney="";
          $status="";

if(isset($_POST['Submit'])){
  $SubjectCode=$_POST['SubjectCode'];
$SelectSemester=$_POST['SelectSemester'];

 $st=mysqli_query($conn,"SELECT * from course_info  where code='$SubjectCode'");
          $c_info=mysqli_fetch_array($st);
          $code=$c_info[1];
          $title=$c_info[2];
          $crdt=$c_info[3];
          $paymoney="4000";
          $status="Droped";




           $st=mysqli_query($conn,"SELECT * from signup  where email='$email'");
          $s_up_P=mysqli_fetch_array($st);
          $payable_tk=floatval($s_up_P[4]);
          $payable_tk=$payable_tk+4000;
          mysqli_query($conn ,"UPDATE signup SET payable='$payable_tk' WHERE email='$email'");
          $tb_name="stu".$s_up[0];

           mysqli_query($conn ,"UPDATE $tb_name SET drop_semi='y' WHERE email='$email' and sub_code='$SubjectCode' and semester='$SelectSemester'");






}



?>



  <div class="row">
    <div class="col-lg-4 ">   
       <form  action="dropregi.php" method="post">
        <h2>Select Semester</h2>
          <div class="form-group ">
            <select type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="SelectSemester">

            <option value="spring-2017">Spring-2017</option>
  <option value="fall-2017">Fall-2017</option>
  <option value="summer-2017">Summer-2017</option>

  <option value="spring-2016">Spring-2016</option>
  <option value="fall-2016">Fall-2016</option>
  <option value="summer-2016">Summer-2016</option>

  <option value="spring-2015">Spring-2015</option>
  <option value="fall-2015">Fall-2015</option>
  <option value="summer-2015">Summer-2015</option>

  <option value="spring-2014">Spring-2014</option>
  <option value="fall-2014">Fall-2014</option>
  <option value="summer-2014">Summer-2014</option>

  <option value="spring-2013">Spring-2013</option>
  <option value="fall-2013">Fall-2013</option>
  <option value="summer-2013">Summer-2013</option>

  <option value="spring-2012">Spring-2012</option>
  <option value="fall-2012">Fall-2012</option>
  <option value="summer-2012">Summer-2012</option>
  </select>

  </div>

  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Subject Code</span>
  <input type="text" class="form-control" placeholder="Enter Subject code" aria-describedby="sizing-addon1" name="SubjectCode">
</div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-default" name="Submit">Submit</button>
  </div>
</form>
    </div>



<div class="col-lg-8">
 <div class="list-group">
  <a  class="list-group-item active">
    Latest Information
  </a>
  <a class="list-group-item"><b>Credites Droped </b>: <?php echo $crdt;?> (Crdt)</a>
  <a class="list-group-item"><b>Course Code </b>: <?php echo $code;?></a>
  <a  class="list-group-item"><b>Course Title </b>:<?php echo $title;?></a>
  <a  class="list-group-item"><b>Status </b>:<?php echo $status;?></a>
   <a  class="list-group-item"><b>Payable </b>:<?php echo $paymoney;?> TK</a>
</div>
</div>



    </div>
 

</div>

  </div>


</body>
</html>