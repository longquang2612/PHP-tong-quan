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
      $Number = array(-1,7,3,4,5,6);
      $Number1 = array(-2,5,4,8,7);
      function findMinNumber ($array){
      $min = $array[0];
      for ($i= 0;$i< count($array) ; $i++) {
          if ($array[$i] < $min  )
               $min = $array[$i] ;
      }
      return $min;
    }
    echo findMinNumber($Number1)."<br>";
    echo findMinNumber($Number);

      ?>
     
    
</body>
</html>