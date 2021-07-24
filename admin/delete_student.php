<?php
session_start();
if(isset($_SESSION['admin'])=="")
{
	header("location:index.php?stop=1");
	exit(0);
}
include("connect.php");
$i=$_REQUEST['did'];
mysqli_query($con,"delete from student where SID=$i")or die ("error". $con -> error);
header("location:show_student.php?f2=2");
?>