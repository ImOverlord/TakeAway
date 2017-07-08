<?php
$pickuptime=  $_POST['pickuptime'];
$price=  $_POST['price'];
echo "<br>";
$i = $_POST['counter'];
$x = 0;
$order_String = $_POST['order'];
while($x < $i) {
	$order_String = $order_String . ','. $_POST["Order$x"];
	$x++;
}
print $order_String;

$con = mysqli_connect("localhost","root","","hackathon");
		$time = $_POST['pickuptime'];
		$order = $_POST['order'];
		$length = 5;
		$checked = true;
		while($checked == true) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			$Order_Code = $randomString;
			$Ccodes = mysqli_query($con, "SELECT * FROM current_order");
			$Exist = false;
			while($row = mysqli_fetch_array($Ccodes)){
				if($row['order_code'] == $Order_Code) {
					$Exist = true;
				}
			}
			if ($Exist == true) {
				$checked = true;
				
			}else{
				$checked = false;
			}
		}
mysqli_query($con, "INSERT INTO current_order (order_list, order_code, pickup_time, _read) VALUES ('$order_String', '$Order_Code', '$time','0')");
		
		?>
	<form id="form" method="POST" action="order4.php">
		<input type="input" value="<?php echo $Order_Code ?>" name="order_code" id="order_code" />
		<input type="input" value="<?php echo $order_String ?>" name="order" id="order" />
		<input type="input" value="<?php echo $pickuptime ?>" name="time" id="time" />
		<input type="input" value="<?php echo $price ?>" name="price" id="price" />
	</form>
	
	<script>
	form.submit()
	</script>
