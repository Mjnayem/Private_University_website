<?php
require 'db_besic.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link  rel="stylesheet" href="signup.css"/>
	<link  rel="stylesheet" href="sweetalert2.min.css"/>
	<link  rel="stylesheet" href="sweetalert2.css"/>
	<script type="text/javascript" src="sweetalert2.js"></script>
	<script type="text/javascript" src="sweetalert2.min.js"></script>
</head>
<body>
<div id="menu_bar">
	<ul>
<li><a href="index.php"><i><b>PORTAL</b></i></a></li>
<!-- <li><a href="out_result.php"><i><b>RESULT</b></i></a></li> -->

<li><a href="login.php"><i><b>LOG IN</b></i></a></li>


</ul>

</div>

<div id="login">

<div id="logo"></div>
<h2 id="msg">Sign Up Form</h2>

<form action="signup.php" method="post">
<input type="text" name="email" id="email" placeholder="Enter Email"><br>
<input type="text" name="s_id" id="email" placeholder="Student Id"><br>
<input type="password" name="password" id="password" placeholder="Chose a Password"><br>
<!-- <select id="select" name="status">
	<option value="Student">Student</option>
	<option value="Teacher">Teacher</option>
	

</select> -->
<!-- <div >
	<h2 id="captcha">12345</h2>
	<input type="text" name="captcha_val" id="captcha_val" placeholder="Enter value">


</div> -->
<input type="submit" name="submit" value="Submit" id="submit"><br>

</form>
<?php



if(isset($_POST['submit'])){

	$email=$_POST['email'];
      $student_id=$_POST['s_id'];
$password=$_POST['password'];
$pass_len=strlen($password);
$status="Student";







if($email!=""&&$password!=""){




      if($pass_len>=8){



      $email_len=strlen($email);
      //echo $email_len ;
      $email_len=$email_len-1;
      $strt=$email_len-9;
      $email_array=str_split($email);
      $com_str=array();
      $p=0;
      for($i=$strt;$i<=$email_len;$i++){
             $com_str[$p++]=$email_array[$i];
      }
      $email_key_user=implode("", $com_str);
      $email_key_versity="diu.edu.bd";
      $vl=strcmp($email_key_user, $email_key_versity);
     //echo $email_key_user ;
      if($vl==0)
      {
            $conn=db_connection();
                  mysqli_select_db($conn,"dfd_database");
                  $st=mysqli_query($conn,"select * from signup where email='$email'");
                  $row=mysqli_fetch_array($st);
                  $xxx=$row[0];
                  if($xxx==$email)
                  {
                        ?>
                        <script>
                              swal('Opps..','This Email is already exist..','error');
                        </script>
                        <?php
                  }
                  else{
                        mysqli_query($conn,"INSERT into signup (student_id,email,password,status) values ('$student_id','$email','$password','$status')");

                        mysqli_query($conn,"insert into pro_pic (email) values ('$email')");

                        mysqli_query($conn,"insert into personal_info_student (email) values ('$email')");

                        mysqli_query($conn,"insert into father_mother_student (email) values ('$email')");

                        mysqli_query($conn,"insert into education_student (email) values ('$email')");

                        mysqli_query($conn,"insert into contact_details_student (email) values ('$email')");



                        //$val="mj_nayem7";
//$conn=db_connection();
                       // mysqli_select_db($conn,"dfd_database");

                        $tb_name="Stu".$student_id;
                  $st=mysqli_query($conn,"CREATE TABLE $tb_name (

                        id INT(10) AUTO_INCREMENT PRIMARY KEY ,
                        student_id VARCHAR(50) NULL,
                        email VARCHAR(50) NULL,
                        semester VARCHAR(30)  NULL,
                                    sub_code VARCHAR(30) NULL,
                                    title VARCHAR(50) NULL,

                                    credit VARCHAR(10) NULL,

                                    grade VARCHAR(10) NULL,

                                    grade_point VARCHAR(10) NULL,
                                          drop_semi VARCHAR(10) NULL
  
                        )");

                        





                        ?>
                        <script>
                           window.location = 'login.php';
                        </script>
                        <?php
                         // header("Location: login.php");
                              // exit;

                        //send the directory code will be here
                  }
                  

      }
      else{
            ?>
            <script>

            swal('Opps..','Email should be @diu.edu.bd & Captcha should be valid','error');
            </script>
            <?php
      }

            
     
}else{
     ?>
            <script>

            swal('Opps..','Password should be minimum 8 Char','error');
            </script>
            <?php
}




     
}
	  
else{
	?>
	<script>
	swal('Opps..','You need to fill all the input fielt ','error');
	</script>
	<?php
}

}



?>

	

</div>

<div id="foot">
	<h3 id="foot_msg">All Rights reserved @ Ashikur Rahman</h3>
</div>
</body>
</html>