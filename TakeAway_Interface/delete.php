<?php
	$id = $_POST['name'];
	$con = mysqli_connect("localhost", "root","","hackathon");
	$res = mysqli_query($con,"SELECT * FROM current_order WHERE current_order.id = $id");
	while($row = mysqli_fetch_array($res)) {
		$order_list = $row['order_list'];
		$date = date("d/m/y");
	}
	mysqli_query($con, "INSERT INTO old_order(order_list, date) VALUE('$order_list', '$date')");
	mysqli_query($con,"DELETE FROM `current_order` WHERE `current_order`.`id` = $id");
	print "Item Deleted";
?>
