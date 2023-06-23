<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $price = 100;
    $vat = 0.21;
    function CalculateVat($price, $vat)
    {
        $calculatedPrice = ($price * $vat) + $price;
        return $calculatedPrice;
    }
    echo "Price is $price <br>";
    echo "Vat is $vat <br>";
    echo "Total Price is ". CalculateVat($price,$vat);
    ?>
</body>

</html>