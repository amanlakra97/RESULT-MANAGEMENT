<html>
<head>
<link type="text/css" rel="stylesheet" href="stddetails11.css">
</head>
<body>
<div class="header"> 
<img src="stdlogo1.jpg" alt="Avatar" class="avatar">     
</div>
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="topnav" id="myTopnav">
  <a href="stdhome1.php" class="active">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div> 
<center>
<div class="table">
<table border="2">


<?php
$con=mysqli_connect("localhost","root","","report");
$get=$_POST['search'];
if($get)
{
$show="select * from 4sem where regno='$get'";
$result=mysqli_query($con,$show);
while($rows=mysqli_fetch_array($result))
{
echo "<tr>";
    echo" <th>REG. NO.</th>";
    echo "<td>";
    echo $rows['regno'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>NAME OF THE STUDENT</th>";
	echo "<td>";
    echo $rows['name'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA401T(INDIAN LANGUAGE) THEORY</th>";
	echo "<td>";
	echo $rows['il_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA401T(INDIAN LANGUAGE) INTERNAL</th>";
	echo "<td>";
    echo $rows['il_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA102T(ENGLISH) THEORY</th>";
	echo "<td>";
	echo $rows['english_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA102T(ENGLISH) INTERNAL</th>";
	echo "<td>";
    echo $rows['english_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA403T(VP) THEORY</th>";
	echo "<td>";
	echo $rows['vp_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA403T(VP) INTERNAL</th>";
	echo "<td>";
    echo $rows['vp_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA404T(UNIX) THEORY</th>";
	echo "<td>";
	echo $rows['unix_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA404T(UNIX) INTERNAL</th>";
	echo "<td>";
    echo $rows['unix_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA405T(OR) THEORY</th>";
	echo "<td>";
	echo $rows['or_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA405T(OR) INTERNAL</th>";
	echo "<td>";
    echo $rows['or_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA403P(VP LAB) THEORY</th>";
	echo "<td>";
	echo $rows['vp_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA403P(VP LAB) INTERNAL</th>";
	echo "<td>";
    echo $rows['vp_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA404P(UNIX LAB) THEORY</th>";
	echo "<td>";
	echo $rows['unix_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA404P(UNIX LAB) INTERNAL</th>";
	echo "<td>";
    echo $rows['unix_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SDC THEORY</th>";
	echo "<td>";
	echo $rows['sdc_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SDC INTERNAL</th>";
	echo "<td>";
    echo $rows['sdc_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>CCEC</th>";
	echo "<td>";
	echo $rows['ccec'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>TOTAL THEORY</th>";
	echo "<td>";
	echo $rows['total_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>TOTAL INTERNAL</th>";
	echo "<td>";
    echo $rows['total_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>GPA</th>";
	echo "<td>";
    echo $rows['gpa'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>GRADE</th>";
	echo "<td>";
	echo $rows['grade'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
    echo"<th>RESULT</th>";
 	echo "<td>";
    echo $rows['result'];
	echo "</td>";
	echo "</tr>";
    echo "<br/>";
}
}
else
{
echo'<script type="text/javascript"> alert("No Result Available")</script>';
}
?>
</table>
</div>
</center>
</body>
</html>