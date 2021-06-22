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
<h1>6TH Semester Details</h1>
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


<div class="content">
  <table border="1">
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
  $query="select * from 6sem";
   $query_run = mysqli_query($con,$query);

  
     if($query_run -> num_rows > 0){
		 while($row =$query_run -> fetch_assoc()){
			 echo "<tr><td>".$row["regno"]."</td><td>".$row["name"]."</td><td>".$row["toc_theory"]."</td><td>".$row["toc_internal"]."</td><td>".$row["sp_theory"]."</td><td>".$row["sp_internal"]."</td><td>".$row["cns_theory"]."</td><td>".$row["cns_internal"]."</td><td>".$row["wp_theory"]."</td><td>".$row["wp_internal"]."</td><td>".$row["wp_lab_theory"]."</td><td>".$row["wp_lab_internal"]."</td><td>".$row["project_theory"]."</td><td>".$row["project_internal"]."</td><td>".$row["ei_theory"]."</td><td>".$row["ei_internal"]."</td><td>".$row["total_theory"]."</td><td>".$row["total_internal"]."</td><td>".$row["gpa"]."</td><td>".$row["grade"]."</td><td>".$row["result"]."</td></tr>";
			 
		 }
	 }
	 else{
		 echo "0 result";
	 }
	 
	 ?>
	 
  
  </table>
  
  
</div>




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



