<?php

					// $custname=filter_input(INPUT_POST, 'uname');
                    // $custpass=filter_input(INPUT_POST, 'password');

                    $custname=$_POST['uname'];
                    $custpass=$_POST['password'];
                    
                    

					if(!empty($custname) && !empty($custpass)){
                       

                            $conn=mysqli_connect("localhost","root","","restaurant");

                            $sql="SELECT * from waiter where WNAME='$custname' and WPASS='$custpass'";
                            $result=$conn->query($sql);

                            if($result->num_rows==1){
                                header("Location: waiter.html");
                            }
                            else{
                                echo '
                                     <script type ="text/javascript">
                                     location="waiterlogin.html";
                                    alert("Invalid Crendentials");
                                 </script>';
                            }
                            $conn->close();
                            }
                    else{
                        echo '
                                     <script type ="text/javascript">
                                     location="waiterlogin.html";
                                    alert("Fields should not be empty");
                                 </script>';

                    }

                    ?>
                    