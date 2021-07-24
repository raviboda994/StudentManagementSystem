
<?php
if(isset($_REQUEST['btn']))
{
	extract($_POST);
	include("connect.php");
	mysqli_query($con,"insert into inquiry (name,mobile,emailid,comments) values('$nm','$mob','$em','$cmts')")or die("qf");
	header("location:contact.php?c1=1");
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Student Management System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="kw here" />
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
                        <?php include("logo.php");?>
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
                    <h2 class="title-inner">
                        Contact Us
                    </h2>

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
                            <a href="contact.html">contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- contact -->
        <div class="section contact" id="contact">
            <div class="container">
                <h4 class="rad-txt text-center">
                    <span class="abtxt1">contact</span>
                    <span class="abtext">us</span>
                </h4>
                <div class="contact-form">
                    <div class="col-md-7">
                        <!-- contact form grid -->
                        <div class="contact-top1">
                            <h5>Submit Your Inquiry / Feedback</h5>
                            <form action="" class="form_w3layouts" method="post" name="form1" id="form1" onSubmit="return fun1();">
                                <input name="nm" type="text" id="nm" placeholder="Enter Name"  >
                                <br><br>
                                <input name="mob" type="text" id="mob" placeholder="Enter Mobile"  >

                                <input name="em" type="email" class="email" id="em" placeholder="Enter Email"  >
                                <textarea name="cmts" id="cmts" placeholder="Message / Comments" ></textarea>
                                <input type="submit" name="btn" value="Send">
                            </form>
                        </div>
                        <!--  //contact form grid ends here -->
                    </div>
                    <!-- contact map grid -->
                    <div class="col-md-5 map contact-right">
                        <div class="contact-top1">
                            <h5>get directions</h5>
                            <iframe src="https://maps.google.com/maps?q=rcti&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!--//contact map grid ends here-->
                    <div class="clearfix"></div>
                </div>
                <!-- contact details -->
                <div class="contact-bottom">
                    <h6>contact info</h6>
                    <!-- contact details left -->
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-left">
                            <div class="address">
                                <h5>Address:</h5>
                                <p>
                                    RCTI,
                                    <br> Opp sola Civil,
									<br> Ahmedabad,
									<br>Gujarat,
									<br>India.
									
									</p>
								
                            </div>
                            <div class="address address-mdl">
                                <h5>Mobile:</h5>
                                <p>
                                    +91 11111111</p>
                             </div>
                        </div>
                    </div>
                    <!-- //contact details left -->
                    <!-- contact details right -->
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-right">
                            <div class="address">
                                <h5>Email:</h5>
                                <p>
                                    <a href="mailto:ravi.boda994@gmail.com">ravi.boda994@gmail.com</a><br/>
                                    <a href="mailto:akabaridarshak@gmail.com">akabaridarshak@gmail.com</a>
                                </p>
                             </div>
                             
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //contact-details right -->
                    <div class="clearfix"></div>
                </div>
                <!-- //contact details ends here -->
            </div>
        </div>
        <!-- //contact -->
   <!-- footer -->
    
<!-- //footer -->
<?php include("footer.php");?>
</div>
<!-- //home -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
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
<?php if(isset($_REQUEST['c1'])=="1")
{
?>
<script language="javascript">
alert("Thanks for inquiry");
</script>
<?php
}
?>
<script language="javascript">
function fun1()
{
	if(form1.nm.value=="")
	{
		alert("Enter Your Name");
		return false;
	}
	else if(form1.mob.value=="")
	{
		alert("Enter Your Mobile Number");
		return false;
	}
	else if(form1.mob.value.length!=10)
	{
		alert("Mobile Number Required on 10 Digits");
		return false;
	}
	else if(isNaN(form1.mob.value))
	{
		alert("Characters are not allowed in Mobile Number");
		return false;
	}
	else if(form1.em.value=="")
	{
		alert("Enter Your Email ID");
		return false;
	}
	else if(form1.cmts.value=="")
	{
		alert("Enter Your Comments");
		return false;
	}
}
</script>