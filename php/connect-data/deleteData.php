<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23_04";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$id = $_GET['id'];
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM $dbname.data WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  include "showTableData.php";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

// mysqli_close($conn);
?>