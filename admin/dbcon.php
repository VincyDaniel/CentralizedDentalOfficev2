<?php
$conn = mysqli_connect('localhost','root','root','dental','3307');;
if(!$conn){
	echo "Connection Failed: ".mysqli_error($conn);
	exit;
}
?>
