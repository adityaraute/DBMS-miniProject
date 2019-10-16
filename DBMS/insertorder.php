
<?php

$tableno=$_POST['tableno'];
$items=$_POST['items'];
$quan=$_POST['quan'];

if(!empty($tableno) && !empty($items) && !empty($quan) && !empty($price)){
                       

    $conn=mysqli_connect("localhost","root","","restaurant");

    $query1="select * from items where NAME='$items'";
    $fetchedprice=$conn->query($query1);
    if($fetchedprice->num_rows==1){
        while($row=mysqli_fetch_array($fetchedprice)){
            $price=$row['PRICE'];
        }
    }
    $price=$price*$quan;

    $sql="insert into orders(QUANTITY,TOTAL,NAME,TABLENO) values('$quan','$price','$items','$tableno')";
    $result=$conn->query($sql);

    if($conn->query($sql)){
        header("Location: placeorder.php");
    }
    else{
        echo '
             <script type ="text/javascript">
             location="placeorder.php";
            alert("Invalid Crendentials");
         </script>';
    }
    $conn->close();
    }
else{
echo '
             <script type ="text/javascript">
             location="placeorder.php";
            alert("Fields should not be empty");
         </script>';

}
?>
