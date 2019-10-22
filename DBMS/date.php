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
		display:block;
		margin:5rem 35%;
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
					
					<a href="itemsnew.php">Menu</a>
					<a href="page.html">Logout</a>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<section class=" hero ">
				<h1>RESTAURANT MANAGEMENT SYSTEM</h1><br>
				<p>GENERATE Report</p><br>
					
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="number"> Date </label><br>
						<input type="date"  id="number" name="num"><br>
						<input type="submit" value="Generate Report" name="submit">
                </form>
				</section>
				<center>
		<table>
				<tr>
					<th>BILL ID</th>
					<th>TOTAL</th>
					<th>TABLE NUMBER</th>
					<th>DATE</th>
					
				</tr>
				<?php
if(isset($_POST['submit']))

{
	 $sum=0;
			$tno=$_POST['num'];
			  $conn= mysqli_connect("localhost","root","","restaurant");
			echo ($tno);
    
      $sql= "SELECT * FROM BILL where BILLDATE=DATE_FORMAT('$tno','%Y-%m-%d')";
      $result=$conn->query($sql);
	 
     
		  
      while($row=mysqli_fetch_array($result)){
      echo "<tr><td>".$row["BID"]."</td><td>".$row["TOTAL"]."</td><td>".$row["TABLENO"]."</td><td>".$row["BILLDATE"]."</td></tr>";
	$sum=$sum+$row['TOTAL'];
	}

	// $addtobill = "INSERT INTO bill (TOTAL,TABLENO) VALUES($sum,'$tno')";
	// $added = $conn->query($addtobill);

	// $delq ="Delete from orders where TABLENO = '$tno'";
	// $deled = $conn->query($delq);

		echo "<h4 style='margin:10px;'> Rs.".$sum."</h4>";
		$conn->close();
	
	}
	
	?>
      
		</table>

				
		</center>

					
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