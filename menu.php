<div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                        <ul class="nav navbar-nav navbar-left cl-effect-15">
                            
                            <li class="hidden">
                                <a class="page-scroll" href="#page-top"></a>
                            </li>
                            <li>
									<a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">about us</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Course
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
									include("connect.php");
									$q_c=mysqli_query($con,"select * from course")or die ("QF");
									while($data_c=mysqli_fetch_array($q_c))
									{
									?>
									<li>
                                        <a href="syllabus.php?cnm=<?php echo $data_c['c_name'];?>"><?php echo $data_c['c_name'];?></a>
                                    </li>
                                      <?php
									 }
									  ?>
                                </ul>
                            </li>
                            <li>
                                <a href="faculties.php">Faculties</a>
                            </li> 
                            <li>
                                <a href="contact.php">Contact us</a>
                            </li>
                             

                        </ul>
                        <!-- search-bar -->
                         
                        <!-- //search-bar ends here -->
                        <!-- shopping cart -->
                         
                        <!-- //shopping cart ends here -->
                    </div>