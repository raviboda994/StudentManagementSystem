<!DOCTYPE html>
<html lang="zxx">

<head>
<title>Student Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="title here" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
    <!--
ZOOM PHOTO
-->
<!--FOR ZOOM-->
<link rel="stylesheet" href="css_zoom/dg-picture-zoom.css" />
    <script type="text/javascript" src="js_zoom/external/mootools-1.2.4-core-yc.js"></script>
    <script type="text/javascript" src="js_zoom/external/mootools-more.js"></script>
    <script type="text/javascript" src="js_zoom/dg-picture-zoom.js"></script>
    <script type="text/javascript" src="js_zoom/dg-picture-zoom-autoload.js"></script>
     
<!--ZOOM OVER-->
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Chronicle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php  include("logo.php");?>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <?php include("menu.php");?>
                    <!-- /.navbar-collapse -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.container -->
            </div>
        </nav>
        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="banner-bg-inner">
            <!-- banner-text -->
            <div class="banner-text-inner">
                <div class="container">
                    <h2 class="title-inner">COURSE</h2>

                </div>
            </div>
            <!-- //banner-text -->
        </div>
        <!-- //banner -->
        <!-- breadcrumbs -->
        <div class="crumbs text-center">
            <div class="container">
                <div class="row">
                    <ul class="btn-group btn-breadcrumb bc-list">
                        <li class="btn btn1">
                            <a href="index.html">
                                <i class="glyphicon glyphicon-home"></i>
                            </a>
                        </li>
                        <li class="btn btn2">
                            <a href="index.php">Syllabus</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- signin and signup form -->
        <div class="login-form section text-center">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1">Syllabus</span>
                    <span class="abtext"><?php echo $_REQUEST['cnm'];?></span>
                </h4>
                <div id="loginbox" style="margin-top:30px;" class="mainbox  loginbox">
                    <div class="panel panel-info">
                         
                      <div style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                             
                            <table width="70%" height="209" align="center" style="border-style:groove; border-color:#169DA5">
                              <tr>
                                <td colspan="4"><div align="center"><strong>Course : <?php echo $_REQUEST['cnm'];?></strong></div></td>
                              </tr>
                              <tr>
                                <td height="35" class="alert-success"><strong>Sem</strong></td>
                                <td class="alert-success"><strong>Subject</strong></td>
                                <td class="alert-success"><strong>Download File </strong></td>
                                <td class="alert-success"><strong>Papers</strong></td>
                              </tr>
                             <?php
							 include("connect.php");
							 $c=$_REQUEST['cnm'];
							 $q=mysqli_query($con,"select * from syllabus where c_name='$c'")or die ("QF");
							 while($data=mysqli_fetch_array($q))
							 {
							 ?>
							 <tr>
                                <td><?php echo $data['sem'];?></td>
                                <td><?php echo $data['sub_name'];?></td>
                                <td><a  href="admin/syllabus_files/<?php echo $data['s_file'];?>"><?php echo $data['s_file'];?></a></td>
                                <td><a href="papers.php?cnm=<?php echo $data['c_name'];?>">Click Here </a></td>
							 </tr>
							  <?php
							  }
							  ?>
                        </table>
                            <p class="text-primary">&nbsp;</p>
                      </div>
                    </div>
                </div>
                <div id="signupbox" style="display:none; margin-top:50px" class="mainbox loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                <a id="signinlink" href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-form section text-center">
            <div class="container">
    <div id="loginbox" style="margin-top:30px;" class="mainbox  loginbox">
                    <div class="panel panel-info">
                         
                      <div style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                             
                            <table width="70%" height="209" align="center" style="border-style:groove; border-color:#169DA5">
                              <tr>
                                <td colspan="4"><div align="center"><strong>Course : <?php echo $_REQUEST['cnm'];?></strong></div></td>
                              </tr>
                              <tr>
                                <td height="35" class="alert-success"><strong>Enroll</strong></td>
                                <td class="alert-success"><strong>Name</strong></td>
                                <td class="alert-success"><strong>Coordinator</strong></td>
                                <td class="alert-success"><strong>Sem</strong></td>
                               <!--  <td class="alert-success"><strong>Photo</strong></td> -->
                              </tr>
                             <?php
                             include("connect.php");
                             $c=$_REQUEST['cnm'];
                             $q=mysqli_query($con,"select * from student where Course='$c'")or die ("QF");
                             while($data=mysqli_fetch_array($q))
                             {
                             ?>
                             <tr>
                                <td><?php echo $data['Enroll'];?></td>
                                <td><?php echo $data['Name'];?></td>
                                <!-- <td><?php //echo $data['mobile'];?></td>
                                <td><?php// echo $data['Email'];?></td> -->
                                <td><?php echo $data['Coord'];?></td>
                                <td><?php echo $data['Sem'];?></td>
                             </tr>
                              <?php
                              }
                              ?>
                        </table>
                            <p class="text-primary">&nbsp;</p>
                      </div>
                    </div>
                </div>
                <div id="signupbox" style="display:none; margin-top:50px" class="mainbox loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                <a id="signinlink" href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--//signin and signup form ends here-->
     <!-- footer -->
      
    <!-- //footer -->
    <?php include("footer.php");?>
<!-- //home -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>