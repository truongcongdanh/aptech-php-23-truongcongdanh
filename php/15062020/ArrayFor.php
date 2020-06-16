<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop for in Array</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    td,th {
        border: 1px solid red;
        padding: 8px;
    }
</style>
<body>
<?php 
    $tenSp = ["coca","cafe","numberOne"];
    $giaSp = [17,12,10];
    $xuatSuSp = ["America","vietnam","china"];


// echo $tenSp[0];
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
        <?php for($i = 0; $i < count($tenSp); $i++) {?>
            <tr>
                <td> <?php echo ($i +1); ?> </td>
                <td> <?php echo $tenSp[$i]; ?> </td>
                <td> <?php echo $giaSp[$i]; ?> </td>
                <td> <?php echo $xuatSuSp[$i]; ?> </td>
            </tr>
        <?php }?>
    </tbody>
    

    
</table>


</body>
</html>