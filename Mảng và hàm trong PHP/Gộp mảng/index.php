<!DOCTYPE <!DOCTYPE html>
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
        $array1 = [1,7,2,4,4,8];
        $array2 = array(2,7,3,4,5,6);
        $array3 = $array1;
        $index = 0;
    for ($i = count($array1); $i < count($array1) + count($array2); $i++) {
        $array3[$i] = $array2[$index];
        $index++;
    }
        print_r($array3);
    ?>  

        
</body>
</html>