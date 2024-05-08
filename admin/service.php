<?php include('header.php'); ?>
<?php include('session.php'); ?>
<div style="display: flex; flex-direction: column;">
    <div style="display: flex;">
        <div style="flex: 0 0 auto; width: 270px; margin-left: 40px;"> <!-- Sidebar with left margin -->
						<?php include('sidebar.php'); ?>
						</div>
						<div style="width: 20px;"></div>
        				<div style="flex: 1;"> <!-- Content -->
							<img src="../img/dr.jpg" class="img-rounded">
							<div style="margin-right: 40px;"> <!-- Navbar with right margin -->
								<?php include('navbar_dasboard.php') ?>
                                <br>
						    <div class="alert alert-info">
                                    <strong><i class="icon-medkit	icon-large"></i>&nbsp;Services Table</strong>
                            </div>
							<?php include('add_service.php'); ?>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Service Offer</th>
                                        <th>Price</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysqli_query($conn,"select * from service")or die(mysqli_error($conn));
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['service_id']; ?>
									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['service_offer']; ?></td> 
                                    <td><?php echo $row['price']; ?></td> 
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    <?php include('edit_service.php'); ?>
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
                if(confirm("Are you sure you want to delete this Data?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_service.php",
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
    