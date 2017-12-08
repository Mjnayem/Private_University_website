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
	<title>Pay Money</title>
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


<?php

$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          $st=mysqli_query($conn,"SELECT * from personal_info_student  where email='$email'");
          $s_up=mysqli_fetch_array($st);


$st=mysqli_query($conn,"SELECT * from signup  where email='$email'");
          $p_info=mysqli_fetch_array($st);
          $student_id=$p_info[0];
          if( $p_info[4]<=0){
            $state="Receivable";
          }else{
            $state="Payable";
          }






          if(isset($_POST['submit'])){


            
$EnterPinCode=$_POST['EnterPinCode'];
$Other=$_POST['Other'];
$EnterAmount=$_POST['EnterAmount'];
$WriteDescription=$_POST['WriteDescription'];
$EnterDate=$_POST['EnterDate'];
if($EnterPinCode!=""&&$EnterAmount!=""&&$WriteDescription!=""&&$EnterDate!=""){

  $st=mysqli_query($conn,"SELECT * from money_pin  where pin='$EnterPinCode'");
          $pin_s=mysqli_fetch_array($st);
          $amount_taka=floatval($pin_s[2]);
          if($pin_s[1]==$EnterPinCode&&$amount_taka==$EnterAmount){

             $st=mysqli_query($conn,"SELECT * from signup  where email='$email'");
          $s_up_P=mysqli_fetch_array($st);
          $payable_tk=floatval($s_up_P[4]);
          $payable_tk=$payable_tk+$amount_taka;
          mysqli_query($conn ,"UPDATE signup SET balance='$payable_tk' WHERE email='$email'");
          mysqli_query($conn,"DELETE  from money_pin  where pin='$EnterPinCode'");


           mysqli_query($conn ,"INSERT INTO payment_student (email,student_id,sub_date,disc,amount,other) VALUES('$email','$student_id','$EnterDate','$WriteDescription','$EnterAmount','$Other')");





          }else{
            ?>
  <script>
  swal('Sorry..',' Pin Code Or/and Amount Does not Matched.','error');
  </script>
  <?php


          }



}else{
  ?>
  <script>
  swal('Opps..','You need to fill all the input fielt ','error');
  </script>
  <?php

}



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
      <a class="navbar-brand"><?php echo $s_up[1]." ".$s_up[2]." ".$s_up[3]?></a>
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
   Pay Money
  </h2>
</div>
</div>





  <div class="row">
    <div class="col-lg-4 ">   
       <form action="paymoney.php" method="post">

<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Enter Date</span>
  <input type="text" class="form-control" placeholder="2017-06-20" aria-describedby="sizing-addon1" name="EnterDate">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Write Description</span>
  <input type="text" class="form-control" placeholder="Write Description" aria-describedby="sizing-addon1" name="WriteDescription">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Enter Amount(Taka)</span>
  <input type="text" class="form-control" placeholder="Enter Amount" aria-describedby="sizing-addon1" name="EnterAmount">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Other</span>
  <input type="text" class="form-control" placeholder="Other" aria-describedby="sizing-addon1" name="Other">
</div>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Enter Pin Code</span>
  <input type="text" class="form-control" placeholder="Enter Pin Code" aria-describedby="sizing-addon1" name="EnterPinCode">
</div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </div>
</form>
    </div>



<div class="col-lg-8">
 <div class="list-group">
  <a  class="list-group-item active">
    Latest Information
  </a>

  <a class="list-group-item"><b>Account Balance</b>: <?php echo $p_info[4];?> Tk</a>
  <a class="list-group-item"><b>Total Due </b>: <?php echo $p_info[5];?> TK</a>
  
  <!-- <a  class="list-group-item"><b>Status </b>:<?php echo $state;?></a> -->
 
</div>
</div>

   
    </div>
 

</div>

  </div>


</body>
</html>