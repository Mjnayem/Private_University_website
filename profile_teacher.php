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
          $st=mysqli_query($conn,"SELECT * from teacher_info where email='$email'");
          $p_i=mysqli_fetch_array($st);



          $st=mysqli_query($conn,"select * from pro_pic where email='$email'");
          $pro_pic=mysqli_fetch_array($st);






          if(isset($_POST['image_submit']))
      {
        $image_name=$_FILES['file']['name'];
         $image_type=$_FILES['file']['type'];
         $image_size=$_FILES['file']['size'];

         ?>
         <script>
           var name="<?php  echo $image_name ;?>"
         </script>
         <?php
         
         if($image_type=='image/jpeg'||$image_type=='image/gif'||$image_type=='image/png'||$image_type=='image/jpg'||$image_type=='image/JPG'||$image_type=='image/JPEG')
         {
            $uploadfile=move_uploaded_file($_FILES['file']['tmp_name'],'images/'.$_FILES['file']['name']);
            

            $conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
            $query=mysqli_query($conn,"UPDATE  pro_pic SET pic_name='$image_name' WHERE email='$email'");
           if($uploadfile&&$query)
            {
                       ?>

                             <script>
                               //alert("name");

                              // var name=document.getElementById("image_name").val();
          // alert(name);
                             swal({
  title: 'Yes..',
  text: 'Image Uploaded..',
  imageUrl: 'images/'+name,
  imageWidth: 400,
  imageHeight: 300,
  animation: false
})

                            </script>
                      <?php
               // header("location:timeline.php");
             }
            else if(!$uploadfile)
            {
                ?>
  <script>
    swal('Opps..','Image Not Upload','error');  
    </script>
  <?php
            }
            else if(!$query)
            {
                ?>
  <script>
    swal('Opps..','Image Not Saved ','error');  
    </script>
  <?php
            }
            
         }
         else
         {
            ?>
  <script>
    swal('Opps..','Invalid File ','error');  
    </script>
  <?php
         }
      }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Teacher</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link  rel="stylesheet" href="bootstrap.min.css"/>
<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
  

		
		  #main_body{
      width: 90%;
      height: auto;
      position: absolute;
      left: 4%;
    }
    #container_5{
      display: none;
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



   <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" ><?php echo $p_i[3];?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav  navbar-right">
        <li class="toggle"><a href="profile_teacher.php"><i><b>Home</b></i><span class="sr-only">(current)</span></a></li>


        <li class="toggle"><a href="attendence.php"><i><b>Attandence</b></i><span class="sr-only">(current)</span></a></li>
       



      
          <li class="toggle"><a href="teacher_result.php"><i><b>Result</b></i><span class="sr-only">(current)</span></a></li>
           <li class="toggle"><a href="logout.php"><i><b>Log out</b></i><span class="sr-only">(current)</span></a></li>


         </ul>
  </div>
  </nav>
<div class="container">
  <div class="row">
    <div class="col-md-4">
<img src="<?php echo 'images/'.$pro_pic[1] ;?>" class="img-responsive" alt="Responsive image">
 <button type="button" class="btn btn-primary btn-lg btn-block " onclick="call_editprofile()">Update Pic</button>

</div>

<div class=" list-group col-md-6">
  
<a  class="list-group-item  active">
    <b>Academic Information</b>
  </a>

   <h4 class="list-group-item"><b>Name</b><?php echo "       ".$p_i[3];?></h4>

   <h4 class="list-group-item"><b>Id</b><?php echo "       ".$p_i[0];?></h4>
   <h4 class="list-group-item"><b>Email</b><?php echo "        ".$p_i[1];?></h4>
   <h4 class="list-group-item"><b>Dept.</b><?php echo "       ".$p_i[4];?></h4>
   <h4 class="list-group-item"><b>Post</b><?php echo "        ".$p_i[5];?></h4>


</div>

  </div>


</div>

<div class="container " id="container_5">
  
  <div class="col-md-7">
  <form action="profile_teacher.php" method="post" enctype="multipart/form-data">

<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
   Change Profile Picture
  </h2>

</div>
<div class="col-md-7">
  <div class="input-group">
  <b>The file must be less then 3 MB</b>
  <input type="file" class="form-control" aria-describedby="basic-addon1" name="file" id="image_name">

 
</div>
</div>



<div class="btn-group" id="btn_per">
  <input type="submit" class="btn btn-success" value="Update Picture" name="image_submit">
  </div>
  </form>
    

  </div>
</div>
<script type="text/javascript">
  


function call_editprofile(){

   $(document).ready(function(){
         $('#container_5').css({'display':'block'});

    });
}



</script>

  </div>
</body>
</html>