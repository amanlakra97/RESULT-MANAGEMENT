<?php
session_start();
$con=Mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'report');
$sql ="update 5sem set name='$_POST[name]',dcn_theory='$_POST[dcn_theory]',dcn_internal='$_POST[dcn_internal]',se_theory='$_POST[se_theory]',se_internal='$_POST[se_internal]',ca_theory='$_POST[ca_theory]',ca_internal='$_POST[ca_internal]',java_theory='$_POST[java_theory]',java_internal='$_POST[java_internal]',alp_theory='$_POST[alp_theory]',alp_internal='$_POST[alp_internal]',java_lab_theory='$_POST[java_lab_theory]',java_lab_internal='$_POST[java_lab_internal]',alp_lab_theory='$_POST[alp_lab_theory]',alp_lab_internal='$_POST[alp_lab_internal]',project_theory='$_POST[project_theory]',project_internal='$_POST[project_internal]',bf_theory='$_POST[bf_theory]',bf_internal='$_POST[bf_internal]',total_theory='$_POST[total_theory]',total_internal='$_POST[total_internal]',gpa='$_POST[gpa]',grade='$_POST[grade]',result='$_POST[result]' where regno='$_POST[regno]'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=update5sem.php");
else
	echo '<script type="text/javascript"> alert("Not Updated") </script>';
?>