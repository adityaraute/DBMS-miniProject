<!DOCTYPE html>
<html>
	<head>
		<title> RESTAURANT MANAGEMENT </title>
		<meta charset="UTF-8">
		<link rel= stylesheet href="main.css">

		<style>
		table {
			margin:auto;
			margin-top: 5rem;
			border-collapse: collapse;
			width: 80%;
			
			}

		table td, table th {
			border: 1px solid  #482ab3;
			padding: 1rem;
			
			}

		
		table th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #3700ff;
			color: #fffb00;
			}
		</style>

	</head>
	<body>
		<nav class= "navbar">
			<div>
				<h2>LOGO</h2>
				<ul class="nav-ul">
					<a href="page.html">Home</a>
					<a href="items.html">Menu</a>
					<a href="page.html">Logout</a>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<center><h2>ORDERS</h2></CENTER>
			<table>
      <tr>
        <th>ORDER ID</th>
        <th>QUANTITY</th>
        <th>TOTAL</th>
		<th>NAME</th>
		<TH>TABLE</TH>
      </tr>

     
       <?php

      $conn= mysqli_connect("localhost","root","","restaurant");
      
      $sql= "SELECT * FROM orders";
      $result=$conn->query($sql);

      if(mysqli_num_rows($result)>0){
     		while($row=$result-> fetch_assoc()){

     		 echo "<tr><td>".$row["ORDERID"]."</td><td>".$row["QUANTITY"]."</td><td>".$row["TOTAL"]."</td><td>".$row["NAME"]."</td><td>".$row["TABLENO"]."</td></tr>";
		}}
		else{
			echo "";
		}
	echo "</table>";
		
		$conn->close();
		
		?>
      

      </table>
		</div>
		<div class="footer">
				<h2>LOGO</h2>
				
				<ul class="foot-ul">
						<a href="#">Facebook</a>
						<a href="#">Zomato</a>
						<a href="#">Swiggy</a>
				</ul>
			</div>
	</body>
</html>
