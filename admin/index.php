<?php
session_start();
if(isset($_REQUEST['btn']))
{
	include("connect.php");
	extract($_POST);
	$q=mysqli_query($con,"select * from admin where loginid='$lid' and password='$pwd'")or die("QF");
	if(mysqli_num_rows($q))
	{
		$data=mysqli_fetch_array($q);
		$_SESSION['admin']=$data['aid'];
		header("location:home.php");
	}
	else
	{
		header("location:index.php?m2=2");
	}
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

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

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
            
          </div>
          
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
				
				 
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
		  <p align="center"><img src="../images/logo.png" width="330" height="75"></p>
		  <div class="main-page login-page ">
				<h2 class="title1">Admin Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="index.php" name="form1" id="form1" method="post">
							<input name="lid" type="text" class="user" id="lid" placeholder="Enter Login ID" required="">
							<input name="pwd" type="password" class="lock" id="pwd" placeholder="Password" required="">
							 
							<input type="submit" name="btn" value="Sign In">
							 
						</form>
					</div>
				</div>
				
		  </div>
  </div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2021 Student Management System. All Rights Reserved | Powered By <a href="#" target="_blank">RCTI</a></p>		
		</div>
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
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>
<?php if(isset($_REQUEST['m1'])=="1") { ?>
<script language="javascript">
alert("Logout Successfully");
</script>
<?php } ?>


<?php if(isset($_REQUEST['m2'])=="2") { ?>
<script language="javascript">
alert("Login ID or Password Incorrect");
</script>
<?php } ?>

<?php if(isset($_REQUEST['stop'])=="1") { ?>
<script language="javascript">
alert("Please login to visit");
</script>
<?php } ?>