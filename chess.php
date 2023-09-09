<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
</head>
<body>
    <table style="border:solid black;width:400px;height:400px;">
    <?php
    for($row=0;$row<8;$row++){
    echo"<tr>";
for($col=0;$col<8;$col++)
{
    $color=($row+$col)%2==0?'white':'black';
    echo"<td style='width:50px;height:50px;background-color:$color;'></td>";

}
echo"</tr>";
}
?>
</table>
</body>
</html>

