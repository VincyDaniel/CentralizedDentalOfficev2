<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar_dasboard.php'); ?>

<style>

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

th, td {
    border: 1px solid #dddddd;
    padding: 12px 16px;
}

th {
    background-color: #4e8cff;
    color: #ffffff;
}

tr:nth-child(even) {
    background-color: #e7f0ff;
}

tr:hover {
    background-color: #d2e4ff;
}

.image-container {
    border: 4px solid #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.image-container img {
    display: block;
    width: 100%;
    height: auto;
}

.alert-info,
.alert-success,
.alert-danger {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 10px;
    text-align: center;
}

.alert-info {
    border: 2px solid #4e8cff;
    color: #004085;
    background-color: #e7f0ff;
}

.alert-success {
    border: 2px solid #28a745;
    color: #155724;
    background-color: #d4edda;
    font-weight: bold;
}

.alert-danger {
    border: 2px solid #dc3545;
    color: #721c24;
    background-color: #f8d7da;
    font-weight: bold;
}

body {
    font-family: Arial, sans-serif;
    background-color: #e8f4f8;
    padding: 20px;
}

.btn-info {
    display: inline-block;
    font-weight: bold;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 2px solid #ffffff;
    border-radius: 20px;
    color: #ffffff;
    padding: 12px 24px;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s;
}

.btn-info:hover {
    border-color: #ffffff;
}

.icon-large {
    font-size: 20px;
    margin-right: 8px;
}
.custom-navbar .nav > li {
    margin-right: 10px; /* Adjust as needed */
}

.custom-navbar .navbar-inner .container {
    width: 95%; /* Adjust container width as needed */
}

.custom-navbar .welcome-item {
    margin-top: 20px; /* Adjust as needed to move it down */
    margin-left: 50px; /* Adjust as needed to move it to the left */
}
</style>


    <div class="container">
		<div class="margin-top">
			<div class="row">
<br><br><br><br>
			<div class="span3" style="background-image: url('set2.png');">
				 <div class="alert alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('d:m:y');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
							
							<div class="alert alert-info">List of Services</div>
									<table class="table  table-bordered">
										
											<thead>
												<tr>
													<th>Service Offer</th>
													<th>Price</th>                                 
												
												</tr>
											</thead>
											<tbody>
											
											<?php $user_query=mysqli_query($conn,"select * from service")or die(mysqli_error($conn));
												while($row=mysqli_fetch_array($user_query)){
												$id=$row['service_id']; ?>
												<tr class="del<?php echo $id ?>">
												<td><?php echo $row['service_offer']; ?></td> 
												<td><?php echo $row['price']; ?></td>                         
												<?php } ?>
									
											</tbody>
										</table>

										<div class="alert alert-info">Time Guide for Each Number</div>
				<table class="table  table-bordered">
                            
							<thead>
								<tr>
									<th>Number</th>
									<th>Time Slot</th>                                 
								 
								</tr>
							</thead>
							<tbody>
							<tr>
            					<td><p>1</p></td> 
    				        	<td><p>9:30 - 10:00</p></td>                        
    						</tr>
    						<tr>
    					        <td><p>2</p></td> 
            					<td><p>10:00 - 10:30</p></td>                        
        					</tr>
        					<tr>
            					<td><p>3</p></td> 
            					<td><p>10:30 - 11:00</p></td>                        
							</tr>
							<tr>
								<td><p>4</p></td> 
								<td><p>11:30 - 12:00</p></td>                        
							</tr>
							<tr>
								<td><p>5</p></td> 
								<td><p>12:30 - 1:00</p></td>                        
							</tr>
							<tr>
								<td><p>6</p></td> 
								<td><p>3:00 - 3:30</p></td>                        
							</tr>
							<tr>
								<td><p>7</p></td> 
								<td><p>3:30 - 4:00</p></td>                        
							</tr>
							<tr>
								<td><p>8</p></td> 
								<td><p>4:30 - 5:00</p></td>                        
							</tr>                    
					   
							</tbody>
							</table>
				</div>
				<div class="span6">
				
					
				<div class="alert alert-info">Edit Personal Information</div>
	<?php 
	$member_query = mysqli_query($conn,"select * from members where member_id='$session_id'")or die(mysqli_error($conn));
	$member_row= mysqli_fetch_array($member_query);
	?>
	 <form class="form-horizontal" method="POST">
		<div class="control-group">
			<label class="control-label" for="inputEmail">Firstname</label>
			<div class="controls">
			<input type="text" value="<?php echo $member_row['firstname']; ?>" name="firstname" id="inputEmail" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Lastname</label>
			<div class="controls">
			<input type="text" name="lastname" id="inputPassword" placeholder="Lastname" value="<?php echo $member_row['lastname']; ?>" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Address</label>
			<div class="controls">
			<input type="text" name="address" value="<?php echo $member_row['address']; ?>" id="inputPassword" placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Email</label>
			<div class="controls">
			<input type="text" name="email" id="inputPassword" value="<?php echo $member_row['email']; ?>" placeholder="Email" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Age</label>
			<div class="controls">
			<input type="text" name="age" class="span1" value="<?php echo $member_row['age']; ?>" id="inputPassword" placeholder="Age" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender</label>
			<div class="controls">
			<select class="span2" name="gender" required>
			<option><?php echo $member_row['gender']; ?></option>
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<button type="submit" name="update" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>
	
	<?php
	if (isset($_POST['update'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
		
	mysqli_query($conn,"update members set firstname='$firstname' , lastname='$lastname' , address='$address' ,
	age='$age' , gender='$gender' , email='$email' where member_id='$session_id' ") or die(mysqli_error($conn));
	?>
	<script>
	window.location = 'edit_info.php'; 
	</script>
	<?php
	}	
	?>


	

	
	
				</div>
				<div class="span3">
					<div class="alert alert-danger">NOTE</div>
									
								
									<?php 
									$note_query = mysqli_query($conn,"select * from note ")or die(mysqli_error($conn));
									$note_count =mysqli_num_rows($note_query);
									while($note_row = mysqli_fetch_array($note_query)){
									if ($note_count > 0){ ?>
									
									<li><i class="icon-stop icon-large"></i>&nbsp;<?php echo $note_row['message'] ?></li>
									<?php
									}  } 
									?>
									<br>
					<div class="alert alert-info">Office Location</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d289.0221401614459!2d121.09793143743784!3d14.620298506877687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b839412463cf%3A0x7bd41f4ed257b291!2sMunding%20Ave%2C%20Marikina%2C%201800%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1714754844972!5m2!1sen!2sph" width="270" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					
					
				<div class="alert alert-info">Testimonial</div>
				<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmary.g.cruz.9%2Fposts%2Fpfbid0SyaPzCRF8cTnedx3xLgQygrYiE2No9HofF9yKjLEkCPd2V851ZHdim4DXhNFQPxGl&show_text=true&width=500&is_preview=true" width="270" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
				<div class="alert alert-info">Social Media</div>
				<a href="https://www.facebook.com/profile.php?id=100057238428144"><img src="img/32x32/facebook.png"></a>	
				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>