<?php
$price_sale     = $property["price_sale"] ?? NULL;
$price_per_m2   = $property["price_per_m2"] ?? NULL;
$price_rent     = $property["price_rent"] ?? NULL;

$currency_sale      = $property["currency_sale"] ?? "MXN";
$currency_per_m2    = $property["currency_per_m2"] ?? "MXN";
$currency_rent      = $property["currency_rent"] ?? "MXN";

$default_price = "Solicitar precio";

if($property["for_sale"]) {

    if($price_sale)
        $default_price = "$" . number_format($price_sale) . " " . $currency_sale;
    elseif($price_per_m2)
        $default_price = "$" . number_format($price_per_m2) . " " . $currency_per_m2;

    echo "<p class='fs-17 font-weight-bold text-heading mb-0 ml-auto'>$default_price</p>";
}

if($property["for_rent"]) {

    if($price_rent) {
        $formatted_price = "$" . number_format($price_rent) . " " . $currency_rent;
        echo "<p class='fs-17 font-weight-bold text-heading mb-0 ml-auto'>$formatted_price / mes</p>";
    } else {
        if(!$property["for_sale"]) {
            echo "<p class='fs-17 font-weight-bold text-heading mb-0 ml-auto'>$default_price</p>";
        }
    }
}