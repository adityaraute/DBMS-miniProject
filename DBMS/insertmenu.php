					<?php

					$name=filter_input(INPUT_POST, 'name');
					$price=filter_input(INPUT_POST, 'price');
					$category=filter_input(INPUT_POST, 'category');

					if(!empty($name)||!empty($price)||!empty($category)){

					$conn=mysqli_connect("localhost","root","","restaurant");

					$sql="INSERT INTO items (CATEGORY,NAME,PRICE) VALUES('$category','$name','$price')";

					if($conn->query($sql)){
						header("Location: editmenu.html");
   						exit;
					}
					else{
						echo "record not inserted";
					}
					$conn->close();
					}
					else if(empty($name)||empty($price)||empty($category)){
						echo '
                                     <script type ="text/javascript">
                                      alert("Fields empty");
                                     location="editmenu.html";
                                   
                                 </script>';
					}

					
					?>
	