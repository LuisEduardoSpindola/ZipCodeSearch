<?php

use Edusp\ZipCode\Search;

include_once '../vendor/autoload.php';

$userRequest = new Search();
$getBitCoinValue = $userRequest->getUrlParans('BTC','ticker'); 
$getEthereumValue = $userRequest->getUrlParans('ETH','ticker'); 

    $bitCoinVol = $getBitCoinValue->ticker->vol;
    $bitCoinHigh = $getBitCoinValue->ticker->high;
    $bitCoinLast = $getBitCoinValue->ticker->last;
    $bitCoinBuy = $getBitCoinValue->ticker->buy;

    $ethereumVol = $getEthereumValue->ticker->vol;
    $ethereumHigh = $getEthereumValue->ticker->high;
    $ethereumLast = $getEthereumValue->ticker->last;
    $ethereumBuy = $getEthereumValue->ticker->buy;

    $bitCoinVol = number_format($bitCoinVol, 2, ',', '.');
    $bitCoinHigh = number_format($bitCoinHigh, 2, ',', '.');
    $bitCoinLast = number_format($bitCoinLast, 2, ',', '.');
    $bitCoinBuy = number_format($bitCoinBuy, 2, ',', '.');


    $ethereumVol = number_format($ethereumVol, 2, ',', '.');
    $ethereumHigh = number_format($ethereumHigh, 2, ',', '.');
    $ethereumLast = number_format($ethereumLast, 2, ',', '.');
    $ethereumBuy = number_format($ethereumBuy, 2, ',', '.');


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

    <style>
        .form-control:focus {
            border-color: yelVol;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(195, 228, 73, 0.5);
        }
    </style>

    <form action="./Request.php" method="post" class="container">
        <h1 class="d-flex justify-content-center fs-1" style="font-weight: 200;">Coin Value</h1>
        <br><br>

        <div class="row g-3 align-items-center d-flex justify-content-center">
            <input type="text" name="coin" class="form-control text-center w-50 p-2 h-25 d-inline-block" aria-describedby="passwordHelpInline" placeholder="Coin or Token">
        </div>
        <br><br>
        <div class="row g-3 align-items-center d-flex justify-content-center">
            <select name="method" class="form-control text-center w-50 d-inline-block form-select">
                <option value="ticker">Ticker</option>
            </select>
        </div>

        <br><br>

        <div class="text-center">
            <input type="submit" class="btn btn-outline-warning w-25" value="Search"></input>
        </div>
    </form>
    <br><br><br>
    <main>

        <div class="p-3 mb-2 border border-warning align-items-center navbar">
            <img src="./assets/bitcoin.png" class="img-fluid" style="width: 100px;">
            <p class="fs-4 fw-lighter">Volume: &nbsp <?php echo $bitCoinVol?></p>
            <p class="fs-4 fw-lighter">Valor de compra: &nbsp <?php echo 'R$ ' . $bitCoinLast?></p>
            <p class="fs-4 fw-lighter">Valor mais alto: &nbsp <?php echo $bitCoinHigh?></p>&nbsp
        </div><br>

        <div class="p-3 mb-2 border border-warning align-items-center navbar">
            <img src="./assets/ethereum.png" class="img-fluid" style="width: 100px;">
            <p class="fs-4 fw-lighter">Volume: &nbsp <?php echo $ethereumVol?></p>
            <p class="fs-4 fw-lighter">Valor de Compra: &nbsp <?php echo 'R$ ' . $ethereumLast?></p>
            <p class="fs-4 fw-lighter">Valor mais alto: &nbsp <?php echo $ethereumHigh?></p>&nbsp
        </div><br>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>