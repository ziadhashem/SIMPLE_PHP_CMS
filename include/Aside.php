

<div class="container-fluid ">
<div class="row">	
<aside class="col-md-3 clo-lg-3 sid_bg" style="margin-top:5px; margin-bottom:15%; background:#bdc3c7;">

								<div class="panel panel-primary ">
								<?php
									
									if(! empty($_SESSION))
									{
										$email=$_SESSION["email"];
										$username=$_SESSION["username"];
									}						
										if(empty($email))
										{								
											include_once("Login_Area.php");
										}
										else
										{
												?>
											
												<div class="panel-heading text-center"> <?php echo $email; ?></div>
												<div class="well well-sm">
													<div class="panel-body">
													<div id="avatar" class="text-center">
													<?php
													// Note: $image is an Imagick object, not a filename! See example use below. 
													
														$Img_path="../images/avatar.png";
														if(! empty($_SESSION))
														{
															if($_SESSION["avatar"] !=null)
															{
																$Img_path=$_SESSION["avatar"];
															}
															
														}
														
													?>

													<img src=<?php echo $Img_path; ?> width="140px" id="image" class="text-center" />
												</div>
												
														
														<br>
																			<div class="row">
														
																<div class="col-sm-6">
																		<button type="submit" name="logout"  id="logout" class="btn btn-success" style="width:90%;">تسجيل الخروج </button>
																</div>
																<div class="col-sm-6">
																		<button type="submit" name="controlPanel"  id="controlPanel"  class="btn btn-primary" style="width:90%;">لوحة التحكم </button>
																</div>
																<br>
															</div>
														
														<br>

												
						
												</div>
										</div>
							<?php
										}
										
								?>
							</div>	
							<br>
		
			</aside>
			