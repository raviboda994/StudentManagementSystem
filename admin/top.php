<?php
  include("connect.php");
$i=$_SESSION['admin'];
$q=mysqli_query($con,"select * from admin where aid=$i")or die ("QF");
$data=mysqli_fetch_array($q);
?>
<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="<?php echo $data['a_photo'];?>" height="70" width="70" alt=""> </span> 
									<div class="user-name">
										<p><?php echo $data['name'];?></p>
										<span><?php echo $data['mobile'];?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								 
								<li> <a href="profile.php"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>