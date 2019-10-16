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
					
					<a href="itemsnew.php">Menu</a>
					<a href="page.html">Logout</a>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<section class=" hero ">
				<h1>RESTAURANT MANAGEMENT SYSTEM</h1><br>
				<p>GENERATE BILL</p><br>
					
					<form method="post" action="">
                        <label for="number"> Table No. </label><br>
						<input type="number"  id="number" name="number"><br>
						<a href="#"><button>Generate Bill</button></a>
                </form>
				<br>
				<table>
				<tr>
					<th>ORDER ID</th>
					<th>QUANTITY</th>
					<th>TOTAL</th>
					<th>NAME</th>
					<TH>TABLE</TH>
				</tr>
				<tr>
					<td>3</td>
					<td>1</td>
					<td>30</td>
					<td>Balls</td>
					<td></td>
				</tr>
		</table>

					
			</section>

					
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