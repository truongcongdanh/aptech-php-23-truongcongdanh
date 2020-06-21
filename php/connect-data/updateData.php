<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23_04";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['dayLaId'];
$ten = $_GET['dayLaName'];
$email = $_GET['dayLaEmail'];

$sql = "UPDATE $dbname.data SET ten='$ten',email='$email' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  include "showTableData.php";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

// mysqli_close($conn);
?>
