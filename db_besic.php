<?php

function db_connection(){
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
return $conn;

}

function find_grade($grade){
	if($grade<2)
		return "F";
	else if($grade==4.0)
		return "A+";

	else if($grade==3.75)
		return "A";

	else if($grade==3.50)
		return "A-";
	else if($grade==3.25)
		return "B+";
	else if($grade==3.0)
		return "B";

		else if($grade==2.75)
		return "B-";
	else if($grade==2.50)
		return "C+";
	else if($grade==2.25)
		return "C";
	else if($grade==2.0)
		return "D";
}


 /*mysqli_select_db($conn,"check");
 mysqli_query($conn,"insert into info (id,name) values ('12345','Adnan')");

INSERT INTO course_info(code, title, credit) VALUES (,'CSE-300','Signal processing','3');

 */
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link  rel="stylesheet" href="sweetalert2.min.css"/>
	<link  rel="stylesheet" href="sweetalert2.css"/>
	<script type="text/javascript" src="sweetalert2.js"></script>
	<script type="text/javascript" src="sweetalert2.min.js"></script>
</head>
<body>

</body>
</html>