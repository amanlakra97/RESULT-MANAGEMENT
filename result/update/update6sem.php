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

$sql ="select *from 6sem";
$records = mysqli_query($con,$sql);
?>
<form>
 <div class="content">
<table border="10">
<tr>
  <th>REG. NO.</th>
  <th>NAME OF THE STUDENT</th>
  <th>BCA601T(TOC) THEORY</th>
  <th>BCA601T(TOC) INTERNAL </th>
  <th>BCA602T(SP) THEORY</th>
  <th>BCA602T(SP) INTERNAL</th>
  <th>BCA603T(CNS) THEORY</th>
  <th>BCA603T(CNS) INTERNAL </th>
  <th>BCA604T(WP) THEORY</th>
  <th>BCA604T(WP) INTERNAL</th>
  <th>BCA604P(WP LAB) THEORY</th>
  <th>BCA604P(WP LAB) INTERNAL</th>
  <th>BCA605P(PROJECT) THEORY</th>
  <th>BCA605P(PROJECT) INTERNAL</th>
  <th>EI THEORY </th>
  <th>EI INTERNAL</th>
  <th>TOTAL THEORY</th>
  <th>TOTAL INTERNAL</th>
  <th>GPA</th>
  <th>GRADE</th>
  <th>RESULT</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($records))
  {
	  echo "<tr><form action=update6.php method=post >";
	  echo "<td><input type=text name=regno value='".$row['regno']."'></td>";
	  echo "<td><input type=text name=name value='".$row['name']."'></td>";
	   echo "<td><input type=text name=toc_theory value='".$row['toc_theory']."'></td>";
	  echo "<td><input type=text name=toc_internal value='".$row['toc_internal']."'></td>";
	    echo "<td><input type=text name=sp_theory value='".$row['sp_theory']."'></td>";
	  echo "<td><input type=text name=sp_internal value='".$row['sp_internal']."'></td>";
	   echo "<td><input type=text name=cns_theory value='".$row['cns_theory']."'></td>";
	  echo "<td><input type=text name=cns_internal value='".$row['cns_internal']."'></td>";
	    echo "<td><input type=text name=wp_theory value='".$row['wp_theory']."'></td>";
	  echo "<td><input type=text name=wp_internal value='".$row['wp_internal']."'></td>";
	    echo "<td><input type=text name=wp_lab_theory value='".$row['wp_lab_theory']."'></td>";
	  echo "<td><input type=text name=wp_lab_internal value='".$row['wp_lab_internal']."'></td>";
	    echo "<td><input type=text name=project_theory value='".$row['project_theory']."'></td>";
	  echo "<td><input type=text name=project_internal value='".$row['project_internal']."'></td>";
	      echo "<td><input type=text name=ei_theory value='".$row['ei_theory']."'></td>";
	  echo "<td><input type=text name=ei_internal value='".$row['ei_internal']."'></td>";
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
