<?php
session_start();
if(isset($_SESSION['admin'])=="")
{
	header("location:index.php?stop=1");
	exit(0);
}
include("connect.php");
$i=$_REQUEST['did'];
mysql_query("delete from inquiry where iid=$i")or die ("QF");
header("location:show_inquiry.php?i2=2");
?>