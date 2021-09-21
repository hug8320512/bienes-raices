<?php
/***********************
Destination Card 
This template should receive $filename and $destination vars.
If file does not exist a default image will be shown
***********************/
$default        = $IMG_URL . "destinations/default.jpg";
$file_path      = $filename ? $IMG_PATH . "destinations/" . $filename . ".jpg" : null;
$destination    = $destination ?? null;

/* Chekin if filename exist */
$file_url = is_file($file_path) ? $IMG_URL . "destinations/" . $filename . ".jpg" : $default;
?>

<div class="box px-2" data-animate="fadeIn">
    <div class="card text-white bg-overlay-gradient-8 hover-zoom-in">
    <img src="<?php echo $file_url;?>" class="card-img" alt="<?php echo $destination;?>">
    <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
        <h2 class="card-title mb-0 fs-20 lh-182"><a href="/" class="text-white"><?php echo $destination;?></a></h2>
    </div>
    </div>
</div>

