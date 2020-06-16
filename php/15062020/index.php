<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    th {
        border: 1px solid red;
        padding: 8px;
    }
</style>
<body>
<?php 
    $tenSp = ["coca","cafe","numberOne"];
    $giaSp = [17,12,10];
    $xuatSuSp = ["America","vietnam","china"];


echo $tenSp[0];
?>

<table>
    <thead>
        <tr>
            <th><?php echo "Stt"; ?></th>
            <th><?php echo "Tên"; ?></th>
            <th><?php echo "Giá"; ?></th>
            <th><?php echo "NSX"; ?></th>
        </tr>
    </thead>

    <tbody>
    <tr>
        <th><?php echo "1"; ?></th>
        <th><?php echo $tenSp[0]; ?></th>
        <th><?php echo $giaSp[0]; ?></th>
        <th><?php echo $xuatSuSp[0]; ?></th>
    </tr>
    
    <tr>
        <th><?php echo "2"; ?></th>
        <th><?php echo $tenSp[1]; ?></th>
        <th><?php echo $giaSp[1]; ?></th>
        <th><?php echo $xuatSuSp[1]; ?></th>
    </tr>

    <tr>
        <th><?php echo "3"; ?></th>
        <th><?php echo $tenSp[2]; ?></th>
        <th><?php echo $giaSp[2]; ?></th>
        <th><?php echo $xuatSuSp[2]; ?></th>
    </tr>

    </tbody>
    

    
</table>


</body>
</html>