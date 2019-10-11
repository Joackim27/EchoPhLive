<html>
	<head>
		<title>My Dashboard</title>
	</head>
	<body>
		<?php
			$con=new mysqli("localhost","root","usbw","db_echo");
			$QUERY="Select* from tbl_orders";
			$result=$con->query($QUERY);
			if($result->num_rows>0)
			{
				echo"<table>
							<tr>
							<td>Order Id </td>
							<td>Name</td>
							<td>Address</td>
							<td>Email</td>
							<td>ProductOrdered</td>
							<td>Status</td>
							</td>
				";
				while($results=$result->fetch_assoc())
				{
					echo"
						<tr>
							<td>".$results['OrderId']."</td>
							<td>".$results['Name']."</td>
							<td>".$results['Address']."</td>
							<td>".$results['Email']."</td>
							<td>".$results['ProductOrdered']."</td>
							<td>".$results['Status']."</td>
							
						</tr>
					
					";
					
				}
				echo"</table>";
			}
			else
			{
				echo "<script>alert('No Orders')</script>";
			}
		?>
	</body>
</html>