<?php 
session_start();
$a = "Test";
if(isset($_SESSION['students_data']))
{
  $userdata = $_SESSION['students_data'];
  $FirstName = "$userdata[Students_FirstName]";
  $MiddleName = "$userdata[Students_MiddleName]";
  $LastName = "$userdata[Students_LastName]";
  $Email = "$userdata[Email]";
  $ID = "$userdata[Students_ID]";
  $Department = "$userdata[Department_ID]";
  $BirthDate = "$userdata[BirthDate]";
}
else
{
  $name = "ERROR";
  header("Location: STU_login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<select id = "semester" onchange="grade()">
  <option value = "" selected disabled hidden>Select Semester</option>
  <option value="1/2016">1/2016</option>
  <option value="2/2016">2/2016</option>
  <option value="1/2017">1/2017</option>
  <option value="2/2017">2/2017</option>
  <option value="1/2018">1/2018</option>
  <option value="2/2018">2/2018</option>
  <option value="1/2019">1/2019</option>
  <option value="2/2019">2/2019</option>
  <option value="1/2020">1/2020</option>
  <option value="2/2020">2/2020</option>
  <option value="1/2021">1/2021</option>
  <option value="2/2021">2/2021</option>
  <option value="1/2022">1/2022</option>
  <option value="2/2022">2/2022</option>
 </select>

 <select id = "status" onchange="grade()">
  <option value = "" selected disabled hidden>Class Status</option>
  <option value="">All</option>
  <option value="Accepted">Accepted</option>
  <option value="Denied">Denied</option>
  <option value="Pending">Pending</option>
</select>
 <table>

	<tr>
		<th>Register ID   	</th>
		<th>Student ID   	</th>
		<th>Class ID   		</th>
		<th>Register Date   </th>
		<th>Register Status	</th>
	</tr>
	<tbody id = "data">
		</tbody>
	</table>

</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  function grade()
  {
      var id = <?php echo $ID;?>;
      var semester = document.getElementById('semester').value;
      var status = document.getElementById('status').value;
      
      $.ajax(
      {
        type:"post",
        url:"STU_register_Information.php",
        data:
        {
          user_id:id,
          user_semester:semester,
          user_status:status
        },
        cache:false,
        success: function(result)
        {
          var data = JSON.parse(result);
          var sumGPA = 0;
          var sumCredit = 0;
          var html = "";

        for(var i= 0; i <  data.length ; i++)
		{

		html += "<tr>";
			html += "<td>" + data[i].Register_ID + "</td>";
			html += "<td>" + data[i].Students_ID + "</td>";
			html += "<td>" + data[i].Class_ID + "</td>";
			html += "<td>" + data[i].Register_Date + "</td>";
			html += "<td>" + data[i].Register_Status + "</td>";
		html += "</tr>";
  
        }
        document.getElementById("data").innerHTML = html;
      }});
      return false;
  }
</script>


</html>

