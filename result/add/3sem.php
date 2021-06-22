<?php
require 'config/config.php';
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="3sem.css">
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
        <label for="name">NAME OF THE STUDENT</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub1">BCA201T(INDIAN LANGUAGE) THEORY</label>
      </div>
	  <div class="col-75">
        <input type="text" id="ilhint" name="ilhint" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub1">BCA201T(INDIAN LANGUAGE) INTERNAL</label>
		</div>
      <div class="col-75">
        <input type="text" id="ilhini" name="ilhini" >
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="sub2">BCA301T(ENGLISH) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="engt" name="engt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub2">BCA302T(ENGLISH) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="engi" name="engi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub3">BCA303T(C++) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="cppt" name="cppt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub3">BCA303T(C++) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="cppi" name="cppi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub4">BCA304T(AFM) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="afmt" name="afmt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub4">BCA304T(AFM) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="afmi" name="afmi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub5">BCA305T(OS) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="ost" name="ost" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub5">BCA305T(OS) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="osi" name="osi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub6">BCA303P(C++ LAB) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="cpplabt" name="cpplabt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub6">BCA303P(C++ LAB) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="cpplabi" name="cpplabi" >
      </div>
    </div>
		
	<div class="row">
      <div class="col-25">
        <label for="sub7">BCA304P(AFM LAB) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="afmlabt" name="afmlabt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub7">BCA304P(AFM LAB) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="afmlabi" name="afmlabi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub8">CDS THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="cdst" name="cdst" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub8">CDS INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="cdsi" name="cdsi" >
      </div>
    </div>
		<div class="row">
      <div class="col-25">
        <label for="sub9">CCEC</label>
      </div>
      <div class="col-75">
        <input type="text" id="ccec" name="ccec" >
      </div>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="tot">TOTAL THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="tott" name="tott" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="tot">TOTAL INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="toti" name="toti" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="gpa">GPA</label>
      </div>
      <div class="col-75">
        <input type="text" id="gpa" name="gpa" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="grade">GRADE</label>
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
	$ilt = $_POST['ilt'];
	$ili = $_POST['ili'];

	$engt = $_POST['engt'];
	$engi = $_POST['engi'];
	$cppt = $_POST['cppt'];
	$cppi = $_POST['cppi'];
	$afmt = $_POST['afmt'];
	$afmi = $_POST['afmi'];
	$ost = $_POST['ost'];
	$osi = $_POST['osi'];
	$cpplabt = $_POST['cpplabt'];
	$cpplabi = $_POST['cpplabi'];
	$afmlabt = $_POST['afmlabt'];
	$afmlabi = $_POST['afmlabi'];
	$cdst = $_POST['cdst'];
	$cdsi = $_POST['cdsi'];
	$ccec = $_POST['ccec'];
	$tott = $_POST['tott'];
	$toti = $_POST['toti'];
	$gpa = $_POST['gpa'];
	$grade = $_POST['grade'];
	$result = $_POST['result'];
			$query="insert into 3sem values('$regno','$name','$ilt','$ili','$engt','$engi','$cppt','$cppi','$afmt','$afmi','$ost','$osi','$cpplabt','$cpplabi','$afmlabt','$afmlabi','$cdst','$cdsi','$ccec','$tott','$toti','$gpa','$grade','$result')";
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



