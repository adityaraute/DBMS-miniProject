<?php

$name=filter_input(INPUT_POST, 'name');
$password=filter_input(INPUT_POST, 'password');
$role=filter_input(INPUT_POST, 'role');

if($role=="waiter"){

if(!empty($name)||!empty($password)){

$conn=mysqli_connect("localhost","root","","restaurant");

$sql="INSERT INTO waiter (WNAME,WPASS) VALUES ('$name','$password')";

if($conn->query($sql)){
	echo "New record inserted";
}
else{
	echo "record not inserted";
}
$conn->close();
}
}



?>