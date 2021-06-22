<?php
require 'config/config.php';
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="5sem.css">
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
<center>
<form method="post">
<div class="container">
  <form action="add.php">
    <div class="row">
      <div class="col-25">
        <label for="regno">REG. NO.</label>
      </div>
      <div class="col-75">
        <input type="text" id="regno" name="regno">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="name">NAME OF THE STUDENT </label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub1">SB7115(DCN) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="dcnt" name="dcnt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub1">SB7115(DCN) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="dcni" name="dcni" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub2">SB7116(SE) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="set" name="set" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub2">SB7116(SE) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="sei" name="sei" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub3">SB7117(CA) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="cat" name="cat" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub3">SB7117(CA) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="cai" name="cai" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub4">SB7118(JAVA) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="javat" name="javat" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub4">SB7118(JAVA) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="javai" name="javai" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub5">SB7119(ALP) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="alpt" name="alpt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub5">SB7119(ALP) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="alpi" name="alpi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub6">SB73P9(JAVA LAB) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="javalabt" name="javalabt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub6">SB73P9(JAVA LAB) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="javalabi" name="javalabi" >
      </div>
    </div>
		
	<div class="row">
      <div class="col-25">
        <label for="sub7">SB73PA(ALP LAB) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="alplabt" name="alplabt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub7">SB73PA(ALP LAB) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="alplabi" name="alplabi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub8">SB73PB(PROJECT) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="projectt" name="projectt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub8">SB73PB(PROJECT) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="projecti" name="projecti" >
      </div>
    </div>
		<div class="row">
      <div class="col-25">
        <label for="sub9">SB73PE(B & F) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="bft" name="bft" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub9">SB73PE(B & F) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="bfi" name="bfi" >
      </div>
    </div>
		
	<div class="row">
      <div class="col-25">
        <label for="tot">TOTAL THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="tott" name="tott" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="tot">TOTAL INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="toti" name="toti" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="gpa">GPA </label>
      </div>
      <div class="col-75">
        <input type="text" id="gpa" name="gpa" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="grade">GRADE </label>
      </div>
      <div class="col-75">
        <input type="text" id="grade" name="grade" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="result">RESULT</label>
      </div>
      <div class="col-75">
        <input type="text" id="result" name="result" >
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>
</form>
</center>
<center>
	<?php
	if(isset($_POST['submit']))
{
	//echo '<script type="text/javascript"> alert("signup button clicked") </script>';
	$regno = $_POST['regno'];
	$name = $_POST['name'];
	$dcnt = $_POST['dcnt'];
	$dcni = $_POST['dcni'];
	$set = $_POST['set'];
	$sei = $_POST['sei'];
	$cat = $_POST['cat'];
	$cai = $_POST['cai'];
	$javat = $_POST['javat'];
	$javai = $_POST['javai'];
	$alpt = $_POST['alpt'];
	$alpi = $_POST['alpi'];
	$javalabt = $_POST['javalabt'];
	$javalabi = $_POST['javalabi'];
	$alplabt = $_POST['alplabt'];
	$alplabi = $_POST['alplabi'];
	$projectt = $_POST['projectt'];
	$projecti = $_POST['projecti'];
	$bft = $_POST['bft'];
	$bfi = $_POST['bfi'];
	$tott = $_POST['tott'];
	$toti = $_POST['toti'];
	$gpa = $_POST['gpa'];
	$grade = $_POST['grade'];
	$result = $_POST['result'];
			$query="insert into 5sem values('$regno','$name','$dcnt','$dcni','$set','$sei','$cat','$cai','$javat','$javai','$alpt','$alpi','$javalabt','$javalabi','$alplabt','$alplabi','$projectt','$projecti','$bft','$bfi','$tott','$toti','$gpa','$grade','$result')";
			$query_run= mysqli_query($con,$query);
			if($query_run)
			{
				echo'<script type="text/javascript"> alert("Data Uploaded Sucessfully")</script>';
			}
			else
			{
				echo'<script type="text/javascript"> alert("Duplicate Data Not Allowed")</script>';
			}
}
	?>
	</center>

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



