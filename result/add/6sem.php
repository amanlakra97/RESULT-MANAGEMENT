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
        <label for="sub1">BCA601T(TOC) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="toct" name="toct" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub1">BCA601T(TOC) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="toci" name="toci" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub2">BCA602T(SP) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="spt" name="spt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub2">BCA602T(SP) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="spi" name="spi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub3">BCA603T(CNS) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="cnst" name="cnst" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub3">BCA603T(CNS) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="cnsi" name="cnsi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub4">BCA604T(WP) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="wpt" name="wpt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub4">BCA604T(WP) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="wpi" name="wpi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub5">BCA604P(WP LAB) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="wplabt" name="wplabt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub5">BCA604P(WP LAB) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="wplabi" name="wplabi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub6">BCA605P(PROJECT) THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="projectt" name="projectt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub6">BCA605P(PROJECT) INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="projecti" name="projecti" >
      </div>
    </div>
		
	<div class="row">
      <div class="col-25">
        <label for="sub7">EI THEORY </label>
      </div>
      <div class="col-75">
        <input type="text" id="eit" name="eit" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub7">EI INTERNAL </label>
      </div>
      <div class="col-75">
        <input type="text" id="eii" name="eii" >
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
	$toct = $_POST['toct'];
	$toci = $_POST['toci'];
	$spt = $_POST['spt'];
	$spi = $_POST['spi'];
	$cnst = $_POST['cnst'];
	$cnsi = $_POST['cnsi'];
	$wpt = $_POST['wpt'];
	$wpi = $_POST['wpi'];
	$wplabt = $_POST['wplabt'];
	$wplabi = $_POST['wplabi'];
	$projectt = $_POST['projectt'];
	$projecti = $_POST['projecti'];
	$eit = $_POST['eit'];
	$eii = $_POST['eii'];
	$tott = $_POST['tott'];
	$toti = $_POST['toti'];
	$gpa = $_POST['gpa'];
	$grade = $_POST['grade'];
	$result = $_POST['result'];
			$query="insert into 6sem values('$regno','$name','$toct','$toci','$spt','$spi','$cnst','$cnsi','$wpt','$wpi','$wplabt','$wplabi','$projectt','$projecti','$eit','$eii','$tott','$toti','$gpa','$grade','$result')";
			$query_run= mysqli_query($con,$query);
			if($query_run)
			{
				echo'<script type="text/javascript"> alert("Data Uploaded Sucessfully")</script>';
			}
			else
			{
				echo'<script type="text/javascript"> alert("ERROR!")</script>';
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



