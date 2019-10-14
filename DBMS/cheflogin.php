<!DOCTYPE html>
<html>
	<head>
		<title> RESTAURANT MANAGEMENT </title>
		<meta charset="UTF-8">
		<link rel= stylesheet href="main.css">
	</head>
	<body>
		<nav class= "navbar">
			<div>
				<h2>LOGO</h2>
				<ul class="nav-ul">
					<a href="page.html">Home</a>
					<a href="items.html">Menu</a>
					<a href ="#">Contact Us</a>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<table>
      <tr>
        <th>OID</th>
        <th>QUANTITY</th>
        <th>TOTAL</th>
        <th>NAME</th>
        <th>CID</th>
        <th>WID</th>
        <th>ID</th>
      </tr>
      
      <?php

      $conn= mysqli_connect("localhost","root","","restaurant");
      
      $sql= "SELECT ORDERID,QUANTITY,TOTAL,NAME,CID,WID,ID FROM orders";
      $result=$conn->query($sql);

      if($result->num_rows>0){
      while($row=$result-> fetch_assoc()){

      echo "<tr><td>".$row["ORDERID"]."</td><td>".$row["QUANTITY"]."</td><td>".$row["TOTAL"]."</td><td>".$row["NAME"]."</td><td>".$row["CID"]."</td><td>".$row["WID"]."</td><td>".$row["ID"]."</td></tr>>";
		}

	echo "</table>";
		}
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
