<?php
require 'config/config.php';
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="semanalysis.css">
</head>
<body>
<div id="header">
<h1>Result Analysis</h1>
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

<div id="bottom">

<div class="btn1">
<form action="2semanalysis.php" method="post">
<input type="submit" name="1submit_btn" value="ENGLISH">
 </form>
	  <?php
if(isset($_POST['1submit_btn']))
{
header('location:2englishtheory.php');
	}
	?>
</div>

<div class="btn2">
<form action="2semanalysis.php" method="post">
<input type="submit" name="2submit_btn" value="DS">
 </form>
	  <?php
if(isset($_POST['2submit_btn']))
{
header('location:2dstheory.php');
	}
	?>
</div>

<div class="btn3">
<form action="2semanalysis.php" method="post">
<input type="submit" name="3submit_btn" value="DBMS">
 </form>
	  <?php
if(isset($_POST['3submit_btn']))
{
header('location:2dbmstheory.php');
	}
	?>
</div>

<div class="btn4">
<form action="2semanalysis.php" method="post">
<input type="submit" name="4submit_btn" value="NSM">
 </form>
	  <?php
if(isset($_POST['4submit_btn']))
{
header('location:2nsmtheory.php');
	}
	?>
</div>

<div class="btn5">
<form action="2semanalysis.php" method="post">
<input type="submit" name="5submit_btn" value="DS LAB">
 </form>
	  <?php
if(isset($_POST['5submit_btn']))
{
header('location:2dslabtheory.php');
	}
	?>
</div>

<div class="btn6">
<form action="2semanalysis.php" method="post">
<input type="submit" name="6submit_btn" value="DBMS LAB">
 </form>
	  <?php
if(isset($_POST['6submit_btn']))
{
header('location:2dbmslabtheory.php');
	}
	?>
</div>



<div class="btn7">
<form action="2semanalysis.php" method="post">
<input type="submit" name="7submit_btn" value="ICHR">
 </form>
	  <?php
if(isset($_POST['7submit_btn']))
{
header('location:2ichrlabtheory.php');
	}
	?>
</div>

<div class="btn8">
<form action="2semanalysis.php" method="post">
<input type="submit" name="8submit_btn" value="TOTAL">
 </form>
	  <?php
if(isset($_POST['8submit_btn']))
{
header('location:2totaltheory.php');
	}
	?>
</div>
<form>
<div class="det">
		<h5>2nd SEMESTER SUBJECT DETAILS</h5>
		<p>1. Indian Languages</p>
		<p>2. English</p>
		<p>3. Data Structures</p>
		<p>4. Database Management System</p>
		<p>5. Numerical and Statistical Methods</p>
		<p>6. Data Structures LAB</p>
		<p>7. DBMS Lab</p>
		<p>8. Foundation Course</p>
		<p>9. CC & EC</p>
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



