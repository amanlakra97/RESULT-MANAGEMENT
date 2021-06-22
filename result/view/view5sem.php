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
<h1>5TH Semester Details</h1>
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
  $query="select * from 5sem";
   $query_run = mysqli_query($con,$query);

  
     if($query_run -> num_rows > 0){
		 while($row =$query_run -> fetch_assoc()){
			 echo "<tr><td>".$row["regno"]."</td><td>".$row["name"]."</td><td>".$row["dcn_theory"]."</td><td>".$row["dcn_internal"]."</td><td>".$row["se_theory"]."</td><td>".$row["se_internal"]."</td><td>".$row["ca_theory"]."</td><td>".$row["ca_internal"]."</td><td>".$row["java_theory"]."</td><td>".$row["java_internal"]."</td><td>".$row["alp_theory"]."</td><td>".$row["alp_internal"]."</td><td>".$row["java_lab_theory"]."</td><td>".$row["java_lab_internal"]."</td><td>".$row["alp_lab_theory"]."</td><td>".$row["alp_lab_internal"]."</td><td>".$row["project_theory"]."</td><td>".$row["project_internal"]."</td><td>".$row["bf_theory"]."</td><td>".$row["bf_internal"]."</td><td>".$row["total_theory"]."</td><td>".$row["total_internal"]."</td><td>".$row["gpa"]."</td><td>".$row["grade"]."</td><td>".$row["result"]."</td></tr>";
			 
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



