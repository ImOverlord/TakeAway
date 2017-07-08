<?php
	$id = $_POST['name'];

	$id = substr($id,4,6);

	$con = mysqli_connect("localhost","root","","hackathon");
	mysqli_query($con, "UPDATE `current_order` SET `_read` = '1' WHERE `current_order`.`id` = $id");