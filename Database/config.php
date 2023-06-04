<!-- database config.php
$serverName="localhost";
$userName="root";
$password="";
$dbName="hotel"; -->
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hotel");
?>