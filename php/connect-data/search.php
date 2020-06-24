<html>
    <head>
        <title>Demo Search Basic by freetuts.net</title>
    </head>
             
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
    <body>
       
        <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                include 'showTableData.php';
                echo "Ô tìm kiếm rỗng,mời bạn nhập dữ liệu!"."<br><br>";
            } 
            else
            {



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

$sql = "SELECT id, ten, email FROM $dbname.data WHERE ten like '%$search%'";
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
    include 'showTableData.php';
    echo 'không tìm thấy tên {'.$_GET['search'].'} trong table'."<br><br>";
}
// $conn->close();

            }
        }
        ?>   
    </body>
</html>