<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Coding&Chill">

    <title>Take Away</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
<?php 
	if (!isset($_POST['h'])) {
		header("Location: http://172.16.5.217/Hackathon/App/TakeOut/www/Takeout_interface/restaurants_phone");
		die();
	}
	$h = $_POST['h'];
	$m = $_POST['m'];
	
?>

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
                        <a href="restaurants_phone.html"><b>Restaurants</b></a>
                    </li>
                    <li>
                        <a href="#"><b>Orders</b></a>
                    </li>
                    <li>
                        <a href="#"><b>Favourites</b></a>
                    </li>
					<li>
                        <a href="#"><b>Profile</b></a>
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
			<div class="col-md-2">
				<a href="pickuptime.html"><img class="img-responsive" src="./img/changepickuptime.png" alt="" style="vertical-align:middle" width="150px"></a>
			</div>
            <div class="col-md-10">
			<center>
                <h3 class="page-header">
				
					Order Food
                </h3>
			</center>
            </div class="col-md-4">
			<div >
			</div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
		<table style="width:100%"> 
			<tr>
				<td style="vertical-align:middle"  align="center" valign="middle">
					<img class="img-responsive" src="./img/chezpatrick.png" alt="" style="vertical-align:middle" width="150px">
				</td>	
			</tr>
			<tr>
				<td style="vertical-align:middle"  align="center" valign="middle">
					<img class="img-responsive" src="./img/6.png" alt="" style="vertical-align:middle" width="150px">
				</td>	
			</tr>
			<tr>
				<td style="vertical-align:middle"  align="center" valign="middle">
					<img class="img-responsive" src="./img/fave.png" alt="" style="vertical-align:middle" width="150px">
				</td>	
			</tr>
			<tr>
				<td style="vertical-align:middle"  align="center" valign="middle">
					<img class="img-responsive" src="./img/address.png" alt="" style="vertical-align:middle" width="125px">
				</td>	
			</tr>
			<tr>
				<td bgcolor="#FFFFFF" colspan="3">&nbsp </td>
			</tr>
			<tr>
				<td style="vertical-align:middle"  align="center" valign="middle">
					<img class="img-responsive" src="./img/map.png" alt="" style="vertical-align:middle" width="80px">
				</td>	
			</tr>
			<tr>
				<td bgcolor="#FFFFFF" colspan="3">&nbsp </td>
			</tr>
			<tr>
				<td style="vertical-align:middle"  align="center" valign="middle">
					<img class="img-responsive" src="./img/tel.png" alt="" style="vertical-align:middle" width="175px">
				</td>	
			</tr>
		</table>
		<h4>Want a sandwich?</h4>
		<form id="form" method="POST" action="order2_phone.php">
		<div class="radio">
		<table>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios1" data-price="86" value="Le Parisen">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw1.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios2" data-price="86" value="L'Atlantique">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw2.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios3" data-price="98" value="Croque-Madame">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw3.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios4" data-price="98" value="Norwegian Tartine">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw4.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios5" data-price="86" value="Le Panini Nicois">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw5.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios6" data-price="86" value="Le Bayonnais">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw6.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios7" data-price="86" value="Le Mediterraneen">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw7.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios8" data-price="76" value="Quiche Lorraine">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw8.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios9" data-price="86" value="Panini Jurassien">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw9.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="Radios10" data-price="86" value="Le Panini Sain-Tropez">
				  </label>
				</td>
				<td>
					<img class="img-responsive" src="./img/sw10.png" alt="" style="vertical-align:middle" width="100%">
				</td>
			</tr>
			<tr>
				<td>
				  <label>
					<input type="radio" name="survey" id="d7" data-price="0" value="">
				  </label>
				</td>
				<td>
					<h4> &nbsp &nbsp None </h4>
				</td>
			</tr>
		</table>
		<img class="img-responsive" src="./img/basket.png" alt="" style="float:left" width="75%" onclick="AddToCart()">
		<a onclick="SubMitFood()"><img onclick="SubMitFood()" src="./img/orderpay.png" alt="" style="text-align:right" width="75%"></a>
			<table id="FoodCheckout"width="100%">
				<tr>  <!-- basket table headings -->
					<td><h5><center>&nbsp </center></h5></td>
					<td><h5><b>Current basket items:</b></h5></a></td>
					<td><h5>&nbsp </h5></a></td>
				</tr>
				<?php print "<tr> <td> <input type='hidden' value='$h:$m' name='pickuptime'> </td></tr>"; ?>
			</table>
		</div>	
	</div> <!-- /.container -->
		</form>
		<script>
			i = 0;
			price = 0;
			function AddToCart() {
				//alert(i)
				document.getElementById("FoodCheckout").innerHTML += "<tr><td> <p> " + i + " </p> </td><td> <p> " + $("#form input[type='radio']:checked").val() + "</p> </td><td> <input type='hidden' name = 'Order" + i + "' id='Order" + i + "' value='" + $("#form input[type='radio']:checked").val() + "'></td></tr>"
				i++
				id = $('input[type=radio]:checked').attr('id')
				Aprice = $("#" + id).attr("data-price")
				price = price + +Aprice
			}
			
			function SubMitFood() {
				//alert(i);
				order_String = '';
				x = 0;
				while(x < i ) {
					order_String += document.getElementById("Order" + x).value + ',';
					x++;
					
				}
				//alert(order_String)
				document.getElementById("form").innerHTML += "<input type='hidden' id='counter' name='counter' value='" + i + "'>"
				document.getElementById("form").innerHTML += "<input type='hidden' id='price' name='price' value='" + price + "'>"
				form.submit();
			}
		</script>

    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
