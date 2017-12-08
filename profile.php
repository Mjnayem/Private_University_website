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



<?php

$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          $st=mysqli_query($conn,"select * from personal_info_student where email='$email'");
          $p_i=mysqli_fetch_array($st);
          //$xxx=$p_i[0];

          $st=mysqli_query($conn,"select * from father_mother_student where email='$email'");
          $f_m_i=mysqli_fetch_array($st);


          $st=mysqli_query($conn,"select * from contact_details_student where email='$email'");
          $c_d=mysqli_fetch_array($st);

          $st=mysqli_query($conn,"select * from education_student where email='$email'");
          $e_d=mysqli_fetch_array($st);

          $st=mysqli_query($conn,"select * from pro_pic where email='$email'");
          $pro_pic=mysqli_fetch_array($st);


?>


<!DOCTYPE html>
<html>
<head>
  <title>Profile Student</title>
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



    @media only screen and (max-width: 900px){
      #main_body{
      width: 100%;
      height: auto;
      position: absolute;
      left: 0%;
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
      <a class="navbar-brand" ><?php echo $p_i[1]." ".$p_i[2]." ".$p_i[3];?></a>
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


<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
   Profile
  </h2>

</div>



<div class="container">
<div class="row">
<div class="col-md-4">
<img src="<?php echo 'images/'.$pro_pic[1] ;?>" class="img-responsive" alt="Responsive image">
 <button type="button" class="btn btn-primary btn-lg btn-block " onclick="call_editprofile()">Edit Profile</button>

</div>



<div class="list-group col-md-7 " id="info">
  <a href="#" class="list-group-item disabled">
    <b>Personal Information</b>
  </a>
  <h4 class="list-group-item"><b>First Name </b>:<?php echo $p_i[1];?></h4>
    <h4 class="list-group-item"><b>Middle Name </b>:<?php echo $p_i[2];?></h4>
     <h4 class="list-group-item"><b>Last Name </b>:<?php echo $p_i[3];?></h4>
      <h4 class="list-group-item"><b>Nick Name </b>:<?php echo $p_i[4];?></h4>
      <h4 class="list-group-item"><b>Date of Birth</b>:<?php echo $p_i[5];?></h4>
    <h4 class="list-group-item"><b>Place of Birth</b>:<?php echo $p_i[6];?></h4>
     <h4 class="list-group-item"><b>Gender</b>:<?php echo $p_i[7];?></h4>
      <h4 class="list-group-item"><b>Marital Status</b>:<?php echo $p_i[8];?></h4>
      <h4 class="list-group-item"><b>Blood Group</b>:<?php echo $p_i[9];?></h4>
    <h4 class="list-group-item"><b>Religion</b>:<?php echo $p_i[10];?></h4>
     <h4 class="list-group-item"><b>Nationality </b>:<?php echo $p_i[11];?></h4>
      <h4 class="list-group-item"><b>National ID</b>:<?php echo $p_i[12];?></h4>
      <h4 class="list-group-item"><b>Passport No</b>:<?php echo $p_i[13];?></h4>
    <h4 class="list-group-item"><b>Social Network ID</b>:<?php echo $p_i[14];?></h4>
     <h4 class="list-group-item"><b>IM</b>:<?php echo $p_i[15];?></h4>
      <h4 class="list-group-item"><b>About You</b>:<?php echo $p_i[16];?></h4>
      <h4 class="list-group-item"><b>Mobile</b>:<?php echo $c_d[1];?></h4>
    <h4 class="list-group-item"><b>Present Mobile </b>:<?php echo $c_d[1];?></h4>
     <h4 class="list-group-item"><b>Permanent Mobile</b>:<?php echo $c_d[3];?></h4>
      <h4 class="list-group-item"><b>Email</b>:<?php echo $c_d[0];?></h4>
      <h4 class="list-group-item"><b>Personal Email</b>:<?php echo $c_d[6];?></h4>







      <a href="#" class="list-group-item disabled ">
    <b>Guardian Information</b>
  </a>
  <h4 class="list-group-item"><b>Father's Name</b>:<?php echo $f_m_i[1];?></h4>
    <h4 class="list-group-item"><b>Father's Contact No</b>:<?php echo $f_m_i[2];?></h4>
     <h4 class="list-group-item"><b>Father's Occupation</b>:<?php echo $f_m_i[3];?></h4>
      <h4 class="list-group-item"><b>Father's Designation</b>:<?php echo $f_m_i[4];?></h4>
      <h4 class="list-group-item"><b>Father's Employer's Name</b>:<?php echo $f_m_i[5];?></h4>
    <h4 class="list-group-item"><b>Father's Annual Income</b>:<?php echo $f_m_i[6];?></h4>
     <h4 class="list-group-item"><b>Mother's Name</b>:<?php echo $f_m_i[7];?></h4>
      <h4 class="list-group-item"><b>Mother's Contact No</b>:<?php echo $f_m_i[8];?></h4>
      <h4 class="list-group-item"><b>Mother's Occupation</b>:<?php echo $f_m_i[9];?></h4>
    <h4 class="list-group-item"><b>Mother's Designation</b>:<?php echo $f_m_i[10];?></h4>
     <h4 class="list-group-item"><b>Mother's Employer's Name</b>:<?php echo $f_m_i[11];?></h4>
      <h4 class="list-group-item"><b>Mother's Annual Income</b>:<?php echo $f_m_i[12];?></h4>
      <h4 class="list-group-item"><b>Parent's Address</b>:<?php echo $f_m_i[13];?></h4>
    <h4 class="list-group-item"><b>Local Guardian's Name</b>:<?php echo $f_m_i[14];?></h4>
      <h4 class="list-group-item"><b>Relation with Local Guardian</b>:<?php echo $f_m_i[15];?></h4>
      <h4 class="list-group-item"><b>Local Guardian's Address </b>:<?php echo $f_m_i[16];?></h4>






      <a href="#" class="list-group-item disabled">
    <b>Present Address  </b>
  </a>
  <h4 class="list-group-item"><b>Address</b>:<?php echo  $c_d[7];?></h4>
    <h4 class="list-group-item"><b>Post Office</b>:<?php echo  $c_d[8];?></h4>
     <h4 class="list-group-item"><b>Police Station</b>:<?php echo  $c_d[9];?></h4>
      <h4 class="list-group-item"><b>District/City</b>:<?php echo  $c_d[10];?></h4>
      <h4 class="list-group-item"><b>Division/State</b>:<?php echo  $c_d[11];?></h4>
    <h4 class="list-group-item"><b>Country</b>:<?php echo  $c_d[12];?></h4>
     <h4 class="list-group-item"><b>Zip Code</b>:<?php echo  $c_d[13];?></h4>
      
    



    <a href="#" class="list-group-item disabled">
    <b>Permanent Address  </b>
  </a>
  <h4 class="list-group-item"><b>Address</b>:<?php echo  $c_d[14];?></h4>
    <h4 class="list-group-item"><b>Post Office</b>:<?php echo  $c_d[15];?></h4>
     <h4 class="list-group-item"><b>Police Station</b>:<?php echo  $c_d[16];?></h4>
      <h4 class="list-group-item"><b>District/City</b>:<?php echo  $c_d[17];?></h4>
      <h4 class="list-group-item"><b>Division/State</b>:<?php echo  $c_d[18];?></h4>
    <h4 class="list-group-item"><b>Country</b>:<?php echo  $c_d[19];?></h4>
     <h4 class="list-group-item"><b>Zip Code</b>:<?php echo  $c_d[20];?></h4>


<a  class="list-group-item ">
    <b>Hostel Address </b>: <?php echo  $c_d[22];?>
  </a>
  <a  class="list-group-item ">
    <b>Mess Address </b>: <?php echo  $c_d[23];?>
  </a>
  <a class="list-group-item ">
    <b>Other Address</b>: <?php echo  $c_d[21];?>
  </a>


</div>

</div>
</div>

<div class="container">
<div class="row">
<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
  Education
  </h2>
</div>

<div class="table-responsive">
<table class="table table-condensed">
 <th class="active">Degree</th>
<th class="success">Degree Name</th>
<th class="warning">Institute</th>
<th class="danger">University/Board</th>
<th class="info">Passing Year</th>


<th class="warning">Class/Division/Grade</th>
<th class="danger">Marks/CGPA</th>
<th class="info">Remarks</th>


<tr>
  <td class="active"><?php echo  $e_d[1];?></td>
  <td class="success"><?php echo  $e_d[2];?></td>
  <td class="warning"><?php echo  $e_d[3];?></td>
  <td class="active"><?php echo  $e_d[4];?></td>
  <td class="success"><?php echo  $e_d[5];?></td>
  <td class="warning"><?php echo  $e_d[6];?></td>
  <td class="active"><?php echo  $e_d[7];?></td>
  <td class="success"><?php echo  $e_d[8];?></td>
  
  
  
</tr>
</table>
</div>
</div>
</div>


  </div>


  <script type="text/javascript">
    
    function call_editprofile(){
      //response.sendRedirect('editprofile.php');
      window.location="editprofile.php";
    }
  </script>
</body>
</html>