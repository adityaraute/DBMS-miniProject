<?php

					// $custname=filter_input(INPUT_POST, 'uname');
                    // $custpass=filter_input(INPUT_POST, 'password');

                    $custname=$_POST['uname'];
                    $custpass=$_POST['password'];
                    
                   

					if(!empty($custname) && !empty($custpass)){
                       

                            $conn=mysqli_connect("localhost","root","","restaurant");

                            $sql="SELECT * from cashier where CaNAME='$custname' and CaPASS='$custpass'";
                            $result=$conn->query($sql);

                            if($result->num_rows==1){
                                header("Location: cashier.html");
                            }
                            else{
                                echo '
                                     <script type ="text/javascript">
                                     location="cashier.html";
                                    alert("Invalid Crendentials");
                                 </script>';
                            }
                            $conn->close();
                            }
                    else{
                        echo '
                                     <script type ="text/javascript">
                                     location="cashierAuth.html";
                                    alert("Fields should not be empty");
                                 </script>';

                    }

                    ?>
                    