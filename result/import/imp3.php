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
<form enctype="multipart/form-data" method="post" role="form" action="imp3.php" class="import">
    <div class="form-group">
        <label for="exampleInputFile">Upload 3 Semester File</label>
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
		  $il_theory = $filesop[2];
		  $il_internal = $filesop[3];
		    $english_theory = $filesop[4];
		  $english_internal = $filesop[5];
		    $cpp_theory = $filesop[6];
		  $cpp_internal = $filesop[7];
		    $afm_theory = $filesop[8];
		  $afm_internal = $filesop[9];
		  $os_theory = $filesop[10];
		  $os_internal = $filesop[11];
		    $cpp_lab_theory = $filesop[12];
		  $cpp_lab_internal = $filesop[13];
		    $afm_lab_theory = $filesop[14];
		  $afm_lab_internal = $filesop[15];
		  $cds_theory = $filesop[16];
		  $cds_internal = $filesop[17];
		  	  $ccec = $filesop[18];
		    $total_theory = $filesop[19];
		  $total_internal = $filesop[20];
		  $gpa = $filesop[21];
		    $grade = $filesop[22];
		  $result = $filesop[23];
         $sql = "insert into 3sem(regno,name,il_theory,il_internal,english_theory,english_internal,cpp_theory,cpp_internal,afm_theory,afm_internal,os_theory,os_internal,cpp_lab_theory,cpp_lab_internal,afm_lab_theory,afm_lab_internal,cds_theory,cds_internal,ccec,total_theory,total_internal,gpa,grade,result) values ('$regno','$name','$il_theory','$il_internal','$english_theory','$english_internal','$cpp_theory','$cpp_internal','$afm_theory','$afm_internal','$os_theory','$os_internal','$cpp_lab_theory','$cpp_lab_internal','$afm_lab_theory','$afm_lab_internal','$cds_theory','$cds_internal','$ccec','$total_theory','$total_internal','$gpa','$grade','$result')";
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



