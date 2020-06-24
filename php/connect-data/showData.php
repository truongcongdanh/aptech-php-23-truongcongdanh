<style>
    table {
        border-collapse: collapse;
    }
    td,th {
        border: 1px solid red;
        padding: 8px;
    }
    a {
        text-decoration: none;
    }
</style>
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

if ($result->num_rows > 0) { ?>
<button><a href="showTableData.php">Home</a></button>
<br> <br>
  <table>
        <thead>
            <td>id</td>
            <td>name</td>
            <td>Password</td>
            <td>Action</td>
        </thead>
  <?php
 while($row = $result->fetch_assoc()) {
    ?> 
      <tbody>
            <tr>
                <td>
                    <?php 
                        echo $row["id"];
                    ?>
                </td>
                <td>
                    <?php 
                        echo $row["ten"];
                    ?>
                </td>
                <td>
                    <?php 
                        echo $row["email"];
                    ?>
                </td>
                <td>
                    <?php echo "<button><a href='formUpdateData.php?id=".$row['id']."'>Update</a></button> ||" ?>
                    <?php echo "<button><a href='deleteData.php?id=".$row['id']."'>Delete</a></button>" ?>
                </td>
            </tr>
    </tbody>
    <?php
 }
} else {
  echo "0 results";
}
$conn->close();
?>