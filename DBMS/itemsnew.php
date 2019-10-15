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
			<center><h2>MENU</h2></CENTER>
			<table>
      <tr>
        <th>ID</th>
        <th>CATEGORY</th>
        <th>NAME</th>
        <th>PRICE</th>
      </tr>

     
       <?php

      $conn= mysqli_connect("localhost","root","","restaurant");
      
      $sql= "SELECT ID,CATEGORY,NAME,PRICE FROM items";
      $result=$conn->query($sql);

      if($result->num_rows>0){
      while($row=$result-> fetch_assoc()){

      echo "<tr><td>".$row["ID"]."</td><td>".$row["CATEGORY"]."</td><td>".$row["NAME"]."</td><td>".$row["PRICE"]."</td></tr>";
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
