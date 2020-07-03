
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
    .btnFS {
        float: left;
        padding-right: 150px;
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
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, ten, email FROM $dbname.data";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
<div class="btnFS">
<button><a href="formCreateData.html">Create a new user</a></button>
</div>
<form action="search.php" method="get">
    <input type="text" name="search" />
    <input type="submit" name="ok" value="search" />
</form>

<br>
    <table>
        <thead>
            <td>id</td>
            <td>name</td>
            <td>Password</td>
            <td>Action</td>
        </thead>
<?php
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
    <!-- echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " - Password: " . $row["Pasword"]. "<br>"; -->
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
                <?php echo "<button><a href='showData.php?id=".$row['id']."'>Show</a></button> ||" ?>
                    <?php echo "<button><a href='formUpdateData.php?id=".$row['id']."'>Update</a></button> ||" ?>
                    <?php echo "<button><a href='deleteData.php?id=".$row['id']."'>Delete</a></button>" ?>
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