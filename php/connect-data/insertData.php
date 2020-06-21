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
$ten = $_POST['dayLaName'];
$email = $_POST['dayLaEmail'];

$sql = "INSERT INTO $dbname.data (ten,email)
VALUES ('$ten', '$email')";

if (mysqli_query($conn, $sql)) {
  include 'showTableData.php';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);
?>