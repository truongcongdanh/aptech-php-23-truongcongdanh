<style>
    table {
        border-collapse: collapse;
    }
    td,th {
        border: 1px solid red;
        padding: 8px;
    }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Name, Pasword FROM aptech_php_23.data";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
    <table>
        <thead>
            <td>id</td>
            <td>name</td>
            <td>Password</td>
        </thead>
<?php
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
    <!-- echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " - Password: " . $row["Pasword"]. "<br>"; -->
    <tbody>
            <tr>
                <td>
                    <?php 
                        echo $row["ID"];
                    ?>
                </td>
                <td>
                    <?php 
                        echo $row["Name"];
                    ?>
                </td>
                <td>
                    <?php 
                        echo $row["Pasword"];
                    ?>
                </td>
            </tr>
    </tbody>
  <?php }
?>
<?php } 
else {
  echo "0 results";
}
$conn->close();
?>