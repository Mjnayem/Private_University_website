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
  <title>Change Password</title>
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


<?php

if(isset($_POST['submit_btn'])){
  $OldPassword=$_POST['OldPassword'];
  $NewPassword=$_POST['NewPassword'];
  $ReEnterNewPassword=$_POST['ReEnterNewPassword'];
  if($OldPassword!=""&& $NewPassword!="" && $ReEnterNewPassword!=""){

  if( $NewPassword==$ReEnterNewPassword){
    $conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
           $st=mysqli_query($conn,"select * from signup where email='$email'");
          $p_i=mysqli_fetch_array($st);
          if($OldPassword==$p_i[1]){

            mysqli_query($conn ,"UPDATE signup SET password='$NewPassword' WHERE email='$email'");


 ?>
  <script>
  swal('Yes.','Your Password is changed.','success');
  </script>
  <?php




          }else{
              ?>
  <script>
  swal('Opps..','Old Password Is Wrong! ','error');
  </script>
  <?php
          }

  }else{
    ?>
  <script>
  swal('Opps..','New Password and Re-Enter Password Does not Matched ! ','error');
  </script>
  <?php
  }
}else{
  ?>
  <script>
  swal('Opps..','Fill all the input fielt First ! ','error');
  </script>
  <?php
}



}



?>


<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
   Change Password
  </h2>

</div>



<div class="container">
<div class="row">

<form action="changepassword.php" method="post">
<div class="input-group input-group-lg col-md-6">
  <b>Old Password</b><input type="password" class="form-control" placeholder="Old Password" aria-describedby="sizing-addon1" name="OldPassword">
</div>


<div class="input-group input-group-lg col-md-6">
  <b>New Password</b><input type="password" class="form-control" placeholder="New Password" aria-describedby="sizing-addon1" name="NewPassword">
</div>

<div class="input-group input-group-lg col-md-6">
  <b>Re-Enter New Password</b><input type="password" class="form-control" placeholder="Re-Enter New Password" aria-describedby="sizing-addon1" name="ReEnterNewPassword">
</div>

<div class="input-group input-group-lg col-md-6">
  <input type="submit" class="form-control"  value="Update Password" aria-describedby="sizing-addon1" id="sbmt_btn" name="submit_btn">
</div>
</form>
</div>
</div>


  </div>
</body>
</html>