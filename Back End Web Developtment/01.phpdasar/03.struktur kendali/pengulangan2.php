<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <!-- <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
        <td>1,5</td>
    </tr>
    <tr>
        <td>2,1</td>
        <td>2,2</td>
        <td>2,3</td>
        <td>2,4</td>
        <td>2,5</td>
    </tr>
    <tr>
        <td>3,1</td>
        <td>3,2</td>
        <td>3,3</td>
        <td>3,4</td>
        <td>3,5</td>
    </tr> -->
    <?php
    for( $i = 1; $i <= 3; $i++ ) {
        print "<tr>";
        for( $j = 1; $j <= 5; $j++) {
            print "<td>$i,$j</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
    
</body>
</html>