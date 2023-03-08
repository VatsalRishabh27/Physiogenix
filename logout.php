<?php
require("databaseconnect.php");
 //6th connection logout page  
?>

<?php
session_start();
session_unset();
session_destroy();
header("Location:bg login/doclogin.html");
?>