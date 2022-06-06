<?php

$fitem = $_POST["fitem"];
$quantity = $_POST["quantity"];

if(!$quantity) {
    http_response_code(400); exit;
}else{
    function showOrder($fitem, $quantity) {
        echo "<h1>Order successful! Here is what you ordered:</h1><br>";
        $quantity_value = intval($quantity);

        for($i = 0; $i < $quantity_value; $i++) {
            if($fitem == "cookie") {
                echo "<img src='../images/cookie.jpg' style='max-width:30vw;'>";
            }
        }
    }
    showOrder($fitem, $quantity);
}

    

