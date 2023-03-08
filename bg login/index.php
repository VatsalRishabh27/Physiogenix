<?php
require('../databaseconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Physiogenix Login</title>

</head>
<body>
        <form action="register.php" method="POST">
                                        <div class="box">
                                            <div class="container">

                                                <div class="top">
                                                   
                                                    <header>Physiogenix Registration </header>
                                                </div>

                                                <div class="input-field">
                                                    <input type="text" class="input" placeholder="Enter your Username" id="" name="therapistname">
                                                    <i class='bx bx-user' ></i>
                                                </div>

                                                <div class="input-field">
                                                    <input type="email" class="input" placeholder="Enter your email" id="" name="therapistemail">
                                                    <i class='bx bx-user' ></i>
                                                </div>

                                                <div class="input-field">
                                                    <input type="mob" class="input" placeholder="Enter your mobile number" id="" name="therapistnumber">
                                                    <i class='bx bx-user' ></i>
                                                </div>

                                                <div class="input-field">
                                                    <input type="Password" class="input" placeholder="Enter your Password" id="" name="therapistpass">
                                                    <i class='bx bx-lock-alt'></i>
                                                </div>

                                                <div class="input-field">
                                                    <input type="Password" class="input" placeholder=" Confirm Password" id="" name="therapistcpass">
                                                    <i class='bx bx-lock-alt'></i>
                                                </div>

                                                <div class="input-field">
                                                    <input type="submit" class="submit" value="Register Yourself" id="">
                                                </div>

                                                <div class="two-col">
                                                    <div class="one">
                                                    <label><a href="doclogin.html">Login Page</a></label>
                                                    </div>
                                                    <div class="two">
                                                        <label><a href="#">Forgot password?</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
            </form> 

            
</body>
</html>