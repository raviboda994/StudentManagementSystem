<?php session_start();
if(isset($_SESSION['admin'])=="")
{
	header("location:index.php?stop=1");
	exit(0);
}
if(isset($_REQUEST['Submit']))
{
include("connect.php");
extract($_POST);

$fn=$_FILES['p_file']['name'];
$path="papers_file/";
$npath=$path.$fn;
move_uploaded_file($_FILES['p_file']['tmp_name'],$npath);

mysqli_query($con,"insert into papers (c_name,sem,sub_name,p_file) values ('$cnm','$scm','$smm','$fn')")or die("qf");
header ("location:show_papers.php?p1=1");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Student Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="kw here" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <?php include("logo.php");?>
          </div>
          <?php include("menu.php");?>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				 
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				 <!--//end-search-box-->
				
				<?PHP include("top.php");?>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">Add New Paper </h2>
				 
				  <form action="" method="post" enctype="multipart/form-data" name="form1">
				    <table width="70%" height="250" align="center" style="border-style:groove; border-color:#169DA5">
                      <tr>
                        <td>&nbsp;
                        <p>&nbsp;&nbsp;Enter Course Name</p>                        </td><td>:</td>
                        <td>
                        	<select name="cnm" class="main-page" id="cnm" required autofocus>
                        		<option value="pick">Select</option>
                        		<?php
                        		$sql = mysqli_query($con, "SELECT c_name From course");
                        		$row = mysqli_num_rows($sql);
                        		while ($row = mysqli_fetch_array($sql)){
                        			echo "<option value='". $row['c_name'] ."'>" .$row['c_name'] ."</option>" ;
                        		}
                        		?>
                        	</select>
                        </td>
                        <!-- <td><input name="cnm" type="text" id="cnm" required autofocus></td> -->
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;Enter sem </td>
                        <td>:</td>
                        <td><input name="scm" type="text" id="scm" required autofocus></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;Enter Sub Name </td>
                        <td>:</td>
                        <td><input name="smm" type="text" id="smm" required autofocus></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;Upload Paper </td>
                        <td>:</td>
                        <td><input name="p_file" type="file" id="p_file" required autofocus></td>
                      </tr>
                      <tr>
                        <td colspan="3"><div align="center">
                          <input class="btn btn-danger" type="submit" name="Submit" value="Add">
                        </div></td>
                      </tr>
                    </table>
				    <em>                                                                          </em>
	          </form>
				  <p>&nbsp;</p>
				 <div class="clearfix"> </div>	
			</div>
				
			</div>
		</div>

		<!--footer-->
		<?php include("footer.php");?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>

<script language="javascript">
function fun1()
{
	if(form1.cnm.value=="")
	{
		alert("Enter course Name");
		return false;
	}
	else if(form1.scm.value=="")
	{
		alert("enter sem");
		return false;
	}
	else if(form1.smm.value=="")
	{
		alert(" EWnter subject name");
		return false;
	}
	else if(form1.p_file.value=="")
	{
		alert("Enter upload file");
		return false;
	}

</script>