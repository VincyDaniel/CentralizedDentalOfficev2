<?php include('header.php'); ?>
	<!-- -->
		  <div class="navbar navbar-fixed-top navbar-inverse">
				<div class="navbar-inner">
					<div class="container">
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li> <img src="img/br.png" alt="Creencia Cruz Dental Office" usemap="#structurelogot" width="250px" height="250px"> </li>
								<li><a title="Home" id="home" href="index.php" class=""><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
								<li><a title="Services" id="services" href="services.php" class=""><i class="icon-list icon-large"></i>&nbsp;Services</a></li>
								<li class = "active"><a title="About Us" id="aboutus" href="about.php" class=""><i class="icon-info icon-large"></i>&nbsp;About Us</a></li>
								<li><a title="Contact Us" id="contactus" href="contact_us.php" class=""><i class="icon-phone icon-large"></i>&nbsp;Contact US</a></li>
								<li>
									<div class="login_sign_up">
									<a id="login" href="login.php"  class="btn btn-info btn-large"></i>&nbsp;Login</a>
									<p><a id="signup" href="signup.php">Not a Member? Sign Up Now</a></p>
								</li>
						</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
   
<!-- -->
<?php include('dbcon.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<div class="span12">
				<?php include('about_content.php'); ?>
				</div>
				<div class="span12">
				</div>		
				<div class="clearfix"></div>
			</div>
		</div>
    </div>
<?php include('content2.php'); ?>	
<?php include('footer.php') ?>