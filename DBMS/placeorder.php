<?php

$conn=mysqli_connect("localhost","root","","restaurant");
$query="SELECT * FROM items";
$query1="SELECT DISTINCT(CATEGORY) FROM items";
$result=mysqli_query($conn,$query);
$cat=mysqli_query($conn, $query1);

?>

<!DOCTYPE html>
<html>
	<head>
		<title> RESTAURANT MANAGEMENT </title>
		<meta charset="UTF-8">
        <link rel= "stylesheet" href="main.css">
        <link rel="stylesheet" href="login.css">
        
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
		
		<div class="container" style="min-height:100vh">
			<section class=" login " style="margin:auto">
				<form method="post" action=""> 
                    <!-- Has to be added -->
                    <fieldset style="height:auto; width: 25vw; ">
                        <legend>Place Order</legend>

                        <label for = "number">Table</label><br>
                        <input type="number" id="table" name="table" style="background: transparent;"><br>

                        <label for="items">Items</label>
                        <select name="items" id="items"  style="background: transparent;">
                                <?php 

                                while($catrow=mysqli_fetch_array($cat)){

                                	echo '<optgroup label='.$catrow[0].' >';
		                                while($row=mysqli_fetch_array($result)){
		                                	if($row[1]==$catrow[0])
		                            		echo '<option > '	.$row[2] .'</option>';
		                                }
		                                echo'</optgroup>';
		                                $result=mysqli_query($conn,$query);
                            }
                                ?>
                        </select>
                        <!-- <button style="width:5px; background-color: transparent; color: #1987ff">Chk</button> -->
                        <br>

                        
                      
                        
                        
                        <label for = "number">Quantity</label><br>
                        <input type="number" id="price" name="quan"  style="background: transparent;"><br>

                        

                        <input type="submit" value="Submit" id="submit">
                    </fieldset>
                </form>
				
				
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