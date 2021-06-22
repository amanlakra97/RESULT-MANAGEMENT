<?php
session_start();
$con=Mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'report');
$sql ="update 6sem set name='$_POST[name]',toc_theory='$_POST[toc_theory]',toc_internal='$_POST[toc_internal]',sp_theory='$_POST[sp_theory]',sp_internal='$_POST[sp_internal]',cns_theory='$_POST[cns_theory]',cns_internal='$_POST[cns_internal]',wp_theory='$_POST[wp_theory]',wp_internal='$_POST[wp_internal]',wp_lab_theory='$_POST[wp_lab_theory]',wp_lab_internal='$_POST[wp_lab_internal]',project_theory='$_POST[project_theory]',project_internal='$_POST[project_internal]',ei_theory='$_POST[ei_theory]',ei_internal='$_POST[ei_internal]',total_theory='$_POST[total_theory]',total_internal='$_POST[total_internal]',gpa='$_POST[gpa]',grade='$_POST[grade]',result='$_POST[result]' where regno='$_POST[regno]'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=update6sem.php");
else
	echo '<script type="text/javascript"> alert("Not Updated") </script>';
?>