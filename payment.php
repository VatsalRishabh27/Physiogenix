<?php
session_start();
include('databaseconnect.php');
// database connection number 1

$fname=$_POST['clientfname'];
$lname=$_POST['clientlname'];
$email=$_POST['email'];
$number=$_POST['number'];
$location=$_POST['location'];

// query to insert the client data into database
$query="INSERT INTO `physiogenix` ( `fname`, `lname`, `email`, `number`, `location`) VALUES ( '$fname', '$lname', '$email', '$number', '$location');";
mysqli_query($conn,$query);

echo "<script> alert('your appointment is booked now'); </script>";
?>


<!-- this is for email api -->
<?php
$_SESSION['to']=$email;
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
$_SESSION['number']=$number;
$_SESSION['location']=$location;
echo "
<script>
window.location.replace('email/main.php');
</script>

";
?>
<!-- this is for email api -->
<?php
echo "Hello Aarav";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- link css and javascript  -->
<link rel="stylesheet" href="index css.css">
<script src="index javascript.js"></script>
<link rel="shortcut icon" href="Physiogenix.jpeg" type="image/x-icon">
<!-- link css and javascript  -->
</head>
<link rel="shortcut icon" href="Physiogenix.jpeg" type="image/x-icon">
<body>
<header class="header">

<!--   start logo -->
<a href="#" class="logo">
  <i class="fas fa-tooth"></i>
  Physiogenix
</a>

<!--   start navbar -->
<nav class="navbar">
  <a href="index.html">home</a>
  <a href="#about">about</a>
  <a href="#services">services</a>
  <a href="#blog">Gymnasium</a>
</nav>
<!--   end navbar -->
<a href="" class="btn">make appointment</a>
<div id="menu-btn" class="fas fa-bars"></div>

</header>
<!-- end header -->

<!-- start home -->
<section id="home" class="home">

<div class="content">

  <h3>Today It Hurts Tomorrow It Works.</h3>
  <p>To provide our patients with a thorough examination and assessment: to accurately diagnose their injury, whilst providing a caring, effective and efficient treatment regime</p>
  <a href="#" class="btn">make appointment</a>

</div>

</section>
<!-- end home -->






      
    <!--       end member card-->

    <!--       start member card -->
    

      
    <!--       end member card-->

 

</section>

<!-- end team section -->

<!-- pricing plan -->
<section id="pricing" class="pricing">

<h1 class="heading" class="btn">pricing plan</h1>



</section>

<!-- end pricing plan -->



</body>
</html>