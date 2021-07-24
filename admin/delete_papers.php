<?php
session_start();
if(isset($_SESSION['admin'])=="")
{
	header("location:index.php?stop=1");
	exit(0);
}
include("connect.php");
$i=$_REQUEST['did'];
mysqli_query($con,"delete from papers where pid=$i")or die ("QF");
header("location:show_papers.php?p2=2");
?>