<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23_04";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$id = $_GET['id'];
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, ten, email FROM $dbname.data WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
 while($row = $result->fetch_assoc()) {
    ?> 
        <form action="updateData.php" method="GET">
        Id: <input type="text" name="dayLaId" value="<?php echo $row['id']; ?>"><br>
        Name: <input type="text" name="dayLaName" value="<?php echo $row['ten']; ?>"><br>
        E-mail: <input type="text" name="dayLaEmail" value="<?php echo $row['email']; ?>"><br>
        <input type="submit" value="Update">
        </form>
    <?php
 }
} else {
  echo "0 results";
}
$conn->close();
?>