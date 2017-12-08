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
          $st=mysqli_query($conn,"SELECT * from teacher_info where email='$email'");
          $p_i=mysqli_fetch_array($st);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
    .dd{
      margin-top: 10px;
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
      <a class="navbar-brand" ><?php echo $p_i[3];?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav  navbar-right">
        <li class="toggle"><a href="profile_teacher.php"><i><b>Home</b></i><span class="sr-only">(current)</span></a></li>


        <li class="toggle"><a href="attendence.php"><i><b>Attandence</b></i><span class="sr-only">(current)</span></a></li>
       



      
          <li class="toggle"><a href="teacher_result.php"><i><b>Result</b></i><span class="sr-only">(current)</span></a></li>
           <li class="toggle"><a href="logout.php"><i><b>Log out</b></i><span class="sr-only">(current)</span></a></li>


         </ul>
  </div>
  </nav>
<div class="container">
 <div class="row">
  
<?php


if(isset($_POST['submit_id_sem'])){


$coursecode=$_POST['coursecode'];
$semester=$_POST['semester'];
$studentid=$_POST['studentid'];
$gradepoint=$_POST['gradepoint'];
$tb_name="stu". $studentid;
$point=floatval($gradepoint);
$grade_c=find_grade($point);
if($coursecode!=""&&$studentid!=""&&$gradepoint!=""){
  $conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
  
   mysqli_query($conn ,"UPDATE $tb_name SET grade='$grade_c',grade_point='$gradepoint' WHERE student_id='$studentid' AND sub_code='$coursecode' AND semester='$semester'");

 ?>
  <script>
  swal('Yes ','Result Updated .','success');
  </script>
  <?php


        }else{
          ?>
  <script>
  swal('Opps..','Input properly  .','error');
  </script>
  <?php
        }



}
?>
<form action="teacher_result.php" method="post">
<div class="col-md-6 dd">
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Course Code</span>
  <input type="text" class="form-control" placeholder="Course Code" aria-describedby="sizing-addon1" name="coursecode">
</div>
</div>

<div class="col-md-6 dd">
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Grade point</span>
  <input type="text" class="form-control" placeholder="Grade point" aria-describedby="sizing-addon1" name="gradepoint">
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 dd">
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Student Id</span>
  <input type="text" class="form-control" placeholder="Student Id" aria-describedby="sizing-addon1" name="studentid">
</div>
</div>
<div class="col-md-6 dd">
<div class="input-group input-group-lg ">
  <span class="input-group-addon" id="sizing-addon1">Select Semester</span>
  <select type="text" class="form-control" placeholder="Select Semester" aria-describedby="sizing-addon1" name="semester">

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
</div>
</div>

<div class="input-group input-group-lg col-md-6 dd">
  
  <input type="submit" class="form-control" value="Submit"  aria-describedby="sizing-addon1" id="sbmt_btn" name="submit_id_sem">

</div>
</div>
</form>






</div>



  </div>
</body>
</html>