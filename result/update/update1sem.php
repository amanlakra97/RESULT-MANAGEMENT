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

$sql ="select *from 1sem";
$records = mysqli_query($con,$sql);
?>
<form>
 <div class="content">
<table border="10">
<tr>
<th>REG. NO.</th>
<th>NAME OF THE STUDENT</th>
<th>BCA101T(IL HINDI) THEORY</th>
<th>BCA101T(IL HINDI) INTERNAL</th>
<th>BCA101T(IL ADDITIONAL ENGLISH) THEORY</th>
<th>BCA101T(IL ADDITIONAL ENGLISH) INTERNAL</th>
<th>BCA101T(IL KANNADA) THEORY</th>
<th>BCA101T(IL KANNADA) INTERNAL</th>
<th>BCA101T(IL TAMIL) THEORY</th>
<th>BCA101T(IL TAMIL) INTERNAL</th>
<th>BCA101T(IL TELGU) THEORY</th>
<th>BCA101T(IL TELGU) INTERNAL</th>
<th>BCA101T(IL SANSKRIT) THEORY</th>
<th>BCA101T(IL SANSKRIT) INTERNAL</th>
<th>BCA102T(ENGLISH) THEORY</th>
<th>BCA102T(ENGLISH) INTERNAL</th>
<th>BCA103T(C) THEORY</th>
<th>BCA103T(C) INTERNAL</th>
<th>BCA104T(DE) THEORY</th>
<th>BCA104T(DE) INTERNAL</th>
<th>BCA105T(DISCRETE MANTHEMATICS) THEORY</th>
<th>BCA105T(DISCRETE MANTHEMATICS) INTERNAL</th>
<th>BCA103P(C LAB) THEORY</th>
<th>BCA103P(C LAB) INTERNAL</th>
<th>BCA104P(DE LAB) THEORY</th>
<th>BCA104P(DE LAB) INTERNAL</th>
<th>EPH THEORY</th>
<th>EPH INTERNAL</th>
<th>CCEC</th>
<th>TOTAL THEORY</th>
<th>TOTAL INTERNAL</th>
<th>GPA</th>
<th>GRADE</th>
<th>RESULT</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($records))
  {
	  echo "<tr><form action=update1.php method=post>";
	  echo "<td><input type=text name=regno value='".$row['regno']."'></td>";
	  echo "<td><input type=text name=name value='".$row['name']."'></td>";
	   echo "<td><input type=text name=il_hindi_theory value='".$row['il_hindi_theory']."'></td>";
	  echo "<td><input type=text name=il_hindi_internal value='".$row['il_hindi_internal']."'></td>";
	    echo "<td><input type=text name=il_additional_english_theory value='".$row['il_additional_english_theory']."'></td>";
	  echo "<td><input type=text name=il_additional_english_internal value='".$row['il_additional_english_internal']."'></td>";
	   echo "<td><input type=text name=il_kannada_theory value='".$row['il_kannada_theory']."'></td>";
	  echo "<td><input type=text name=il_kannada_internal value='".$row['il_kannada_internal']."'></td>";
	    echo "<td><input type=text name=il_tamil_theory value='".$row['il_tamil_theory']."'></td>";
	  echo "<td><input type=text name=il_tamil_internal value='".$row['il_tamil_internal']."'></td>";
	     echo "<td><input type=text name=il_telgu_theory value='".$row['il_telgu_theory']."'></td>";
	  echo "<td><input type=text name=il_telgu_internal value='".$row['il_telgu_internal']."'></td>";
	    echo "<td><input type=text name=il_sanskrit_theory value='".$row['il_sanskrit_theory']."'></td>";
	  echo "<td><input type=text name=il_sanskrit_internal value='".$row['il_sanskrit_internal']."'></td>";
	     echo "<td><input type=text name=english_theory value='".$row['english_theory']."'></td>";
	  echo "<td><input type=text name=english_internal value='".$row['english_internal']."'></td>";
	    echo "<td><input type=text name=c_programming_theory value='".$row['c_programming_theory']."'></td>";
	  echo "<td><input type=text name=c_programming_internal value='".$row['c_programming_internal']."'></td>";
	      echo "<td><input type=text name=de_theory value='".$row['de_theory']."'></td>";
	  echo "<td><input type=text name=de_internal value='".$row['de_internal']."'></td>";
	  
	  
	  	    echo "<td><input type=text name=dm_theory value='".$row['dm_theory']."'></td>";
	  echo "<td><input type=text name=dm_internal value='".$row['dm_internal']."'></td>";
	     echo "<td><input type=text name=c_lab_theory value='".$row['c_lab_theory']."'></td>";
	  echo "<td><input type=text name=c_lab_internal value='".$row['c_lab_internal']."'></td>";
	    echo "<td><input type=text name=de_lab_theory value='".$row['de_lab_theory']."'></td>";
	  echo "<td><input type=text name=de_lab_internal value='".$row['de_lab_internal']."'></td>";
	      echo "<td><input type=text name=eph_theory value='".$row['eph_theory']."'></td>";
	  echo "<td><input type=text name=eph_internal value='".$row['eph_internal']."'></td>";
	  
	  
	  
	  
	  
	  
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
