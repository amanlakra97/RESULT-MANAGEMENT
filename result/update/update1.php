<?php
session_start();
$con=Mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'report');
$sql ="update 1sem set name='$_POST[name]',il_hindi_theory='$_POST[il_hindi_theory]',il_hindi_internal='$_POST[il_hindi_internal]',il_additional_english_theory='$_POST[il_additional_english_theory]',il_additional_english_internal='$_POST[il_additional_english_internal]',il_kannada_theory='$_POST[il_kannada_theory]',il_kannada_internal='$_POST[il_kannada_internal]',il_tamil_theory='$_POST[il_tamil_theory]',il_tamil_internal='$_POST[il_tamil_internal]',il_telgu_theory='$_POST[il_telgu_theory]',il_telgu_internal='$_POST[il_telgu_internal]',il_sanskrit_theory='$_POST[il_sanskrit_theory]',il_sanskrit_internal='$_POST[il_sanskrit_internal]',english_theory='$_POST[english_theory]',english_internal='$_POST[english_internal]',c_programming_theory='$_POST[c_programming_theory]',c_programming_internal='$_POST[c_programming_internal]',de_theory='$_POST[de_theory]',de_internal='$_POST[de_internal]',dm_theory='$_POST[dm_theory]',dm_internal='$_POST[dm_internal]',c_lab_theory='$_POST[c_lab_theory]',c_lab_internal='$_POST[c_lab_internal]',de_lab_theory='$_POST[de_lab_theory]',de_lab_internal='$_POST[de_lab_internal]',eph_theory='$_POST[eph_theory]',eph_internal='$_POST[eph_internal]',total_theory='$_POST[total_theory]',total_internal='$_POST[total_internal]',gpa='$_POST[gpa]',grade='$_POST[grade]',result='$_POST[result]' where regno='$_POST[regno]'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=update1sem.php");
else
	echo '<script type="text/javascript"> alert("Not Updated") </script>';
?>