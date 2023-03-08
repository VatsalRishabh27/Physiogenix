<?php
include('databaseconnect.php');
// database connection number 2
?>

<?php
session_start();
if($_SESSION['login']==true){
    if(isset($_SESSION['id'])){
        
    }
    else{
        header("location:bg login/doclogin.html");
    }
}
else{
    header("location:bg login/doclogin.html");
}
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
  <a href="#">Date wise Bookings</a>
  <input type="date" name="" id="">
  <a href="index.html">home</a>
  <a href="logout.php">Logout</a>
</nav>
<!--   end navbar -->

<div id="menu-btn" class="fas fa-bars"></div>

</header>
<!-- end header -->

<!-- start home -->
<section id="home" class="home">
<div class="content">
                                                                        <!-- table -->
<?php
$select1="SELECT * FROM `patientdata`;";
$alldata=mysqli_query($conn,$select1);
$alldatalist=mysqli_fetch_assoc($alldata);
?>
                                                                        <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Pid</th>
                                                                <th>Name</th>
                                                                <th>number</th>
                                                                <th>Disease</th>
                                                                <th>Payment Status</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            while($alldatalist=mysqli_fetch_assoc($alldata)){

                                                    
                                                                echo " 
                                                                <tr>
                                                                <td>$alldatalist[pid]</td>
                                                                <td>$alldatalist[pname]</td>
                                                                <td>$alldatalist[pnumber]</td>
                                                                <td>$alldatalist[pdisease]</td>
                                                                <td>$alldatalist[paddress]</td>
                                                                </tr>
                                                                ";
                                                            }
                                                        
                                                            ?>
                                                           
                                                        </tbody>
                                                    </table>

<?php

?>
                                                                                                            <!-- table css below -->
                                                                                                                                <style>
                                                                                                                                    table {
                                                                                table-layout: fixed;
                                                                                border-collapse: collapse;
                                                                                margin: 0 auto;
                                                                                border: 1px solid #eee;
                                                                                background:white;
                                                                            }

                                                                            thead {
                                                                                background-color: #fff;
                                                                                box-shadow: inset 0px -1px 0px #eee, 
                                                                                            0px 5px 5px -5px rgba(0,0,0,.1);
                                                                                position: relative;
                                                                            }
                                                                            thead tr {
                                                                                display: block;
                                                                                position: relative;
                                                                            }

                                                                            td:nth-child(1), 
                                                                            th:nth-child(1){
                                                                                min-width: 200px;
                                                                            }
                                                                            td:nth-child(2),
                                                                            th:nth-child(2) {
                                                                                min-width: 200px;
                                                                            }

                                                                            th, td {
                                                                                padding: 5px;
                                                                                text-align: left;
                                                                            }

                                                                            tbody {
                                                                                display: block;
                                                                                overflow: auto;
                                                                                width: 100%;
                                                                                height: calc(100vh - 50px);
                                                                            }
                                                                            tbody tr:nth-child(2n) {
                                                                                background-color: #dddddd;
                                                                            }
                                                                                                                                </style>
                                                                                                            <!-- table css above -->
                                                                        <!-- table -->

  

</div>

<div class="content">
    <div class="box-container">
        <h1 class="heading">Welcome Dr. <?php echo $_SESSION['id'];?> here is the list of your today's patient</h1>
    </div>
    
</div>
</section>

<!--Above is nav bar layout with today it hurts moto -->

    <div class="pricing">
        
        
    </div>












</div>
</section>

<!-- end pricing plan -->



</body>
</html>