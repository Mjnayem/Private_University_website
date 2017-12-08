
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

if(isset($_POST['submit_pi']))
{
  $FirstName=$_POST['FirstName'];
  $MiddleName=$_POST['MiddleName'];
  $LastName=$_POST['LastName'];
  $NickName=$_POST['NickName'];
  $DateofBirth=$_POST['DateofBirth'];
  $PlaceOfBirth=$_POST['PlaceOfBirth'];
  $Gender=$_POST['gender'];
  $MaritalStatus=$_POST['MaritalStatus'];
  $BloodGroup=$_POST['BloodGroup'];
  $Religion=$_POST['Religion'];
  $Nationality=$_POST['Nationality'];
  $NationalID=$_POST['NationalID'];
  $PassportNo=$_POST['PassportNo'];
  $IM=$_POST['IM'];
  $SocialNetworkId=$_POST['SocialNetworkId'];
  $AboutYou=$_POST['AboutYou'];

        $conn=db_connection();
          mysqli_select_db($conn,"dfd_database");

          /*$st=mysqli_query($conn,"INSERT INTO personal_info_student (f_name,m_name,l_name, n_name, d_o_b, p_o_b, gender,marital_status, blood, religion, nationality, national_id, passport, im, social_id, about_u) VALUES ('$FirstName','$MiddleName','$LastName','$NickName','$DateofBirth','$PlaceOfBirth','$Gender','$MaritalStatus','$BloodGroup','$Religion','$Nationality','$NationalID','$PassportNo','$IM','$SocialNetworkId','$AboutYou') where email='$email'");*/
         $s= mysqli_query($conn ,"UPDATE personal_info_student  SET f_name ='$FirstName',m_name='$MiddleName',l_name='$LastName',n_name='$NickName',d_o_b='$DateofBirth',p_o_b='$PlaceOfBirth',gender='$Gender',marital_status='$MaritalStatus',blood='$BloodGroup',religion='$Religion',nationality='$Nationality',national_id='$NationalID',passport='$PassportNo',im='$IM',social_id='$SocialNetworkId',about_u='$AboutYou' WHERE email='$email'");

         if($s=true){
  ?>
  <script>
    swal('YES...','Information Updated ','success');  
    </script>
  <?php
}


}




if(isset($_POST['Guardian_submit'])){


$FatherName=$_POST['FatherName'];
$FatherContact=$_POST['FatherContact'];
$FatherOccupation=$_POST['FatherOccupation'];
$FatherDesignation=$_POST['FatherDesignation'];
$FatherEmployer=$_POST['FatherEmployer'];
$FatherAnnualIncome=$_POST['FatherAnnualIncome'];
$MotherName=$_POST['MotherName'];
$MotherContact=$_POST['MotherContact'];
$MotherOccupation=$_POST['MotherOccupation'];
$MotherDesignation=$_POST['MotherDesignation'];
$MotherEmployer=$_POST['MotherEmployer'];
$MotherAnnual=$_POST['MotherAnnual'];
$ParentAddress=$_POST['ParentAddress'];
$LocalGuardian=$_POST['LocalGuardian'];
$Relationship=$_POST['Relationship'];
$LocalGuardianAddress=$_POST['LocalGuardianAddress'];

$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          $s= mysqli_query($conn ,"UPDATE father_mother_student SET f_name='$FatherName',f_num='$FatherContact',f_occupation='$FatherOccupation',f_disganation='$FatherDesignation',f_employ='$FatherEmployer',f_income='$FatherAnnualIncome',m_name='$MotherName',m_num='$MotherContact',m_occupation='$MotherOccupation',m_designation='$MotherDesignation',m_employ='$MotherEmployer',m_income='$MotherAnnual',parents_address='$ParentAddress',local_guardiant='$LocalGuardian',relationship='$Relationship',local_guardiant_address='$LocalGuardianAddress' WHERE email='$email'");
          if($s=true){
  ?>
  <script>
    swal('YES...','Information Updated ','success');  
    </script>
  <?php
}


}

if(isset($_POST['contact_submit'])){


$Mobile=$_POST['Mobile'];
$FatherContactNo=$_POST['FatherContactNo'];
$Phone1=$_POST['Phone1'];
$Phone2=$_POST['Phone2'];
$Email=$_POST['Email'];
$PersonalEmail=$_POST['PersonalEmail'];
$PresentAddress=$_POST['PresentAddress'];
$PresentAddressPost=$_POST['PresentAddressPost'];
$PresentAddressPolice=$_POST['PresentAddressPolice'];
$PresentAddressDistrict=$_POST['PresentAddressDistrict'];
$PresentAddressDivision=$_POST['PresentAddressDivision'];
$PresentAddressCountry=$_POST['PresentAddressCountry'];
$PresentAddressZip=$_POST['PresentAddressZip'];
$PermanentAddress=$_POST['PermanentAddress'];
$PermanentAddressPost=$_POST['PermanentAddressPost'];
$PermanentAddressPolice=$_POST['PermanentAddressPolice'];
$PermanentAddressDistrict=$_POST['PermanentAddressDistrict'];
$PermanentAddressDivision=$_POST['PermanentAddressDivision'];
$PermanentAddressCountry=$_POST['PermanentAddressCountry'];
$PermanentAddressZipCode=$_POST['PermanentAddressZipCode'];
$OtherAddress=$_POST['OtherAddress'];
$HostelAddress=$_POST['HostelAddress'];
$MessAddress=$_POST['MessAddress'];

$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          $s= mysqli_query($conn ,"UPDATE contact_details_student SET mobile='$Mobile',father_num='$FatherContactNo',phone_1='$Phone1',phone_2='$Phone2',email_father='$Email',personal_email='$PersonalEmail',present_address='$PresentAddress',present_address_post='$PresentAddressPost',present_address_police='$PresentAddressPolice',present_address_city='$PresentAddressDistrict',present_address_division='$PresentAddressDivision',present_address_country='$PresentAddressCountry',present_address_zip_code='$PresentAddressZip',permanent_address='$PermanentAddress',permanent_address_post='$PermanentAddressPost',permanent_address_police='$PermanentAddressPolice',permanent_address_city='$PermanentAddressDistrict',permanent_address_division='$PermanentAddressDivision',permanent_address_country='$PermanentAddressCountry',permanent_address_zip_code='$PermanentAddressZipCode',other_address='$OtherAddress',hostel_address='$HostelAddress',Mess_address='$MessAddress' WHERE email='$email'");


if($s=true){
  ?>
  <script>
    swal('YES...','Information Updated ','success');  
    </script>
  <?php
}




}

if(isset($_POST['education_submit'])){
$Degree=$_POST['Degree'];
$DegreeName=$_POST['DegreeName'];
$NameofInstitute=$_POST['NameofInstitute'];
$University_Board=$_POST['University_Board'];
$PassingYear=$_POST['PassingYear'];
$Class_Division_Grade=$_POST['Class_Division_Grade'];
$Marks_CGPA=$_POST['Marks_CGPA'];
$Remarks=$_POST['Remarks'];



$conn=db_connection();
          mysqli_select_db($conn,"dfd_database");
          $s=  mysqli_query($conn ,"UPDATE education_student SET degree='$Degree',degree_name='$DegreeName',name_of_institute='$NameofInstitute',university_board='$University_Board',passing_year='$PassingYear',grade='$Class_Division_Grade',cgpa='$Marks_CGPA',remarks='$Remarks' WHERE email='$email'");

           if($s=true){
  ?>
  <script>
    swal('YES...','Information Updated ','success');  
    </script>
  <?php
}

}




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
  <title>Edit Profile</title>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <link  rel="stylesheet" href="bootstrap.min.css"/>

  <script type="text/javascript">
    
function call_cnt_5(){

   $(document).ready(function(){
         $('#container_5').css({'display':'block'});
          $('#container_1').css({'display':'none'});
           $('#container_2').css({'display':'none'});
            $('#container_3').css({'display':'none'});
             $('#container_4').css({'display':'none'});
    });
}

function call_cnt_4(){

   $(document).ready(function(){
         $('#container_5').css({'display':'none'});
          $('#container_1').css({'display':'none'});
           $('#container_2').css({'display':'none'});
            $('#container_3').css({'display':'none'});
             $('#container_4').css({'display':'block'});
    });
}

function call_cnt_3(){

   $(document).ready(function(){
         $('#container_5').css({'display':'none'});
          $('#container_1').css({'display':'none'});
           $('#container_2').css({'display':'none'});
            $('#container_3').css({'display':'block'});
             $('#container_4').css({'display':'none'});
    });
}

function call_cnt_2(){

   $(document).ready(function(){
         $('#container_5').css({'display':'none'});
          $('#container_1').css({'display':'none'});
           $('#container_2').css({'display':'block'});
            $('#container_3').css({'display':'none'});
             $('#container_4').css({'display':'none'});
    });
}

function call_cnt_1(){

   $(document).ready(function(){
         $('#container_5').css({'display':'none'});
          $('#container_1').css({'display':'block'});
           $('#container_2').css({'display':'none'});
            $('#container_3').css({'display':'none'});
             $('#container_4').css({'display':'none'});
    });
}

  </script>

  <style type="text/css">
    
    #main_body{
      width: 90%;
      height: auto;
      position: absolute;
      left: 4%;
    }

     #list-grp{
      text-align: center;
    }
    #btn_per{
      margin-top: 20px;
      

    }
    #container_1{
      display: block;

    }
    #container_2{
      display: none;

    }
       #container_3{
      display: none;

    }
      
       #container_4{
      display: none;

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


   
  </style>
</head>
<body>




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
   Edit Your Profile
  </h2>

</div>



<ul class="nav nav-tabs">
  <li role="presentation" class="toggle" onclick="call_cnt_1()"><a >Personal</a></li>
  <li role="presentation" onclick="call_cnt_2()"><a >Guardian</a></li>
  <li role="presentation" onclick="call_cnt_3()"><a >Contact/Address</a></li>
   <li role="presentation" onclick="call_cnt_4()"><a >Education/Training</a></li>
  <li role="presentation" onclick="call_cnt_5()"><a >Profile Pic</a></li>
</ul>



<div class="container " id="container_1">
  
  <div class="col-md-7">

<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
   Edit Personal Information
  </h2>

</div>


<form action="editprofile.php" method="post">
<div class="col-md-7">
  <div class="input-group">
  First Name:<input type="text" class="form-control" name="FirstName" aria-describedby="basic-addon1" value="<?php echo $p_i[1];?>" required>
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Middle Name:<input type="text" class="form-control" name="MiddleName" aria-describedby="basic-addon1" value="<?php echo $p_i[2];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Last Name:<input type="text" class="form-control" name="LastName" aria-describedby="basic-addon1" value="<?php echo $p_i[3];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Nick Name:<input type="text" class="form-control" name="NickName" aria-describedby="basic-addon1" value="<?php echo $p_i[4];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Date of Birth:<input type="text" class="form-control" name="DateofBirth" aria-describedby="basic-addon1" value="<?php echo $p_i[5];?>" required>
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Place Of Birth:<input type="text" class="form-control" name="PlaceOfBirth" aria-describedby="basic-addon1" value="<?php echo $p_i[6];?>">
</div>
</div>


<div class="col-md-7">
 <div class="input-group">
  Gender: <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br>
  
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Marital Status:<input type="text" class="form-control" name="MaritalStatus" aria-describedby="basic-addon1" value="<?php echo $p_i[8];?>" required>
</div>
</div>
<div class="input-group">
  Blood Group:<input type="text" class="form-control" name="BloodGroup" aria-describedby="basic-addon1" value="<?php echo $p_i[9];?>" required>
</div>

<div class="input-group">
  Religion:<input type="text" class="form-control" name="Religion" aria-describedby="basic-addon1" value="<?php echo $p_i[10];?>" required>
</div>

<div class="input-group">
  Nationality:<input type="text" class="form-control" name="Nationality" aria-describedby="basic-addon1" value="<?php echo $p_i[11];?>">
</div>

<div class="input-group">
  National ID:<input type="text" class="form-control" name="NationalID" aria-describedby="basic-addon1" value="<?php echo $p_i[12];?>">
</div>
 <div class="input-group">
  Passport No:<input type="text" class="form-control" name="PassportNo" aria-describedby="basic-addon1" value="<?php echo $p_i[13];?>">
</div>


<div class="input-group">
  IM:<input type="text" class="form-control" name="IM" aria-describedby="basic-addon1" value="<?php echo $p_i[14];?>">
</div>

<div class="input-group">
  Social Network Id:<input type="text" class="form-control" name="SocialNetworkId" aria-describedby="basic-addon1" value="<?php echo $p_i[15];?>">
</div>

<div class="input-group">
  About You:<input type="text" class="form-control" name="AboutYou" aria-describedby="basic-addon1" value="<?php echo $p_i[16];?>">
</div>

<div class="input-group" id="btn_per">
  <input type="submit" class="btn btn-success" name="submit_pi" value="Update Information">

  </div>
   
</form>
</div> 
   </div>
  









<div class="container " id="container_2">
  
  <div class="col-md-7">

<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
   Father and Mother Details
  </h2>

</div>
<form action="editprofile.php" method="post">
<div class="col-md-7">
  <div class="input-group">
  Father's Name:<input type="text" class="form-control" name="FatherName" aria-describedby="basic-addon1" value="<?php echo $f_m_i[1];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Father's Contact No:<input type="text" class="form-control" name="FatherContact" aria-describedby="basic-addon1" value="<?php echo $f_m_i[2];?>" required>
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Father's Occupation:<input type="text" class="form-control" name="FatherOccupation" aria-describedby="basic-addon1" value="<?php echo $f_m_i[3];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Father's Designation:<input type="text" class="form-control" name="FatherDesignation" aria-describedby="basic-addon1" value="<?php echo $f_m_i[4];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Father's Employer's Name:<input type="text" class="form-control" name="FatherEmployer" aria-describedby="basic-addon1" value="<?php echo $f_m_i[5];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Father's Annual Income:<input type="text" class="form-control" name="FatherAnnualIncome" aria-describedby="basic-addon1" value="<?php echo $f_m_i[6];?>">
</div>
</div>


<div class="col-md-7">
 <div class="input-group">
  Mother's Name:<input type="text" class="form-control" name="MotherName" aria-describedby="basic-addon1" value="<?php echo $f_m_i[7];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Mother's Contact No:<input type="text" class="form-control" name="MotherContact" aria-describedby="basic-addon1" value="<?php echo $f_m_i[8];?>" required>
</div>
</div>
<div class="input-group">
  Mother's Occupation:<input type="text" class="form-control" name="MotherOccupation" aria-describedby="basic-addon1" value="<?php echo $f_m_i[9];?>">
</div>

<div class="input-group">
  Mother's Designation:<input type="text" class="form-control" name=" MotherDesignation" aria-describedby="basic-addon1" value="<?php echo $f_m_i[10];?>">
</div>

<div class="input-group">
  Mother's Employer's Name:<input type="text" class="form-control" name="MotherEmployer" aria-describedby="basic-addon1" value="<?php echo $f_m_i[11];?>">
</div>

<div class="input-group">
 Mother's Annual Income:<input type="text" class="form-control" name="MotherAnnual" aria-describedby="basic-addon1" value="<?php echo $f_m_i[12];?>">
</div>
 <div class="input-group">
  Parent's Address:<input type="text" class="form-control" name="ParentAddress" aria-describedby="basic-addon1" value="<?php echo $f_m_i[13];?>">
</div>





<div class="input-group">
  Local Guardian's Name:<input type="text" class="form-control" name="LocalGuardian" aria-describedby="basic-addon1" value="<?php echo $f_m_i[14];?>">
</div>

<div class="input-group">
  Relationship:<input type="text" class="form-control" name="Relationship" aria-describedby="basic-addon1" value="<?php echo $f_m_i[15];?>">
</div>

<div class="input-group">
  Local Guardian's Address:<input type="text" class="form-control" name="LocalGuardianAddress" aria-describedby="basic-addon1" value="<?php echo $f_m_i[16];?>">
</div>

<div class="btn-group" id="btn_per">
  <input type="submit" class="btn btn-success" value="Update Information" name="Guardian_submit">
  </div>
    
</form>
  </div>
</div>















<div class="container " id="container_3">
  
  <div class="col-md-7">

<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
   Contact Details
  </h2>

</div>

<form action="editprofile.php" method="post">
<div class="col-md-7">
  <div class="input-group">
  Mobile:<input type="text" class="form-control" name="Mobile" aria-describedby="basic-addon1" value="<?php echo $c_d[1];?>" required>
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Father's Contact No:<input type="text" class="form-control" name="FatherContactNo" aria-describedby="basic-addon1" value="<?php echo $c_d[2];?>" required>
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Phone 1:<input type="text" class="form-control" name="Phone1" aria-describedby="basic-addon1" value="<?php echo $c_d[3];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Phone 2:<input type="text" class="form-control" name="Phone2" aria-describedby="basic-addon1" value="<?php echo $c_d[4];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Email:<input type="text" class="form-control" name="Email" aria-describedby="basic-addon1" value="<?php echo $c_d[5];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Personal Email:<input type="text" class="form-control" name="PersonalEmail" aria-describedby="basic-addon1" value="<?php echo $c_d[6];?>">
</div>
</div>


<div class="col-md-7">
 <div class="input-group">
  Present Address:<input type="text" class="form-control" name="PresentAddress" aria-describedby="basic-addon1" value="<?php echo $c_d[7];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Present Address Post Office:<input type="text" class="form-control" name="PresentAddressPost" aria-describedby="basic-addon1" value="<?php echo $c_d[8];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Present Address Police Station:<input type="text" class="form-control" name="PresentAddressPolice" aria-describedby="basic-addon1" value="<?php echo $c_d[9];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Present Address District/City:<input type="text" class="form-control" name="PresentAddressDistrict" aria-describedby="basic-addon1" value="<?php echo $c_d[10];?>">
</div>
</div>

<div class="col-md-7">
<div class="input-group">
  Present Address Division/State:<input type="text" class="form-control" name=" PresentAddressDivision" aria-describedby="basic-addon1" value="<?php echo $c_d[11];?>">
</div>
</div>

<div class="input-group">
 Present Address Country:<input type="text" class="form-control" name=" PresentAddressCountry" aria-describedby="basic-addon1" value="<?php echo $c_d[12];?>">
</div>
 <div class="input-group">
  Present Address Zip Code:<input type="text" class="form-control" name="PresentAddressZip" aria-describedby="basic-addon1" value="<?php echo $c_d[13];?>">
</div>





<div class="input-group">
  Hostel Address:<input type="text" class="form-control" name="HostelAddress" aria-describedby="basic-addon1" value="<?php echo $c_d[22];?>">
</div>

<div class="input-group">
  Mess Address:<input type="text" class="form-control" name="MessAddress" aria-describedby="basic-addon1" value="<?php echo $c_d[23];?>">
</div>

<div class="input-group">
  Other Address:<input type="text" class="form-control" name="OtherAddress" aria-describedby="basic-addon1" value="<?php echo $c_d[21];?>">
</div>



<div class="input-group">
  Permanent Address:<input type="text" class="form-control" name="PermanentAddress" aria-describedby="basic-addon1" value="<?php echo $c_d[14];?>">
</div>


<div class="input-group">
  Permanent Address Post Office:<input type="text" class="form-control" name="PermanentAddressPost" aria-describedby="basic-addon1" value="<?php echo $c_d[15];?>">
</div>


<div class="input-group">
  Permanent Address Police Station:<input type="text" class="form-control" name="PermanentAddressPolice" aria-describedby="basic-addon1" value="<?php echo $c_d[16];?>">
</div>


<div class="input-group">
  Permanent  Address District/City:<input type="text" class="form-control" name="PermanentAddressDistrict" aria-describedby="basic-addon1" value="<?php echo $c_d[17];?>">
</div>


<div class="input-group">
  Permanent  Address Division/State:<input type="text" class="form-control" name="PermanentAddressDivision" aria-describedby="basic-addon1" value="<?php echo $c_d[18];?>">
</div>


<div class="input-group">
  Permanent  Address Country:<input type="text" class="form-control" name="PermanentAddressCountry" aria-describedby="basic-addon1" value="<?php echo $c_d[19];?>">
</div>


<div class="input-group">
  Permanent  Address Zip Code:<input type="text" class="form-control" name="PermanentAddressZipCode" aria-describedby="basic-addon1" value="<?php echo $c_d[20];?>">
</div>

<div class="btn-group" id="btn_per">
  <input type="submit" class="btn btn-success" value="Update Information" name="contact_submit">
  </div>
    
</form>
  </div>
</div>










<div class="container " id="container_4">
  
  <div class="col-md-7">

<div class="list-group" >
  <h2 id="list-grp" class="list-group-item active ">
   Educational Qualification
  </h2>

</div>

<form action="editprofile.php" method="post">
<div class="col-md-7">
  <div class="input-group">
  Degree:<input type="text" class="form-control" name="Degree" aria-describedby="basic-addon1" value="<?php echo $e_d[1];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Degree Name/Major:<input type="text" class="form-control" name="DegreeName" aria-describedby="basic-addon1" value="<?php echo $e_d[2];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  Name of Institute:<input type="text" class="form-control" name="NameofInstitute" aria-describedby="basic-addon1" value="<?php echo $e_d[3];?>">
</div>
</div>
<div class="col-md-7">
<div class="input-group">
  University/Board:<input type="text" class="form-control" name="University_Board" aria-describedby="basic-addon1" value="<?php echo $e_d[4];?>">
</div>
</div>

<div class="input-group">
  Passing Year:<input type="text" class="form-control" name="PassingYear" aria-describedby="basic-addon1" value="<?php echo $e_d[5];?>">
</div>


<div class="input-group">
  Class/Division/Grade:<input type="text" class="form-control" name="Class_Division_Grade" aria-describedby="basic-addon1" value="<?php echo $e_d[6];?>">
</div>




 <div class="input-group">
  Marks/CGPA:<input type="text" class="form-control" name="Marks_CGPA" aria-describedby="basic-addon1" value="<?php echo $e_d[7];?>">
</div>


<div class="input-group">
  Remarks:<input type="text" class="form-control" name="Remarks" aria-describedby="basic-addon1" value="<?php echo $e_d[8];?>">
</div>



<div class="btn-group" id="btn_per">
  <input type="submit" class="btn btn-success" value="Update Information" name="education_submit">
  </div>
    </form>

  </div>
</div>











<div class="container " id="container_5">
  
  <div class="col-md-7">
  <form action="editprofile.php" method="post" enctype="multipart/form-data">

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





<div class="list-group" >
  <h5 id="list-grp" class="list-group-item active ">
   All rights reserved @ Ashikur rahnam
  </h5>

</div>


</div>


 
</body>
</html>