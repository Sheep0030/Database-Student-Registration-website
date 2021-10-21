<?php 
session_start();
if(isset($_SESSION['students_data']))
{
	$userdata = $_SESSION['students_data'];
	$ID = "$userdata[Students_ID]";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" type = "text/css" href = "Class_R_Table.css">
</head>
<body>
	<div class="topnav">
  <a class = "active">Class Register</a>
  <div class="search-container">
    <form >
      <input type="text" placeholder="Class ID.." id = "classid" name="search">
      <input type="text" placeholder="Course ID.." id = "courseid" name="search">
    <select id = "status" >
  <option value = "" selected disabled hidden>Class Status</option>
  <option value="">All</option>
  <option value="Open">Open</option>
  <option value="Closed">Closed</option>
  <option value="Full">Full</option>
</select>
      <button id = "search" onclick="return chk()" >Search</button>

	
    </form>

  </div>
</div>

    <div class="wrapper">
  
        <div class="table" id = "data">
          
   

</div>
</body>
</html> 







<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
	function chk()
	{
			var CourseID = document.getElementById('courseid').value;
			var ClassID = document.getElementById('classid').value;
			var Status = document.getElementById('status').value;
			
			$.ajax(
			{
				type:"post",
				url:"STU_class_register.php",
				data:
				{
					user_CourseID:CourseID,
					user_ClassID:ClassID,
					user_Status:Status
				},
				cache:false,
				success: function(result)
				{
					var data = JSON.parse(result);

					var html = "";

					html +=	"<div class=\"row header\">";
           		    html +=	"<div class=\"cell\">";
              		html += "Course ID";
           			html +=  "</div>";
            		html += "<div class=\"cell\">"
             		html +=	"Course Name";
          			html += "</div>";
            		html += "<div class=\"cell\">";
              		html += "Class ID";
            		html += "</div>";
            		html += "<div class=\"cell\">";
              		html += "Teacher ID";
           			html += " </div>";
           			html += " <div class=\"cell\">";
              		html += "Teacher Name";
            		html += "</div>";
            		html += "<div class=\"cell\">";
              		html += "Class Section";
            		html += "</div>";
            		html += "<div class=\"cell\">";
                	html += "Class Status";
            		html += "</div>";
            		html += "<div class=\"cell\">";
                	html += "Registration";
            		html += "</div>";
          			html += "</div>";

				for(var i= 0; i <  data.length ; i++)
				{
					html += "<div class=\"row\">";
					html += "<div class=\"cell\">";
					html += data[i].Course_ID;
					html += "</div>";

					html += "<div class=\"cell\">";
					html += data[i].Course_Name;
					html += "</div>";

					html += "<div class=\"cell\">";
					html += data[i].Class_ID;
					html += "</div>";

					html += "<div class=\"cell\">";
					html += data[i].Teacher_ID;
					html += "</div>";

					html += "<div class=\"cell\">";
					html += data[i].Teacher_Name;
					html += "</div>";

					html += "<div class=\"cell\">";
					html += data[i].Class_Section;
					html += "</div>";

					html += "<div class=\"cell\">";
					html += data[i].Class_Status;
					html += "</div>";

							html += "<div class=\"cell\">";
			if(data[i].Class_Status == "Open")
			{

				html += "<td><td><button id = " + data[i].Class_ID + " onclick = reply_click(this.id)>  Add Class" + data[i].Class_ID +"  </button> ";

			}
							html += "</div>";
		html += "</div>";

	}

	document.getElementById("data").innerHTML = html;
				}
			});
			return false;
	}

	function reply_click(id)
	{
		if(confirm("Do you want to add Class ID : "+ id +" to your register?"))
			{
				var userID = <?php echo $ID; ?>;
				var classid = id;

				$.ajax(
				{
					type:"post",
					url: "STU_class_register_Update.php",
					data:
					{
						user_ClassID:classid,
						user_ID:userID
					},
					cache : false,
					success: function(result)
					{
						alert(result);
						chk();
					}
					
				});
				return false;
				
			}
		else
			alert("No add!");
	}

</script>

