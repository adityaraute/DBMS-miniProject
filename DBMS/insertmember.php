<?php

$name=filter_input(INPUT_POST, 'name');
$password=filter_input(INPUT_POST, 'password');
$role=filter_input(INPUT_POST, 'role');

if($role=="waiter"){

		if(!empty($name)||!empty($password)){

		$conn=mysqli_connect("localhost","root","","restaurant");

		$sql="INSERT INTO waiter (WNAME,WPASS) VALUES ('$name','$password')";

		if($conn->query($sql)){
			echo '	<script type="text/javascript">
				alert("Record Inserted");
				location="addmembers.html";
				</script>';
		}
		else{
			echo '	<script type="text/javascript">
				alert("Record Not Inserted");
				location="addmembers.html";
				</script>';
		}
		$conn->close();
		}
}
if($role=="cashier"){

	if(!empty($name)||!empty($password)){

	$conn=mysqli_connect("localhost","root","","restaurant");

	$sql="INSERT INTO cashier (CaNAME,CaPASS) VALUES ('$name','$password')";

	if($conn->query($sql)){
		
		
		echo '	<script type="text/javascript">
				alert("Record Inserted");
				location="addmembers.html";
				</script>';
		
	}
	else{
		echo '	<script type="text/javascript">
				alert("Record Not Inserted");
				location="addmembers.html";
				</script>';
	}
	$conn->close();
	}
}


?>