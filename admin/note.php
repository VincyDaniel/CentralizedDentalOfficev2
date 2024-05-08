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
                                    <strong><i class="icon-file icon-large"></i>&nbsp;Announcement Table</strong>
                            </div>
							
							<?php include('add_note.php'); ?>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Message</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysqli_query($conn,"select * from note")or die(mysqli_error($conn));
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['note_id']; ?>
									 <tr class="del<?php echo $id ?>">
                               
                                    <td><?php echo $row['message']; ?></td> 
                                    <td width="100">
                                        <a href="#delete<?php echo $id ?>" data-toggle="modal"  rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
										<?php include('delete_note_modal.php'); ?>
									   <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    <?php include('edit_note.php'); ?>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							


						</div>
                        <br><br>
    </div>