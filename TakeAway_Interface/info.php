<?php

	$id = $_POST['name'];
	$con = mysqli_connect("localhost","root","","Hackathon");
	
	$res = mysqli_query($con,"SELECT * FROM current_order WHERE current_order.id = '$id'");
	
	while($row = mysqli_fetch_array($res)) {
	$t = $row['pickup_time'];
	print "<center>";
	print "<table width='100%'>";
	print "<tr><td><p id='Order_Code'>Order Code: $id</p> </td> <td><p id='ETA'>ETA: $t</p></td></tr>";
	print "</table>";
	
	print "<p>Order: </p>";
	print "<ul>";
	$i = 0;
	// while($i < SizeOf($row['order_list'])) {
		// print "<li>" . $row['order_list'][$i] . "</li>";
	// }
	$max = strlen($row['order_list']);
	$i = 0;
	$j = 0;
	$order = array();
	while($i < $max) {
		if($row['order_list'][$i] == ',') {
			array_push($order, substr($row['order_list'],$j,$i));
			$j = $i +1;
			
		}
		$i++;
	}
	array_push($order, substr($row['order_list'],$j,$i));
	foreach($order as $val) {
		print "<li>$val</li>";
	}
	print "</ul>";
	
	
	print "<br>";
	if($row['_read'] == '1') {
		print "<button onclick='seen(this.id)' id='Seen$id'class='btn btn-success'>Ready</button>";
	} else {
		print "<button onclick='seen(this.id)' id='Seen$id'class='btn btn-danger'>Not ready</button>";
	}
	print "<button id='$id' onclick='del($id)' class='btn btn-info'>	Order Sent </button>";
	}
	print "</center>";

?>