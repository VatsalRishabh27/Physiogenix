<?php
require('../databaseconnect.php');

?>





<?php
        $therapistname=$_POST['therapistname'];
        $therapistemail=$_POST['therapistemail'];
        $therapistnumber=$_POST['therapistnumber'];
        $therapistpass=$_POST['therapistpass'];
        $therapistcpass=$_POST['therapistcpass'];
        

        $searchquery="SELECT * FROM `doctorlogin` WHERE email='$therapistemail';"; //this gives the row.
        $result=mysqli_query($conn,$searchquery); //implementing search query and storing searches in result variable
        $assoresult=mysqli_fetch_assoc($result); //this converts the results of serach query into associative array and stores all the arrays into result
        
        $totalrows=mysqli_num_rows($result); //total rows obtained out of search


            if($totalrows==0){

                if($therapistpass==$therapistcpass){
                    // hashing the password and cpass before entring it into database
                    $therapistpass=md5($therapistpass);
                    $therapistcpass=md5($therapistcpass);
                    $registraiton="INSERT INTO `doctorlogin` ( `name`, `email`, `number`, `pass`, `cpass`) VALUES ( '$therapistname', '$therapistemail', '$therapistnumber', '$therapistpass', '$therapistcpass');";
                    mysqli_query($conn,$registraiton);

                    echo "
                    <script> alert('Congratulations! You have been successfully registered.');
                    window.location.replace('doclogin.html');
                    </script>
                    ";
                }
                else{
                    echo "
                    <script> alert('Password and confirm Password dont match'); </script>
                    ";
                }
                
            }
            else{
                echo "
                <script> alert('Entered email alredy in use'); </script>
                ";
            }
           
            ?>