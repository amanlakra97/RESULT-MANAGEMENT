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
$show="select * from 6sem where regno='$get'";
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
	echo "<th>BCA601T(TOC) THEORY</th>";
	echo "<td>";
	echo $rows['toc_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA601T(TOC) INTERNAL </th>";
	echo "<td>";
    echo $rows['toc_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA602T(SP) THEORY</th>";
	echo "<td>";
	echo $rows['sp_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA602T(SP) INTERNAL</th>";
	echo "<td>";
    echo $rows['sp_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA603T(CNS) THEORY</th>";
	echo "<td>";
	echo $rows['cns_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA603T(CNS) INTERNAL </th>";
	echo "<td>";
    echo $rows['cns_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "";
	echo "<td>";
	echo $rows['wp_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA604T(WP) THEORY</th>";
	echo "<td>";
    echo $rows['wp_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA604T(WP) INTERNAL</th>";
	echo "<td>";
	echo $rows['wp_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA604P(WP LAB) THEORY</th>";
	echo "<td>";
    echo $rows['wp_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA604P(WP LAB) INTERNAL</th>";
	echo "<td>";
	echo $rows['project_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>BCA605P(PROJECT) THEORY</th>";
	echo "<td>";
    echo $rows['project_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>EI THEORY </th>";
	echo "<td>";
	echo $rows['ei_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>EI INTERNAL</th>";
	echo "<td>";
	echo $rows['ei_internal'];
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