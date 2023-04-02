<?php

use Edusp\ZipCode\Search;

include_once '../vendor/autoload.php';

$userRequest = new Search();



$coin = filter_input(INPUT_POST, 'coin');
$method = filter_input(INPUT_POST, 'method');


$getUrlParans = $userRequest->getUrlParans($coin, $method); 


if($method == "ticker")
{

    $low = $getUrlParans->ticker->low;
    $high = $getUrlParans->ticker->high;
    $last = $getUrlParans->ticker->last;
    $buy = $getUrlParans->ticker->buy;

    $low = number_format($low, 2, ',', '.');
    $high = number_format($high, 2, ',', '.');
    $last = number_format($last, 2, ',', '.');
    $buy = number_format($buy, 2, ',', '.');
}

if($method == "day-summary")
{



     $date = $getUrlParans['date'];
     $amount = $getUrlParans['amount'];
     $price = $getUrlParans['price'];

    
    // $amount = number_format($amount, 2, ',', '.');
    // $price = number_format($price, 2, ',', '.');
    // $type = number_format($type, 2, ',', '.'); 
    // $tid = number_format($tid, 2, ',', '.');
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="text-bg-dark p-3">
    <main action="./Request.php" method="post" class="container">
        <h1 class="d-flex justify-content-center fs-1 fw-light">Coin Value</h1>
        <br><br>
        <div class="p-3 mx-auto border border-warning text-white w-50 text-center">
            <h1 class="d-flex justify-content-center fs-4"><?php echo strtoupper($coin)?></h1><br>
            <h1 class="d-flex justify-content-center fs-4 fw-light">Resumo de operações executadas</h1>
            <br>
            <p class="fs-5">Valor mais baixo: &nbsp <?php echo $low?></p>
            <p class="fs-5">Valor mais alto: &nbsp <?php echo $high?></p>
            <p class="fs-5">Ultimo valor: &nbsp <?php echo $last?></p>
            <p class="fs-5">Valor de compra: &nbsp <?php echo $buy?></p>
            <br>
            <div class="text-center">
                <input type="submit" class="btn btn-outline-warning w-50 " value="Trade"></input>
            </div>
            <br>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>