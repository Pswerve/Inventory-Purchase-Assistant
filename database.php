<?php
$hostName = "sql110.epizy.com";
$userName = "epiz_32897073";
$password = "JJ6c7V4tE3hzBU";
$databaseName = "epiz_32897073_purchase_panel";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
