<?php

include './Home.php';


$coin = filter_input(INPUT_POST, 'coin');
$method = filter_input(INPUT_POST, 'method');


if($method == "ticker")
{
    echo '<script>window.location.replace("./requestTicker.php")</script>';
};

?>