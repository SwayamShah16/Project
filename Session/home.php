<?php 
include 'db.php';
session_start();
echo $_SESSION['name'];
?>
<a href="logout.php">Logout</a> 
