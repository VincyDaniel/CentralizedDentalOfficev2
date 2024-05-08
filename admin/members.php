<?php include('header.php'); ?>
<?php include('session.php'); ?>
<div style="display: flex; flex-direction: column;">
    <div style="display: flex;">
        <div style="flex: 0 0 auto; width: 270px; margin-left: 40px;"> <!-- Sidebar with left margin -->
						<?php include('sidebar.php'); ?>
						</div>
						<div style="width: 20px;"></div>
                            <div style="flex: 1;"> <!-- Content -->
                            <img src="../img/dr.jpg" class="img-rounded" style="width: 409px; height: 115px;">
                            <div style="margin-right: 40px;"> <!-- Navbar with right margin -->
								<?php include('navbar_dasboard.php') ?>
                                <br>
						    <div class="alert alert-info">
                                    <strong><i class="icon-group icon-large"></i>&nbsp;Customer Table</strong>
                            </div>
													
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>                                 
                                        <th>Gender</th>                                 
                                        <th>Address</th>                                 
                                        <th>Contact No</th>                                 
                                        <th>Email Address</th>                                 
                                                                    
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysqli_query($conn,"select * from members")or die(mysqli_error($conn));
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['member_id']; ?>
									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td> 
                                    <td><?php echo $row['age']; ?></td> 
                                    <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact_no']; ?></td> 
                                    <td><?php echo $row['email']; ?></td> 
                                    <td width="50">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                            
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							
<script type="text/javascript">
        $(document).ready( function() {
            $('.btn-danger').click( function() {
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this Member?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_member.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                        $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });				
        });
    </script>

						</div>
                        <br><br>
    </div>