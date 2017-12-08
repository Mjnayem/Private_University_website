<?php
session_start();
?>

<?php
require 'db_besic.php';

 

 $email = $_SESSION["U_email"];
 //$semister=$_GET['semi_name'];
 $semister = $_SESSION["U_SEMESTER"];

if($email == null){
    
    header("location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Regi</title>
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




           $st1=mysqli_query($conn,"SELECT * from signup  where email='$email'");
          $s_up1=mysqli_fetch_array($st1);
          $student_id=(String)$s_up1[0];
          $pp="stu";

          $student_table=$pp.$student_id;



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











<div class="row">
  
<div class="list-group" >
  <h2 class="list-group-item active " >
   Your course for <?php echo($semister);?> 
  </h2>
</div>

</div>




<div class="row">
  <form action="modify_course.php" method="post">
  <div class="table-responsive">


<table class="table table-condensed">
<tr>
 <th class="active">Course Title</th>

<th class="warning">Credit</th>
<th class="warning">Course Code</th>
<th class="success">Drop</th>


</tr>
<?php

          $conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
         $st=mysqli_query($conn,"select * from $student_table where semester='$semister'");
        // $x=0;
         $i=0;
         $k=0;
         $sub_arr=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
         $btn_num=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
         while( $row=mysqli_fetch_array($st)){
         // $p=floatval($row[3]);
         // $x=$x+$p;
          echo "
          <tr>
       <td>$row[5]</td>
       <td >$row[6]</td>
       <td >$row[4]</td>
          <td ><input type='submit' name='delet".$i."' id='delet' value='Delete Course'></td>  
</tr>



          ";
          //$sub_cod=$row[4];
          $btn_num[$k]=(String)"delet".$i++;
          $sub_arr[$k++]=$row[4];
          //echo($btn_num[$k++]);
         
         }

          for($ff=0;$ff<15;$ff++){
            //$jk=$btn_num[$ff];
           // echo($btn_num[$ff]);
          if(isset($_POST[$btn_num[$ff]])){
            //$sub_cod=$row[4];
            $st=mysqli_query($conn,"DELETE FROM $student_table WHERE sub_code = '$sub_arr[$ff]'");


 $svvt=mysqli_query($conn,"SELECT * from signup  where email='$email'");
          $svv_up=mysqli_fetch_array($svvt);
          // $student_id=$svv_up[0];
          // $tb_name="stu".$svv_up[0];
          $receiveable=floatval($svv_up[4]);
          $receiveable=$receiveable+2000;

          mysqli_query($conn,"UPDATE signup set balance='$receiveable'");



            


            ?>
            <script type="text/javascript">
              
              window.location.replace('modify_course.php');
            </script>
            <?php
            break;

           

          }
          }


?>





</table>


</div>
</form>
</div>


</div>

  </div>


</body>
</html>