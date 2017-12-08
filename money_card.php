
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
	<title>Money Card</title>
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
       
        


          <li class="toggle"><a href="admin_pan.php"><i><b>Home</b></i><span class="sr-only">(current)</span></a></li>
          <li class="toggle"><a href="money_card.php"><i><b>Money Cards</b></i><span class="sr-only">(current)</span></a></li>
           <li class="toggle"><a href="logout.php"><i><b>Log Out</b></i><span class="sr-only">(current)</span></a></li>
         </ul>
  </div>
  </nav>

<div class="container">

<div class="row">


<div class="table-responsive">


<table class="table table-condensed">
<tr>
 <th class="active">Amount Tk</th>
<th class="success">Pin Code</th>


</tr>
<?php
$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");

         $st=mysqli_query($conn,"SELECT * from money_pin ");
         while( $row=mysqli_fetch_array($st)){
          echo "
          <tr>
       <td>$row[2]</td>
       <td >$row[1]</td>
  
  
  
</tr>



          ";
         }


?>





</table>


</div>

</div>
</div>
</div>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
</body>
</html>