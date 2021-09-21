<?php
ini_set("display_errors", 1);
require_once("../../../admin/classes/class.properties.php");
$Properties = Properties::createInstance();

$filters = $Properties->getFilters();
$sortBy = $Properties->getSortBy();





$referer = $_SERVER["HTTP_REFERER"];
$url = basename(parse_url($referer, PHP_URL_PATH));



/* DETECT IF THE REQUEST COMES FROM A PROPERTY CATEGORY (example: https://example.com/departamentos), IF SO ADD IT TO THE $filter["type"] ARRAY */
$ispropertyType = $Properties->isValidPropertyType($url);
if($ispropertyType) {
    $filters["type"] = $url;
}

/* Handle operation, (forRent and forSale) so we can run the query properly */
if(strpos($url, "propiedades-en-venta") !== false) {
    $filters["operation"] = "venta";
}

if(strpos($url, "propiedades-en-renta") !== false) {
    $filters["operation"] = "renta";
}


$properties = $Properties->search($filters, $sortBy);


if($properties) {
    foreach($properties as $property) : ?>
        <?php include("../../../admin/components/property-card/index.php"); ?>
    <?php    
    endforeach;
} else {
    include("../../../admin/components/no-properties-found/index.php");
}


