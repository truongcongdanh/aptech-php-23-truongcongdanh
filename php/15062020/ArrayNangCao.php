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
        text-align: center;
    }
</style>
<body>
<?php 
    // $tenSp = ["coca","cafe","numberOne"];
    // $giaSp = [17,12,10];
    // $xuatSuSp = ["Use","vietnam","china"];
    $Product = [
        [
            "milkCoffee",
            17000,
            "America"
        ],
        [
            "lemon tea",
            12000,
            "Vietname"
        ],
        [
            "redbull",
            18000,
            "china"
        ]
    ];


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
        <!-- print product in table 1 -->
        <?php for($i = 0; $i < count($Product); $i++) {?>
            <tr>
                <td> <?php echo ($i +1); ?> </td>
                <td> <?php echo $Product[$i][0]; ?> </td>
                <td> <?php echo $Product[$i][1]; ?> </td>
                <td> <?php echo $Product[$i][2]; ?> </td>               
            </tr>
        <?php }?>
  
        <!-- print product in table advance -->
        <tr><td colspan="4">in product bằng 2 vòng lặp</td></tr>
        <?php for($i = 0; $i < count($Product); $i++) { ?>
            <tr>
                <td> <?php echo ($i +4); ?> </td>
                <?php for($n = 0; $n < count($Product[$i]); $n++) { ?>
                    <td> <?php echo $Product[$i][$n] ?> </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
   
    

    
</table>


</body>
</html>