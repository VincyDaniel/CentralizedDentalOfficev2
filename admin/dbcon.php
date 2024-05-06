<?php
$conn = mysqli_connect('localhost','root','root','database','3307');;
if(!$conn){
	echo "Connection Failed: ".mysqli_error($conn);
	exit;
}
?>
