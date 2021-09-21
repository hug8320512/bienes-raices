<?php /* WE SHOUD HAVE ACCESS TO $Developments object and $development var */

$cardImage = "/images/defaults/development.jpg";
$url = "/desarrollos/" . $Developments->getUrlFormat($development['title'] . "-" . $development['id']);

if($development['gallery']) {
    $cardImage = $development['gallery'][0]['file'];
}
?>

<div class="col-xl-4 col-md-6 col-sm-12 mb-20">
    <div class="swiper-slide development-card">
        <div class="development-card-image">
            <a href="<?php echo $url;?>"><img src="<?php echo $cardImage;?>" alt=""></a>
            <a class="development-car-title" href="<?php echo $url;?>"><?php echo $development["title"];?></a>
        </div>
        <div class="development-card-content">
            <?php if($development["available_properties"]):?>
                <h3><?php echo $development["available_properties"] == 1 ? $development["available_properties"] . " PROPIEDAD DISPONIBLE" : $development["available_properties"] . " PROPIEDADES DISPONIBLES";?></h3>
            <?php endif;?>
            <?php if($development["starting_at"]):?>
                <p>Desde <?php echo "$".number_format($development["starting_at"]) . " " . $development["starting_at_currency"] ?></p>
            <?php endif;?>
            <a class="blue" href="<?php echo $url;?>">VER DETALLES</a>
        </div>
    </div>
</div>
                             