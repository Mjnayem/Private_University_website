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
  <title>Payment </title>
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
  <?php



 $st=mysqli_query($conn,"SELECT * from signup  where email='$email'");
          $si_up=mysqli_fetch_array($st);
          $p=floatval( $si_up[4]);

$st=mysqli_query($conn,"SELECT * from payment_student  where email='$email'");
          $sii_up=mysqli_fetch_array($st);
          $r=floatval( $sii_up[5]);
          //$due=$p-$r;




  ?>


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


<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
   Payment Ledger
  </h2>

</div>



<div class="container" >
<div class="row">

<div class="col-md-5">
  <h3 id="list-grp" >
   <b>Email </b>:<?php echo  $si_up[1];?>
  </h3>
  <h3 id="list-grp" ">
   <b>Id </b>:<?php echo  $si_up[0];?>
  </h3>

</div>


<div class="col-md-5">
  <h3 id="list-grp" >
   <b>Account Balance </b>:<?php echo  $si_up[4]."   ";?>Tk
    </h3>
  <!--   <h3 id="list-grp" ">
   <b>Total Paid </b>:<?php echo   $TotalPaid."     ";?>Tk
    </h3> -->

    
    
</div>




</div>
</div>


<div class="container" >
<div class="row">
<div class="table-responsive">
<table class="table table-condensed">
<tr>
 <th class="active">Tran Date</th>
<th class="warning">Head Description</th>
<th class="info">Paid</th>


<th class="warning">OTHERS</th>
</tr>


<?php
$st=mysqli_query($conn,"SELECT * from payment_student  where email='$email'");
          while($row=mysqli_fetch_array($st)){
            echo "
<tr>
  <td >$row[3]</td>
  <td >$row[4]</td>
  <td >$row[5]</td>
  <td >$row[6]</td>
  
</tr>

            ";
          }

mysqli_close($conn);
?>



</table>
</div>
</div>
</div>



  </div>
</body>
</html>