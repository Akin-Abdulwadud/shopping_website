<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delivery Info</title>
	<style type="text/css">
		.order-preview{
			border: solid;
			width: 50%;
		}
		.order-preview h3{
			text-align: center;
		}
		#customers {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #04AA6D;
		  color: white;
		}
	</style>
</head>
<body>
	<div class="order-preview">
		<h3>Akintola Abdulwadud Order</h3>
		<p>Receiver Name:<span></span></p>
		<p>Receiver Phone Number:<span></span></p>
		<p>Address:<span></span></p>
		<table id="customers">
			<thead>
				<tr>
		    		<th>Quantity</th>
		    		<th>Category Name</th>
		    		<th>Product Name</th>
		    		<th>Price</th>
		  		</tr>
			</thead>
			<tbody id="allApplicants">

		  </tbody>
		</table>
		<p>Total Price:<span></span></p>
	</div>

</body>
</html>