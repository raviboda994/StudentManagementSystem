<?php
session_start();
if(isset($_SESSION['admin'])=="")
{
	header("location:index.php?stop=1");
	exit(0);
}
include("connect.php");
$i=$_REQUEST['did'];
mysqli_query($con,"delete from course where cid=$i")or die ("QF");
header("location:show_course.php?c2=2");
?>