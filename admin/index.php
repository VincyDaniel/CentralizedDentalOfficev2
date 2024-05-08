<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti" >
						<img src="../img/dr.jpg" class="img-rounded" width="488">
					</div>
				<div class="login">
				<div class="alert alert-info" ><strong>Good Day Admin. Please Enter Your Credentials Below</strong></div>
						<form class="form-horizontal" method="POST">
						<div style="text-align: center;">
						<img src="../img/blk.png" class="img-rounded" width="100" height="100">
						</div>
								<div class="control-group">
									<br>
									<label class="control-label" for="inputEmail"><i class="icon-user icon-large"></i></label>
									<div class="controls">									
									<input type="text" name="username" id="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword"><i class="icon-lock icon-large"></i></label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>
								<div class="control-group">
								<div class="controls" style="text-align: justify;">
								<button id="login" name="submit" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"><i class="icon-signin icon-large"></i></i> LOGIN</button>
								</div>
									<?php
if (isset($_POST['submit'])){
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row > 0 ) {
			header('location:dasboard.php');
	$_SESSION['id']=$row['user_id'];
		}
		else{ ?>
		<br>
		<br>
	<div class="alert alert-danger">!Access Denied</div>	
<?php		}
		
		}
?>
								</div>
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
