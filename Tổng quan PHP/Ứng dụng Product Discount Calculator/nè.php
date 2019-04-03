<?php
    if(is_numeric($_POST['price']) && is_numeric($_POST['discount'])) {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $discount = $_POST['discount'];
            $result = $price * $discount * 0.01;
            $discountPrice = $price - $result;
        }
        echo "<div id='content'>";
        echo "<h1>Product Discount Calculator</h1>";
        echo "<label>Product Description: </label>";
        echo "<span>".$name."</span><br/>";
        echo "<label>Price: </label>";
        echo "<span>$".$price."</span><br/>";
        echo "<label>Discount Percent: </label>";
        echo "<span>".$discount."%</span><br/>";
        echo "<label>Discount Amount: </label>";
        echo "<span>$".$result."</span><br/>";
        echo "<label>Discount Price: </label>";
        echo "<span>$".$discountPrice."</span><br/>
        </div>";
    }
?>