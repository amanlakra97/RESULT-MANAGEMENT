<?php
require 'config/config.php';
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="updatesemsem.css">
</head>
<body>
<div class="sidenav">
  <a href="/rp/main1.php">Home</a>
  <button class="dropdown-btn">Student Details 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/rp/import/imp1.php">Import Details</a>
    <a href="/rp/add/add1.php">Add Details</a>
    <a href="/rp/view/view1.php">View Details</a>
  </div>
  <button class="dropdown-btn">Result Analysis 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/rp/analysis/1semanalysis.php">1 Semester</a>
    <a href="/rp/analysis/2semanalysis.php">2 Semester</a>
    <a href="/rp/analysis/3semanalysis.php">3 Semester</a>
    <a href="/rp/analysis/4semanalysis.php">4 Semester</a>
    <a href="/rp/analysis/5semanalysis.php">5 Semester</a>
    <a href="/rp/analysis/6semanalysis.php">6 Semester</a>
  </div>
  <a href="/rp/admin1.php">Logout</a>
</div>
<?php
session_start();
$con=Mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'report');

$sql ="select *from 5sem";
$records = mysqli_query($con,$sql);
?>
<form>
 <div class="content">
<table border="10">
<tr>
  <th>REG. NO.</th>
  <th>NAME OF THE STUDENT</th>
  <th>SB7115(DCN) THEORY</th>
  <th>SB7115(DCN) INTERNAL </th>
  <th>SB7116(SE) THEORY</th>
  <th>SB7116(SE) INTERNAL</th>
  <th>SB7117(CA) THEORY</th>
  <th>SB7117(CA) INTERNAL </th>
  <th>SB7118(JAVA) THEORY</th>
  <th>SB7118(JAVA) INTERNAL</th>
  <th>SB7119(ALP) THEORY</th>
  <th>SB7119(ALP) INTERNAL </th>
  <th>SB73P9(JAVA LAB) THEORY</th>
  <th>SB73P9(JAVA LAB) INTERNAL</th>
  <th>SB73PA(ALP LAB) THEORY</th>
  <th>SB73PA(ALP LAB) INTERNAL </th>
  <th>SB73PB(PROJECT) THEORY</th>
  <th>SB73PB(PROJECT) INTERNAL</th>
  <th>SB73PE(B & F) THEORY </th>
  <th>SB73PE(B & F) INTERNAL</th>
  <th>TOTAL THEORY</th>
  <th>TOTAL INTERNAL</th>
  <th>GPA</th>
  <th>GRADE</th>
  <th>RESULT</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($records))
  {
	  echo "<tr><form action=update5.php method=post >";
	  echo "<td><input type=text name=regno value='".$row['regno']."'></td>";
	  echo "<td><input type=text name=name value='".$row['name']."'></td>";
	   echo "<td><input type=text name=dcn_theory value='".$row['dcn_theory']."'></td>";
	  echo "<td><input type=text name=dcn_internal value='".$row['dcn_internal']."'></td>";
	    echo "<td><input type=text name=se_theory value='".$row['se_theory']."'></td>";
	  echo "<td><input type=text name=se_internal value='".$row['se_internal']."'></td>";
	   echo "<td><input type=text name=ca_theory value='".$row['ca_theory']."'></td>";
	  echo "<td><input type=text name=ca_internal value='".$row['ca_internal']."'></td>";
	    echo "<td><input type=text name=java_theory value='".$row['java_theory']."'></td>";
	  echo "<td><input type=text name=java_internal value='".$row['java_internal']."'></td>";
	     echo "<td><input type=text name=alp_theory value='".$row['alp_theory']."'></td>";
	  echo "<td><input type=text name=alp_internal value='".$row['alp_internal']."'></td>";
	    echo "<td><input type=text name=java_lab_theory value='".$row['java_lab_theory']."'></td>";
	  echo "<td><input type=text name=java_lab_internal value='".$row['java_lab_internal']."'></td>";
	     echo "<td><input type=text name=alp_lab_theory value='".$row['alp_lab_theory']."'></td>";
	  echo "<td><input type=text name=alp_lab_internal value='".$row['alp_lab_internal']."'></td>";
	    echo "<td><input type=text name=project_theory value='".$row['project_theory']."'></td>";
	  echo "<td><input type=text name=project_internal value='".$row['project_internal']."'></td>";
	      echo "<td><input type=text name=bf_theory value='".$row['bf_theory']."'></td>";
	  echo "<td><input type=text name=bf_internal value='".$row['bf_internal']."'></td>";
	      echo "<td><input type=text name=total_theory value='".$row['total_theory']."'></td>";
	  echo "<td><input type=text name=total_internal value='".$row['total_internal']."'></td>";
	  echo "<td><input type=text name=gpa value='".$row['gpa']."'></td>";
	      echo "<td><input type=text name=grade value='".$row['grade']."'></td>";
	  echo "<td><input type=text name=result value='".$row['result']."'></td>";
	  echo "<input type=hidden name=id value='".$row['regno']."'></td>'";
	  echo "<td><input type=submit>";
	  echo "</form></tr>";
  }
  ?>
  </form>
  <script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html>
