<?php session_start();
if(isset($_SESSION['admin'])=="")
{
	header("location:index.php?stop=1");
	exit(0);
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
<script language="javascript" src="delete.js"></script>
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
				<h2 class="title1">Syllabus Data </h2>
				 
				 <table width="100%"  height="150"  style="border-style:groove; border-color:#169DA5" align="center">
                   <tr class="btn-info">
                     <td><strong>&nbsp;No</strong></td>
                     <td><strong>Course Name </strong></td>
                     <td><strong>Sem</strong></td>
                     <td><strong>Sub. Name </strong></td>
                     <td><strong>Syllabus File </strong></td>
                     <td><strong>Action</strong></td>
                   </tr>
                 <?php
				 $no=1;
				 include("connect.php");
				 $q=mysqli_query($con,"select * from syllabus")or die ("QF");
				 while($data=mysqli_fetch_array($q))
				 {
				 ?>
				   <tr>
                     <td>&nbsp;&nbsp;<?php echo $no;?></td>
                     <td><?php echo $data['c_name'];?></td>
                     <td><?php echo $data['sem'];?></td>
                     <td><?php echo $data['sub_name'];?></td>
                     <td><a href="syllabus_files/<?php echo $data['s_file'];?>">Show</a></td>
                     <td><a href="delete_syllabus.php?did=<?php echo $data['sid'];?>" onClick="return f1();"><img src="images/delete1.png"></a></td>
                   </tr>
				  <?php
				  $no++;
				  }
				  ?> 
              </table>
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
<?php if(isset($_REQUEST['c1'])=="1") { ?>
<script language="javascript">
alert("Course Added");
</script>
<?php } ?>

<?php if(isset($_REQUEST['s2'])=="2") { ?>
<script language="javascript">
alert("Syllabus Deleted");
</script>
<?php } ?>
