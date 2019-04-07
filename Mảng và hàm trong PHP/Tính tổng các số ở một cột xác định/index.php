<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
$array = array(
    array(3,2,1,4),
    array(3,2,1,4),
    array(3,2,1,4),
    array(4,5,6,3));
$total = 0;
for ($i = 0;$i< 4;$i++){
    for($j=0;$j < 4;$j++)
        if($j == 0)
            $total = $total + $array[$i][$j];}
echo $total;
?>
    
</body>
</html>