<?php 
    if (isset ($_POST['submit1'])) {
    for($i=0; $i < 5; $i++){
        for($j=0; $j < 20; $j++){
            echo " * ";
        }
        echo "<br>";
    }
}
    echo "<br><br><br>";
    if (isset ($_POST ['submit2'])) {
    for ($i = 5; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo " * ";
        }
        echo "<br>";
    }
}
    if (isset ($_POST['submit3'])) {
        for ($i = 1; $i <= 5 ; $i ++){
            for( $j = 1 ; $j <= 5-$i; $j ++) {
         echo "&nbsp;";
        }
            for($k = 1; $k <=$i ; $k++){
            echo "*&nbsp;";}
        echo "<br>";
        }
    }