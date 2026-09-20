<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp";

$conn = new mysqli($servername,$username,$password,$dbname);

if (!$conn) {
    echo "Not connected";
} else {
    echo "Connected";
}
?>
