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
          var html = "";
          html +=  "<div class=\"row header\">";
          html +=  "<div class=\"cell\">";
          html +=  "Register ID";
          html +=  "</div>";
          html +=  "<div class=\"cell\">";
          html +=  "Student ID";
          html +=  "</div>";
          html +=  "<div class=\"cell\">";
          html +=  "Class ID";
          html +=  "</div>";
          html +=  "<div class=\"cell\">";
          html +=  "Register Date";
          html +=  "</div>";
          html +=  "<div class=\"cell\">";
          html +=  "Register Status";
          html +=  "</div>";
          html +=  "</div>";
          if(result.length == 11)
          {
              html += "<div class=\"row\">";
              html += "<div class=\"cell\">";
              html += "No result";
              html += "</div>";
           }
          else
          {
          var data = JSON.parse(result);
          var sumGPA = 0;
          var sumCredit = 0;
          

        for(var i= 0; i <  data.length ; i++)
		{

      html += "<div class=\"row\">";

      html += "<div class=\"cell\">";
      html += data[i].Register_ID;
      html += "</div>";

      html += "<div class=\"cell\">";
      html += data[i].Students_ID;
      html += "</div>";

      html += "<div class=\"cell\">";
      html += data[i].Class_ID;
      html += "</div>";

      html += "<div class=\"cell\">";
      html += data[i].Register_Date;
      html += "</div>";

      html += "<div class=\"cell\">";
      html += data[i].Register_Status;
      html += "</div>";

      html += "</div>";
  
        }
      }
        document.getElementById("body").innerHTML = html;
      }});
      return false;
  }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Infomation</title>
    <link rel="stylesheet" type = "text/css" href = "Class_Info.css">
</head>

<title>Page Title</title>
</head>
<body>
  <div class="topnav">
  <a class = "active">Class Information</a>
  <div class="search-container">
    <form >
        <div class="box">
            <select id = "status" onchange="grade()">
            <option value = "" selected disabled hidden>Class Status</option>
            <option value="">All</option>
            <option value="Accepted">Accepted</option>
            <option value="Denied">Denied</option>
            <option value="Pending">Pending</option>
          </select>
        </div>

        <div class="boxsecond">
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
        </div>
    </form>
  </div>
</div>


    </div>


      <div class="wrapper">
  
        <div class="table" id = body>
        </div>

     </div>





</body>

</html>

