<?php 
session_start();
$i=$_SESSION['admin'];
include("connect.php");
$qp=mysqli_query($con,"select * from admin where aid=$i") or die ("QF");
$datap=mysqli_fetch_array($qp);
$old_pwd=$datap['password'];

if(isset($_REQUEST['update'])=="true")
{
	extract($_POST);
	if($old_pwd==$cp)
	{
		mysqli_query($con,"update admin set password='$np' where aid=$i")or die ("QF");
		header("location:logout.php");
	}
	else
	{
		header("location:change_password.php?m1=1");
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
				<h2 class="title1">Change Password</h2>
				 
				  <form name="form1"  id="form1" method="post" action="" onSubmit="return f1();">
				  <input  type="hidden" name="update" value="true">
				    <table width="50%" height="212" style="border-style:groove; border-color:#169DA5" align="center">
                      <tr>
                        <td>&nbsp;&nbsp;Enter Current Password </td>
                        <td>:</td>
                        <td><input name="cp" type="text" id="cp" ></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;Enter New Password </td>
                        <td>:</td>
                        <td><input name="np" type="text" id="np"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;Retype New Password </td>
                        <td>:</td>
                        <td><label>
                          <input name="rp" type="text" id="rp" onBlur="return f2();">
                        </label></td>
                      </tr>
                      <tr>
                        <td colspan="3"><div align="center">
                          <input class="btn btn-danger" type="submit" name="Submit" value="Change">
                        </div></td>
                      </tr>
                    </table>
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
function f1()
{
	if(form1.cp.value=="")
	{
		alert("Enter Current Password");
		form1.cp.focus();
		return false;
	}
	else if(form1.np.value=="")
	{
		alert("Enter New Password");
		form1.np.focus();
		return false;
	}
	else if(form1.rp.value=="")
	{
		alert("Enter Re-Type New Password");
		form1.rp.focus();
		return false;
	}
}
function f2()
{
	if(form1.np.value!=form1.rp.value)
	{
		alert("New Password and Retype Password Not Match");
		form1.rp.focus();
		return false;
	}
}
</script>
<?php if(isset($_REQUEST['m1'])=="1") { ?>
<script language="javascript">
alert("Current Password Incorrect");
</script>
<?php } ?>