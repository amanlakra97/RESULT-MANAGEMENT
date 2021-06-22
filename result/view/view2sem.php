<?php
session_start();
$con=Mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'report');
?>

<html>
<head>
<title></title>
<link rel="stylesheet" href="viewsemsem.css">
</head>
<body>
<div id="header">
<h1>2ND Semester Details</h1>
</div>
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



<form>
  <div class="content">
<table border="1">
<tr>
<th>REG. NO.</th>
<th>NAME OF THE STUDENT</th>
<th>BCA101T(INDIAN LANGUAGE) THEORY</th>
<th>BCA101T(INDIAN LANGUAGE) INTERNAL</th>
<th>BCA202T(ENGLISH) THEORY</th>
<th>BCA202T(ENGLISH) INTERNAL</th>
<th>BCA203T(DS) THEORY</th>
<th>BCA203T(DS) INTERNAL</th>
<th>BCA204T(DBMS) THEORY</th>
<th>BCA204T(DBMS) INTERNAL</th>
<th>BCA205T(NSM) THEORY</th>
<th>BCA205T(NSM) INTERNAL</th>
<th>BCA203P(DS LAB) THEORY</th>
<th>BCA203P(DS LAB) INTERNAL</th>
<th>BCA204P(DBMS LAB) THEORY</th>
<th>BCA204P(DBMS LAB) INTERNAL</th>
<th>ICHR THEORY</th>
<th>ICHR INTERNAL</th>
<th>CCEC</th>
<th>TOTAL THEORY</th>
<th>TOTAL INTERNAL</th>
<th>GPA</th>
<th>GRADE</th>
<th>RESULT</th>
</tr>
  <?php
  $query="select * from 2sem";
   $query_run = mysqli_query($con,$query);

  
     if($query_run -> num_rows > 0){
		 while($row =$query_run -> fetch_assoc()){
			 echo "<tr><td>".$row["regno"]."</td><td>".$row["name"]."</td><td>".$row["il_theory"]."</td><td>".$row["il_internal"]."</td><td>".$row["english_theory"]."</td><td>".$row["english_internal"]."</td><td>".$row["ds_theory"]."</td><td>".$row["ds_internal"]."</td><td>".$row["dbms_theory"]."</td><td>".$row["dbms_internal"]."</td><td>".$row["nsm_theory"]."</td><td>".$row["nsm_internal"]."</td><td>".$row["ds_lab_theory"]."</td><td>".$row["ds_lab_internal"]."</td><td>".$row["dbms_lab_theory"]."</td><td>".$row["dbms_lab_internal"]."</td><td>".$row["ichr_theory"]."</td><td>".$row["ichr_internal"]."</td><td>".$row["ccec"]."</td><td>".$row["total_theory"]."</td><td>".$row["total_internal"]."</td><td>".$row["gpa"]."</td><td>".$row["grade"]."</td><td>".$row["result"]."</td></tr>";
			 
		 }
	 }
	 else{
		 echo "0 result";
	 }
	 
	 ?>
	 
  
  </table>
  
  
</div>
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



