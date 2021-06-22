<html>
<head>
<title></title>
<link rel="stylesheet" href="import2.css">
</head>
<body>
<div id="header">
<h1>Import Details</h1>
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
<form enctype="multipart/form-data" method="post" role="form" action="imp6.php" class="import">
    <div class="form-group">
        <label for="exampleInputFile">Upload 6 Semester File</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
</center>
<?php
if(isset($_POST["submit"]))
{

                
                $conn=mysqli_connect("localhost","root","","report");
          if(!$conn){
          die('Could not Connect My Sql:' .mysqli_error());
		  }
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
          $regno = $filesop[0];
          $name = $filesop[1];
		  $toc_theory = $filesop[2];
		  $toc_internal = $filesop[3];
		    $sp_theory = $filesop[4];
		  $sp_internal = $filesop[5];
		    $cns_theory = $filesop[6];
		  $cns_internal = $filesop[7];
		    $wp_theory = $filesop[8];
		  $wp_internal = $filesop[9];
		  $wp_lab_theory = $filesop[10];
		  $wp_lab_internal = $filesop[11];
		  $project_theory = $filesop[12];
		  $project_internal = $filesop[13];
		    $ei_theory = $filesop[14];
		  $ei_internal = $filesop[15];
		    $total_theory = $filesop[16];
		  $total_internal = $filesop[17];
		  $gpa = $filesop[18];
		    $grade = $filesop[19];
		  $result = $filesop[20];
          $sql = "insert into 5sem(regno,name,toc_theory,toc_internal,sp_theory,sp_internal,cns_theory,cns_internal,wp_theory,wp_internal,wp_lab_theory,wp_lab_internal,project_theory,project_internal,ei_theory,ei_internal,total_theory,total_internal,gpa,grade,result) values ('$regno','$name','$toc_theory','$toc_internal','$sp_theory','$sp_internal','$cns_theory','$cns_internal','$wp_theory','$wp_internal','$wp_lab_theory','$wp_lab_internal','$project_theory','$project_internal','$ei_theory','$ei_internal','$total_theory','$total_internal','$gpa','$grade','$result')";
          $stmt = mysqli_prepare($conn,$sql);
          mysqli_stmt_execute($stmt);

         $c = $c + 1;
           }

            if($sql){
              echo'<script type="text/javascript"> alert("Data Uploaded Sucessfully")</script>';
             } 
		 else
		 {
            echo'<script type="text/javascript"> alert("Sorry! Unable to import.")</script>';
          }

}
?>
<center>
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Select Semester
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="imp1.php">1 Semester</a>
      <a href="imp2.php">2 Semester</a>
      <a href="imp3.php">3 Semester</a>
	  <a href="imp4.php">4 Semester</a>
      <a href="imp5.php">5 Semester</a>
      <a href="imp6.php">6 Semester</a>
    </div>
  </div> 
</div>
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



