<?php 
session_start();
if(isset($_SESSION['teacher_data']))
{
	$userdata = $_SESSION['teacher_data'];
	$Name = "$userdata[Teacher_Name]";
	$Email = "$userdata[Teacher_Email]";
	$ID = "$userdata[Teacher_ID]";
	$Department = "$userdata[Department_ID]";
	$Phone = "$userdata[Teacher_Cell_Number]";
	
	$host="localhost";
	$user="root";
	$pword="";
	$db="students_registration";


	$con = mysqli_connect($host,$user,$pword);
	mysqli_select_db($con,$db);

	$sql="SELECT department_name from department
			Where department_id = '".$Department."'";

	$result=mysqli_query($con,$sql);

	$row = mysqli_fetch_array($result);


	$DepartmentName = "$row[0]";

	

	mysqli_close($con);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Teacher info</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type = "text/css" href = "teacherinfo.css">

</head>

<body>

<div class="contact-form">
	<div class="contact-content">
		<div class="contact-header">
			<h2 class="contact-title">Teacher information</h2>
		</div>
            <p class = "form-control">Full name&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                <?php echo $Name; ?></p>
            <p class = "form-control">Department ID&emsp;&emsp;&emsp;<?php echo $ID; ?></p>
            <p class = "form-control">Department Name&emsp;<?php echo $DepartmentName; ?></p>
            <p class = "form-control">Phone number&emsp;&emsp;&emsp;<?php echo $Phone; ?></p>
            <p class = "form-control">Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                <?php echo $Email; ?></v>
	</div>
</div>

</body>
</html>