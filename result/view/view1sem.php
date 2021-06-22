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
<div id="header" ">
<h1>1ST Semester Details</h1>
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
  $query="select * from 1sem";
   $query_run = mysqli_query($con,$query);

  
     if($query_run -> num_rows > 0){
		 while($row =$query_run -> fetch_assoc()){
			 echo "<tr><td>".$row["regno"]."</td><td>".$row["name"]."</td><td>".$row["il_theory"]."</td><td>".$row["il_internal"]."</td><td>".$row["english_theory"]."</td><td>".$row["english_internal"]."</td><td>".$row["c_programming_theory"]."</td><td>".$row["c_programming_internal"]."</td><td>".$row["de_theory"]."</td><td>".$row["de_internal"]."</td><td>".$row["dm_theory"]."</td><td>".$row["dm_internal"]."</td><td>".$row["c_lab_theory"]."</td><td>".$row["c_lab_theory"]."</td><td>".$row["de_lab_theory"]."</td><td>".$row["de_lab_internal"]."</td><td>".$row["eph_theory"]."</td><td>".$row["eph_internal"]."</td><td>".$row["ccec"]."</td><td>".$row["total_theory"]."</td><td>".$row["total_internal"]."</td><td>".$row["gpa"]."</td><td>".$row["grade"]."</td><td>".$row["result"]."</td></tr>";
			 
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



