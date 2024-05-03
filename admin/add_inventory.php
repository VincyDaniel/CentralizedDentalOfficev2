<!-- add_inventory.php -->

<!-- Button to trigger modal -->
<a href="#add_inventory" role="button" class="btn btn-info" data-toggle="modal"><i class="icon-plus icon-large"></i>&nbsp;Add Inventory</a>
<br><br>

<!-- Modal -->
<div id="add_inventory" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <div class="alert alert-info">Add Inventory</div>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="POST">
            <div class="control-group">
                <label class="control-label" for="itemName">Item Name</label>
                <div class="controls">
                    <input type="text" name="inventory" id="itemName" placeholder="Item Name" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="itemQuantity">Item Quantity</label>
                <div class="controls">
                    <input type="number" name="item_quantity" id="itemQuantity" placeholder="Item Quantity" required>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                <button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Add</button>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>
	
<?php
	
	if (isset($_POST['submit'])){
	$item=$_POST['inventory'];
	$quantity=$_POST['item_quantity'];
	
	mysqli_query($conn,"insert into inventory (item_name,item_quantity) values('$item','$quantity')")or die(mysqli_error($conn));
	?>
	<script>
	window.location="inventory.php";
	</script>
	<?php
	}
	?>
