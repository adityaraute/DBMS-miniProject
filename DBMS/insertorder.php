
<?php

$tableno=$_POST['tableno'];
$items=$_POST['items'];
$quan=$_POST['quan'];



if(!empty($tableno) && !empty($items) && !empty($quan)){
                       

    $conn=mysqli_connect("localhost","root","","restaurant");

    $query1="select * from items where NAME='$items'";
    $fetchedprice=$conn->query($query1);
   
        $row=mysqli_fetch_array($fetchedprice);
            $price=$row[3];
        
    
    $price=$price*$quan;
    
    $sql="insert into orders(QUANTITY,TOTAL,NAME,TABLENO) values($quan,$price,'$items','$tableno')";
    

    if($conn->query($sql)){
        echo '
        <script type ="text/javascript">
        location="placeorder.php";
       alert("Order Placed ");
    </script>';
        
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
