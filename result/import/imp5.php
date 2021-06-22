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
<form enctype="multipart/form-data" method="post" role="form" action="imp5.php" class="import">
    <div class="form-group">
        <label for="exampleInputFile">Upload 5 Semester File</label>
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
		  $dcn_theory = $filesop[2];
		  $dcn_internal = $filesop[3];
		    $se_theory = $filesop[4];
		  $se_internal = $filesop[5];
		    $ca_theory = $filesop[6];
		  $ca_internal = $filesop[7];
		    $java_theory = $filesop[8];
		  $java_internal = $filesop[9];
		    $alp_theory = $filesop[10];
		  $alp_internal = $filesop[11];
		  $java_lab_theory = $filesop[12];
		  $java_lab_internal = $filesop[13];
		    $alp_lab_theory = $filesop[14];
		  $alp_lab_internal = $filesop[15];
		    $project_theory = $filesop[16];
		  $project_internal = $filesop[17];
		    $bf_theory = $filesop[18];
		  $bf_internal = $filesop[19];
		    $total_theory = $filesop[20];
		  $total_internal = $filesop[21];
		  $gpa = $filesop[22];
		    $grade = $filesop[23];
		  $result = $filesop[24];
          $sql = "insert into 5sem(regno,name,dcn_theory,dcn_internal,se_theory,se_internal,ca_theory,ca_internal,java_theory,java_internal,alp_theory,alp_internal,java_lab_theory,java_lab_internal,alp_lab_theory,alp_lab_internal,project_theory,project_internal,bf_theory,bf_internal,total_theory,total_internal,gpa,grade,result) values ('$regno','$name','$dcn_theory','$dcn_internal','$se_theory','$se_internal','$ca_theory','$ca_internal','$java_theory','$java_internal','$alp_theory','$alp_internal','$java_lab_theory','$java_lab_internal','$alp_lab_theory','$alp_lab_internal','$project_theory','$project_internal','$bf_theory','$bf_internal','$total_theory','$total_internal','$gpa','$grade','$result')";
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



