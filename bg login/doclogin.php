<?php
require('../databaseconnect.php');
// always remember that associative array is not printed under double quotes example 14th line
?>

        <?php
        $emailv=$_POST['emailv'];
        // fetching data from databse doctorlogin
        $searchquery="SELECT * FROM `doctorlogin` WHERE email='$emailv';"; //this gives the row.
        $result=mysqli_query($conn,$searchquery); //implementing search query and storing searches in result variable
        $assoresult=mysqli_fetch_assoc($result); //this converts the results of serach query into associative array and stores all the arrays into result
        // fetching data from databse doctorlogin
        $numm=mysqli_num_rows($result);
        // echo $assoresult['email']; correct way to print
        
         
        if($_POST['emailv']==$assoresult['email'])
        {
                                        $mdpass=$_POST['passv'];
                                if($assoresult['pass']==md5($mdpass))
                                            {   
                                                // taking session to admin page where it is required so no other can view via link
                                                session_start();
                                                $_SESSION['login']=true;
                                                $_SESSION['id']=$assoresult['name'];
                                                // taking session to admin page where it is required so no other can view via link
                                                            echo "
                                                            <script> alert('Login successfull.');
                                                            window.location.replace('../admin.php');
                                                            </script>
                                                            ";
                                            }
                                            else{
                                                echo "
                                                <script> alert('Entered password is wrong');
                                                window.location.replace('doclogin.html');
                                                </script>
                                                ";
                                            }

                            
        }
        else{
            echo "
                                                <script> alert('Your email is not registered with us');
                                                window.location.replace('index.php');
                                                </script>
                                                ";
        }
         
        ?>
            
