<?php
require 'config/config.php';
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="add1.css">
</head>
<body>
<div id="header">
<h1>Add Details</h1>
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
<form action="add1.php" method="post">
<input type="submit" name="1submit_btn" value="1 Semester">
 </form>
	  <?php
if(isset($_POST['1submit_btn']))
{
header('location:1sem.php');
	}
	?>
</div>

<div class="btn2">
<form action="add1.php" method="post">
<input type="submit" name="2submit_btn" value="2 Semester">
 </form>
	  <?php
if(isset($_POST['2submit_btn']))
{
header('location:2sem.php');
	}
	?>
</div>

<div class="btn3">
<form action="add1.php" method="post">
<input type="submit" name="3submit_btn" value="3 Semester">
 </form>
	  <?php
if(isset($_POST['3submit_btn']))
{
header('location:3sem.php');
	}
	?>
</div>

<div class="btn4">
<form action="add1.php" method="post">
<input type="submit" name="4submit_btn" value="4 Semester">
 </form>
	  <?php
if(isset($_POST['4submit_btn']))
{
header('location:4sem.php');
	}
	?>
</div>

<div class="btn5">
<form action="add1.php" method="post">
<input type="submit" name="5submit_btn" value="5 Semester">
 </form>
	  <?php
if(isset($_POST['5submit_btn']))
{
header('location:5sem.php');
	}
	?>
</div>

<div class="btn6">
<form action="add1.php" method="post">
<input type="submit" name="6submit_btn" value="6 Semester">
 </form>
	  <?php
if(isset($_POST['6submit_btn']))
{
header('location:6sem.php');
	}
	?>
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



