
<?php
session_start();
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
	<title>Admine Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
	body{
		
	}

	  #main_body{
      width: 90%;
      height: auto;
      position: absolute;
      left: 4%;
    }
		.fbox{
			text-align: center;
		}
		.fbox span{
			font-size: 70px;
		}
		.jumbotron{
			text-align: center;
		}
		.footer{
			text-align: center;
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
      <a class="navbar-brand" >Admin Penel</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav  navbar-right">
       
        


          <li class="toggle"><a href=""><i><b>Home</b></i><span class="sr-only">(current)</span></a></li>
          <li class="toggle"><a href="money_card.php"><i><b>Money Cards</b></i><span class="sr-only">(current)</span></a></li>
           <li class="toggle"><a href="logout.php"><i><b>Log Out</b></i><span class="sr-only">(current)</span></a></li>
         </ul>
  </div>
  </nav>

<div class="container">
<form action="admin_pan.php" method="post">	
<div class="row">



<?php

if(isset($_POST['submit_pin'])){
$number=$_POST['number'];
$amount=$_POST['amount'];

$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");


if($number!=""&&$amount!=""){
$am=floatval($amount);
$num=intval($number);
$N=0;
while($N<$number){
$F_l=0;
$rand_num=rand(100000,999999);

 $st=mysqli_query($conn ,"SELECT * from money_pin ");
   while( $row=mysqli_fetch_array($st)){
   if( $row[1]==$rand_num){
   $F_l=1;
   break;
   }

   //$N++;
 }
 // echo $N."  ";
 mysqli_query($conn ,"INSERT into money_pin (pin,amount) values ('$rand_num','$amount')");
 $N++;



 ?>
  <script>
  swal('YES..','Value inserted ','success');
  </script>
  <?php

}


}else{
 ?>
  <script>
  swal('Sorry..','You must fill all inputs.','error');
  </script>
  <?php

}
	

}



?>
	
	<div class="col-md-6">
		
<div class="list-group" >
  <h2 class="list-group-item active " id="list-item-tit">
  Enter money pin
  </h2>
</div>

<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Amount</span>
  <input type="text" class="form-control" placeholder="Amount" aria-describedby="sizing-addon1" name="amount">
</div>

<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Number of card</span>
  <input type="text" class="form-control" placeholder="Number of Cards" aria-describedby="sizing-addon1" name="number">
</div>
 <div class="form-group">
  <button type="submit" class="btn btn-default" name="submit_pin">Submit</button>
  </div>





	</div>




<?php

if(isset($_POST['submit_teacher'])){
	

$TeacherId=$_POST['TeacherId'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$TeacherName=$_POST['TeacherName'];
$Dept=$_POST['Dept'];
$Post=$_POST['Post'];

if($TeacherId!=""&&$Email!=""&&$Password!=""&&$TeacherName!=""&&$Dept!=""&&$Post!=""){

$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
           mysqli_query($conn ,"INSERT into teacher_info (teacher_id,email,password,name,dept,post) values ('$TeacherId','$Email','$Password','$TeacherName','$Dept','$Post')");
            ?>
  <script>
  swal('YES','Info Updated Succseefully','success');
  </script>
  <?php
	
}else{
	 ?>
  <script>
  swal('Sorry..','You must fill all inputs.','error');
  </script>
  <?php
}

}
?>




<div class="col-md-6">
		

<div class="list-group" >
  <h2 class="list-group-item active " id="list-item-tit">
  Enter Teacher info
  </h2>
</div>

<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Teacher Id </span>
  <input type="text" class="form-control" placeholder="Teacher Id " aria-describedby="sizing-addon1" name="TeacherId">
</div>

<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Email</span>
  <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" name="Email">
</div>






<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Password</span>
  <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="Password">
</div>

<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Teacher Name</span>
  <input type="text" class="form-control" placeholder="Teacher Name" aria-describedby="sizing-addon1" name="TeacherName">
</div>




<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Dept</span>
  <input type="text" class="form-control" placeholder="Dept" aria-describedby="sizing-addon1" name="Dept">
</div>

<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Post</span>
  <input type="text" class="form-control" placeholder="Post" aria-describedby="sizing-addon1" name="Post">
</div>



 <div class="form-group">
  <button type="submit" class="btn btn-default" name="submit_teacher">Submit</button>
  </div>





	</div>


</div>



</form>

</div>
</div>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
</body>
</html>