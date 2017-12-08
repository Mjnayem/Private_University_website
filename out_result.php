
<?php
require 'db_besic.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <link  rel="stylesheet" href="bootstrap.min.css"/>
  <link  rel="stylesheet" href="login.css"/>

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
    .container{
      margin-top: 100px;
    }



    @media only screen and (max-width: 900px){
      #main_body{
      width: 100%;
      height: auto;
      position: absolute;
      left: 0%;
    }
    .container{
      margin-top: 200px;
    }
  }

    

   
  </style>
</head>
<body>



<?php
 $conn=db_connection();
   mysqli_select_db($conn,"dfd_database");


  $program=" ";
  $student_id=" ";
  $tb_name="Stu". $student_id;
  $S_semi="";
  $p_i[1]="";
  $p_i[2]="";
  $p_i[3]="";


 if(isset($_POST['submit_id_sem'])){

  $student_id=$S_id=$_POST['student_id'];
 $program= $S_semi=$_POST['semester'];
  $tb_name="stu".$S_id;
  $email=$_POST['email'];

  if($student_id!=""&&$program!=""&&$email!=""){




       $st=mysqli_query($conn,"SELECT * from personal_info_student where email='$email'");
          $p_i=mysqli_fetch_array($st);

         // $email=$row[2];


          
}else{
  ?>
  <script>
  swal('Opps..','Fill all the input Boxes first.','error');
  </script>
  <?php

   header("Location: out_result.php");
              exit;
}

}


?>


<div id="main_body">
  


<div id="menu_bar">
  <ul>
<li><a href="index.php"><i><b>PORTAL</b></i></a></li>
<li><a href="login.php"><i><b>LOG IN</b></i></a></li>
<li><a href="signup.php"><i><b>SIGN UP</b></i></a></li>



</ul>

</div>



<div class="container" >
<div class="row">

<form action="out_result.php" method="post">
<div class="col-md-4">
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Student Id</span>
  <input type="text" class="form-control" placeholder="Student id" aria-describedby="sizing-addon1" name="student_id">
</div>


<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Email</span>
  <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" name="email">
</div>
</div>

<div class="input-group input-group-lg col-md-4 ">
  <span class="input-group-addon" id="sizing-addon1">Select Semester</span>
  <select type="text" class="form-control" placeholder="Select Semester" aria-describedby="sizing-addon1" name="semester">

  <option value="spring-2017">spring-2017</option>
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

         $st=mysqli_query($conn,"SELECT * from $tb_name where semester='$S_semi'");
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
}

?>





</table>
</div>
</div>
</div>
  </div>
</body>
</html>