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
$show="select * from 5sem where regno='$get'";
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
	echo "<th>SB7115(DCN) THEORY</th>";
	echo "<td>";
	echo $rows['dcn_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7115(DCN) INTERNAL </th>";
	echo "<td>";
    echo $rows['dcn_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7116(SE) THEORY</th>";
	echo "<td>";
	echo $rows['se_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7116(SE) INTERNAL</th>";
	echo "<td>";
    echo $rows['se_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7117(CA) THEORY</th>";
	echo "<td>";
	echo $rows['ca_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7117(CA) INTERNAL </th>";
	echo "<td>";
    echo $rows['ca_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7118(JAVA) THEORY</th>";
	echo "<td>";
	echo $rows['java_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7118(JAVA) INTERNAL</th>";
	echo "<td>";
    echo $rows['java_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7119(ALP) THEORY</th>";
	echo "<td>";
	echo $rows['alp_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB7119(ALP) INTERNAL </th>";
	echo "<td>";
    echo $rows['alp_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
    echo "<th>SB73P9(JAVA LAB) THEORY</th>";
	echo "<td>";
	echo $rows['java_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB73P9(JAVA LAB) INTERNAL</th>";
	echo "<td>";
    echo $rows['java_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB73PA(ALP LAB) THEORY</th>";
	echo "<td>";
	echo $rows['alp_lab_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB73PA(ALP LAB) INTERNAL </th>";
	echo "<td>";
    echo $rows['alp_lab_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB73PB(PROJECT) THEORY</th>";
	echo "<td>";
	echo $rows['project_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB73PB(PROJECT) INTERNAL</th>";
	echo "<td>";
    echo $rows['project_internal'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>SB73PE(B & F) THEORY </th>";
	echo "<td>";
	echo $rows['bf_theory'];
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <th>SB73PE(B & F) INTERNAL</th>";
	echo "<td>";
	echo $rows['bf_internal'];
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