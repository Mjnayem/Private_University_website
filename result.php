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
  <title>Result</title>
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
    #sbmt_btn{
      background: #449D44;
      color: #FFFFFF;
      margin-top: 50px;
    }
      #sbmt_btn:hover{
      background: #337AB7;
      color: #FFFFFF;
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



<?php

 $conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
           $st=mysqli_query($conn,"SELECT * FROM personal_info_student where email='$email'");
          $p_i=mysqli_fetch_array($st);



  $st5=mysqli_query($conn,"SELECT * FROM signup where email='$email'");
          $p_i5=mysqli_fetch_array($st5);



if(!isset($_POST['submit_id_sem'])){
  $program=" ";
  $student_id=$p_i5[0];
  $tb_name="Stu". $student_id;
  $S_semi="";

}

else if(isset($_POST['submit_id_sem'])){
  $student_id=$S_id=$p_i5[0];
 $program= $S_semi=$_POST['semester'];
  $tb_name="Stu".$S_id;

         // $email=$row[2];


          


}


?>


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
      <a class="navbar-brand" ><?php echo $p_i[1]." ".$p_i[2]." ".$p_i[3] ;?></a>
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



<div class="container" >
<div class="row">

<form action="result.php" method="post">
<!-- <div class="col-md-4">
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Student Id</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="student_id">
</div>
</div> -->

<div class="input-group input-group-lg col-md-4 ">
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


<div class="input-group input-group-lg col-md-8">
  
  <input type="submit" class="form-control" value="Submit"  aria-describedby="sizing-addon1" id="sbmt_btn" name="submit_id_sem">

</div>
</form>

</div>
</div>




<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
  Student Information and Results
  </h2>

</div>





<div class="container" >
<div class="row">

<div class="col-md-5">
  <h3 id="list-grp" >
   <b>Program </b>:<?php echo $program;?>
    </h3>
    <h3 id="list-grp" ">
   <b>Name of Student </b>:<?php echo $p_i[1]." ".$p_i[2]." ".$p_i[3] ;?>
    </h3>

    <h3 id="list-grp" ">
   <b>Student ID  </b>:<?php echo $student_id;?>
    </h3>
  
  
</div>



<div class="table-responsive">


<table class="table table-condensed">
<tr>
 <th class="active">Course Code</th>
<th class="success">Course Title</th>
<th class="warning">Credit</th>
<th class="success">Grade</th>
<th class="warning">Grade Point</th>
<th class="warning">Drop</th>

</tr>
<?php
if(isset($_POST['submit_id_sem'])){
  

try{

         $st=mysqli_query($conn,"select * from $tb_name where semester='$S_semi'");

         while( $row=mysqli_fetch_array($st)){
          echo "
          <tr>
       <td>$row[4]</td>
       <td >$row[5]</td>
          <td >$row[6]</td>
         <td >$row[7]</td>
         <td >$row[8]</td>
          <td >$row[9]</td>
  
  
  
</tr>



          ";
         }
       }catch(Exception $e){
        echo "Invalid Id";
       }

}
?>





</table>


</div>
</div>
</div>



  </div>
</body>
</html>