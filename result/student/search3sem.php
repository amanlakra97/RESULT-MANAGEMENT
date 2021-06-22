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
$show="select * from 3sem where regno='$get'";
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
	echo "<th>BCA303T(C++) THEORY</th>";
	echo "<td>";
	echo $rows['cpp_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA303T(C++) INTERNAL</th>";
	echo "<td>";
    echo $rows['cpp_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA304T(AFM) THEORY</th>";
	echo "<td>";
	echo $rows['afm_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA304T(AFM) INTERNAL</th>";
	echo "<td>";
    echo $rows['afm_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA305T(OS) THEORY</th>";
	echo "<td>";
	echo $rows['os_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA305T(OS) INTERNAL</th>";
	echo "<td>";
    echo $rows['os_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA303P(C++ LAB) THEORY</th>";
	echo "<td>";
	echo $rows['cpp_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA303P(C++ LAB) INTERNAL</th>";
	echo "<td>";
    echo $rows['cpp_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA304P(AFM LAB) THEORY</th>";
	echo "<td>";
	echo $rows['afm_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA304P(AFM LAB) INTERNAL</th>";
	echo "<td>";
    echo $rows['afm_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>CDS THEORY</th>";
	echo "<td>";
	echo $rows['cds_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>CDS INTERNAL</th>";
	echo "<td>";
    echo $rows['cds_internal'];
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