
		<?php

					$custname=filter_input(INPUT_POST, 'n');
					$custnum=filter_input(INPUT_POST, 'no');

					if(!empty($custname)){
					if(!empty($custnum)){

					$conn=mysqli_connect("localhost","root","","restaurant");

					$sql="INSERT INTO customer (CNAME,CNUMBER) VALUES('$custname','$custnum')";

					if($conn->query($sql)){
						echo "New record inserted";
					}
					else{
						echo "record not inserted";
					}
					$conn->close();
					}

					else{
						echo "Customer number should not be empty ";
						die();
					}}
					else{
						echo "Customer name should not be empty";
						die();
					}
					?>
	