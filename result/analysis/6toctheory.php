<?php
 $con = mysqli_connect('localhost','root','','report');
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="semanalysis.css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div class="cont">
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
<center>
<div class="main1">
<div id="chartContainer" style="height:570px; width:285%;margin-top:50px;margin-left:200px;">
<?php
$sql="select toc_theory,count(regno) as distinction from 6sem where toc_theory between 75 and 100";
$query=mysqli_query($con,$sql);
while($rs=mysqli_fetch_assoc($query)){
	$d1=$rs['distinction'];
	}
$sql="select toc_theory,count(regno) as first from 6sem where toc_theory between 60 and 74";
$query=mysqli_query($con,$sql);
while($rs=mysqli_fetch_assoc($query)){
	$d2=$rs['first'];
	}
$sql="select toc_theory,count(regno) as second from 6sem where toc_theory between 50 and 59";
$query=mysqli_query($con,$sql);
while($rs=mysqli_fetch_assoc($query)){
	$d3=$rs['second'];
	}
$sql="select toc_theory,count(regno) as pass from 6sem where toc_theory between 35 and 50";
$query=mysqli_query($con,$sql);
while($rs=mysqli_fetch_assoc($query)){
	$d4=$rs['pass'];
	}
$sql="select toc_theory,count(regno) as minimum from 6sem where toc_theory between 1 and 34";
$query=mysqli_query($con,$sql);
while($rs=mysqli_fetch_assoc($query)){
	$d5=$rs['minimum'];
	}
$dataPoints = array(
    array("label"=> "Distinction", "y"=> $d1),
	array("label"=> "1st Distinction", "y"=> $d2),
	array("label"=> "2nd Distinction", "y"=> $d3),
	array("label"=> "Pass", "y"=> $d4),
	array("label"=> "Minimum", "y"=> $d5),
	
	);
?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "THEORY OF COMPUTATION"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</div>
</div>
</div>
<div id="bottom">

<div class="btn9">
<form action="6toctheory.php" method="post">
<input type="submit" name="1submit_btn" value="Go Back">
 </form>
	  <?php
if(isset($_POST['1submit_btn']))
{
header('location:6semanalysis.php');
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