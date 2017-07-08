 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    
    <?php if(isset($_GET['id'])) {print "<title>" . $_GET['id'] ."</title>";}else {print "<title>Order List</title>";}?>
	<meta name="author" content="Coding&Chill">
		
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
	<style>
	body {overflow: hidden;font-size: 20px;}
	.ChatRow {height: 100%}
	.ChatText {padding: 10px; padding-top: 10px;background-color:grey;}	
	.ChatTextInput {width: 100%}
	.OrdersListUL {list-style-type: none;}
	
	.OrderBar {
		height: 700px;
	}
	.OrderDiv {
		
	}
}
	</style>
  </head>
  
  <body style="height:100%;width:auto;">
	<!-- Navigation -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img class="img-responsive" src="./img/takeoutlogo1.png" alt="" style="vertical-align:middle" width="100px"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#"><b>Orders</b></a>
					</li>
					<li>
						<a href="resturant_prof.html"><b>Restaurant Profile</b></a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	
    <!-- Page Content -->
    <div class="container">
	
	<!-- Page Header -->
        <div class="row">
			<center>
                <h3 class="page-header">
					Order List
                </h3>
			</center>
        </div>
     <!-- /.row -->
  
		<div class="row">
			<div class="col-md-3">
				<h2>Order List</h2>
			</div>
			<div class="col-md-8">
				<h2>Details</h2>
			</div>
		</div>
	
	<div class="row" style="height:100%">
		<div class="col-md-3 OrderBar" id="OrderBar" style="background-color: #efefef;overflow-y: scroll;">
		<center>
		<?php
		$con = mysqli_connect("localhost","root","","hackathon");
		
		$res = mysqli_query($con, "SELECT * FROM current_order ORDER BY pickup_time Asc, id Asc ");
		?>
			<ul class="OrdersListUL ">
					
				<?php
				while($row = mysqli_fetch_array($res)) 
				{
					$id = $row['id']; 
					$t = $row['pickup_time'];
					if($row['_read'] == '0') {
						print "<b>";
					}
					print "<li  class='OrderDiv'><div name='Order' id='$id' onclick='select(this.id)'><h3>Order Code: $id</h3><p>ETA: $t</p></div></li>";
					if($row['_read'] == '0') {
						print "</b>";
					}
				}
				?>
				
				
			</ul>
			</center>
		</div>
		<div class="col-md-8" id="OrderInfo" style="background-color: grey">
		<center>
			<?php
			if(isset($_GET['id'])) {
				$id = $_GET['id'];
			$con = mysqli_connect("localhost","root","","Hackathon");
			
			$res = mysqli_query($con,"SELECT * FROM current_order WHERE current_order.id = '$id'");
			
			while($row = mysqli_fetch_array($res)) {
			$t = $row['pickup_time'];
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
				if($_GET['id'] == "Order List") {
					print "<p>Select an Order to view it</p>";
				}
				
			
			} else {
				print "<p>Select an Order to view it</p>";
			}
			
			?>
		</center>
		</div>
		
	</div>
	
	<!-- Footer -->
	<footer>
		<div class="row" id="footer">
				<center><p>Copyright 2017 &copy; Coding & Chilling</p></center>
		</div>
		<!-- /.row -->
	</footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
		x = window.innerHeight - 57;
		document.getElementById('OrderBar').style = "background-color: #f8f8f8;overflow-y: scroll;height: " + x + "px;"
		document.getElementById('OrderInfo').style = "background-color: #f8f8f8;height: " + x + "px;";
		
		
	</script>
	<script>
	function select(id){
		document.title = id
		$.ajax({  
			type: 'POST',  
			url: 'info.php', 
			data: { name: id },
			success: function(response) {
				console.log(response);
				document.getElementById('OrderInfo').innerHTML = response;
				//document.location = "1";
			}
		});
	}
	
	function del(id) {
		$.ajax({  
			type: 'POST',  
			url: 'delete.php', 
			data: { name: id },
			success: function(response) {
				console.log(response);
				//document.getElementById('OrderInfo').innerHTML = response;
				document.location = "1"
			}
		});
	}
	
	function seen(id) {
		$.ajax({  
			type: 'POST',  
			url: 'seen.php', 
			data: { name: id },
			success: function(response) {
				document.location = "1?id=" + id.substring(4,6);
				document.getElementById(id).value = "Sent";
				document.getElementById(id).classNAME = "btn btn-success";
			}
		});
	}
	
	setTimeout(function(){
		document.location = "1?id="+document.title;
	}, 5000);
	</script>
  </body>
</html>
