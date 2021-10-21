<?php 
session_start();
if(isset($_SESSION['students_data']))
{
	$userdata = $_SESSION['students_data'];
	$FirstName = "$userdata[Students_FirstName]";
	$MiddleName = "$userdata[Students_MiddleName]";
	$LastName = "$userdata[Students_LastName]";
	$Email = "$userdata[Email]";
	$ID = "$userdata[Students_ID]";
	$Department = "$userdata[Department_ID]";
	$FullName = $FirstName . '   ' . $MiddleName . '  ' . $LastName;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		function sendHelp()
		{	
			var name = document.getElementById('name').value;
			var id = document.getElementById('id').value;
			var email = document.getElementById('email').value;
			var depaerment = document.getElementById('Department').value;
			var message = document.getElementById('message').value;
			var type = "Student";

			$.ajax(
				{
					type:"post",
					url: "STU_support_send.php",
					data:
					{	
						user_name:name,
						user_id:id,
						user_email:email,
						user_depaerment:depaerment,
						user_message:message,
						user_type:type
					},
					cache : false,
					success: function(result)
					{
						 alert(result);
					}
					
				});
				return false;

		}
	</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">

<title>Contact support</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type = "text/css" href = "support.css">

</head>

<body>

<!-- Contact section -->
<div class="contact-form">
	<div class="contact-content">
		<div class="contact-header">
			<h2 class="contact-title">Support Contact Form</h2>
		</div>
		<form > 
			<input name="name" type="text" class="form-control" id="name" value = <?php echo $FullName; ?>+ placeholder = "Name"  required />
			<input name="studentid" type="text" class="form-control" id="id" value= <?php echo $ID; ?> placeholder = "ID" required  readonly/>
			<input name="email" type="email" class="form-control" id="email" value = <?php echo $Email; ?> placeholder = "Email" required />
			<input name="Department" type="text" class="form-control" id="Department" pattern="[0-9]+" value = <?php echo $Department; ?> placeholder = "Department ID" required />
			<textarea name="message" rows="3" class="form-control" id="message" placeholder="Message" required></textarea>
			<button id = "submit" onclick="return sendHelp()" >Submit</button>
		</form>
	</div>
</div>

</body>
</html>