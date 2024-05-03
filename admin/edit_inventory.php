<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="itemName">Service Offer</label>
				<div class="controls">
				<input type="hidden" id="itemName" name="id" value="<?php echo $row['inventory_id']; ?>" required>
				<input type="text" id="itemName" name="inventory" value="<?php echo $row['item_name']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="itemQuantity">Quantity</label>
				<div class="controls">
				<input type="text" name="item_quantity" id="itemQuantity" value="<?php echo $row['item_quantity']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>

	<?php
	if (isset($_POST['edit'])){
	
	$inventory_id=$_POST['id'];
	$item=$_POST['inventory'];
	$quantity=$_POST['item_quantity'];
	
	mysqli_query($conn,"update inventory set item_name='$item', item_quantity='$quantity' where inventory_id='$inventory_id'")or die(mysqli_error($conn)); ?>
	<script>
	window.location="inventory.php";
	</script>
	<?php
	}
	?>