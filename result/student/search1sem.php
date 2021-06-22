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
<div class="aman">
<table border="2"> 
 
<?php
$con=mysqli_connect("localhost","root","","report");
$get=$_POST['search'];
if($get)
{
$show="select * from 1sem where regno='$get'";
$result=mysqli_query($con,$show);
while($rows=mysqli_fetch_array($result))
{
	echo "<tr>";
    echo" <th>REGESTER </th>";
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
	echo"<th>BCA103T(C) THEORY</th>";
	echo "<td>";
	echo $rows['c_programming_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo"<th>BCA103T(C) THEORY</th>";
	echo "<td>";
    echo $rows['c_programming_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>BCA103T(DE) THEORY</th>";
	echo "<td>";
	echo $rows['de_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>BCA104T(DE) INTERNAL</th>";
	echo "<td>";
    echo $rows['de_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>BCA105T(DISCRETE MANTHEMATICS) THEORY</th>";
	echo "<td>";
	echo $rows['dm_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>BCA105T(DISCRETE MANTHEMATICS) INTERNAL</th>";
	echo "<td>";
    echo $rows['dm_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>BCA103P(C LAB) THEORY</th>";
	echo "<td>";
	echo $rows['c_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>BCA103P(C LAB) INTERNAL</th>";
	echo "<td>";
    echo $rows['c_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>BCA104P(DE LAB) THEORY</th>";
	echo "<td>";
	echo $rows['de_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>BCA104P(DE LAB) INTERNAL</th>";
	echo "<td>";
    echo $rows['de_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>EPH THEORY</th>";
	echo "<td>";
	echo $rows['eph_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo"<th>EPH INTERNAL</th>";
	echo "<td>";
    echo $rows['eph_internal'];
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