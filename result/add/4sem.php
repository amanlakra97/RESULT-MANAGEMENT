<?php
require 'config/config.php';
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="4sem.css">
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
        <label for="sub2">BCA402T(ENGLISH) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="engt" name="engt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub2">BCA402T(ENGLISH) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="engi" name="engi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub3">BCA403T(VP) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="vpt" name="vpt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub3">BCA403T(VP) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="vpi" name="vpi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub4">BCA404T(UNIX) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="unixt" name="unixt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub4">BCA404T(UNIX) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="unixi" name="unixi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub5">BCA405T(OR) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="ort" name="ort" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub5">BCA405T(OR) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="ori" name="ori" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub6">BCA403P(VP LAB) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="vplabt" name="vplabt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub6">BCA403P(VP LAB) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="vplabi" name="vplabi" >
      </div>
    </div>
		
	<div class="row">
      <div class="col-25">
        <label for="sub7">BCA404P(UNIX LAB) THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="unixlabt" name="unixlabt" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub7">BCA404P(UNIX LAB) INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="unixlabi" name="unixlabi" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub8">SDC THEORY</label>
      </div>
      <div class="col-75">
        <input type="text" id="sdct" name="sdct" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sub8">SDC INTERNAL</label>
      </div>
      <div class="col-75">
        <input type="text" id="sdci" name="sdci" >
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
	$vpt = $_POST['vpt'];
	$vpi = $_POST['vpi'];
	$unixt = $_POST['unixt'];
	$unixi = $_POST['unixi'];
	$ort = $_POST['ort'];
	$ori = $_POST['ori'];
	$vplabt = $_POST['vplabt'];
	$vplabi = $_POST['vplabi'];
	$unixlabt = $_POST['unixlabt'];
	$unixlabi = $_POST['unixlabi'];
	$sdct = $_POST['sdct'];
	$sdci = $_POST['sdci'];
	$ccec = $_POST['ccec'];
	$tott = $_POST['tott'];
	$toti = $_POST['toti'];
	$gpa = $_POST['gpa'];
	$grade = $_POST['grade'];
	$result = $_POST['result'];
			$query="insert into 4sem values('$regno','$name','$ilt','$ili','$engt','$engi','$vpt','$vpi','$unixt','$unixi','$ort','$ori','$vplabt','$vplabi','$unixlabt','$unixlabi','$sdct','$sdci','$ccec','$tott','$toti','$gpa','$grade','$result')";
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



