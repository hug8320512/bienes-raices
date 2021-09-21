<?php /***** 
 THIS COMPONENT MUST HAVE ACCESS TO A $property VAR AND $Properties OBJECT
 ******/

 $url = "/propiedades/" . $Properties->getUrlFormat($property["title"]) . "-" . $property["id"];
$avoidPropertyCardGrid = $avoidPropertyCardGrid ?? false;
?>

<?php if(!$avoidPropertyCardGrid):?>
<div class="col-xxl-3 col-lg-4 col-md-6 mb-7 px-2 card-item">
<?php endif;?>
    <div class="box pb-7 pt-2 property-card">
        <div class="card shadow-hover-2" data-animate="fadeIn">

            <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <?php $Properties->renderMainPhoto($property);?>
                <a href="<?php echo $url;?>">
                    <div class="card-img-overlay p-2 d-flex justify-content-between">
                        <div class="badges">
                            <?php if($property["for_sale"]):?>
                                <span class="badge mr-2 badge-red">Venta</span>
                            <?php endif;?>

                            <?php if($property["for_rent"]):?>
                                <span class="badge mr-2 badge-primary">Renta</span>
                            <?php endif;?>
                        </div>
                        <?php if($property["is_exclusive"]):?>
                            <div class="featured-icon text-yellow mr-1"><i class="fas fa-star"></i></div>
                        <?php endif;?>
                    </div>
                </a>
            </div>

            <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0 one-line"><a href="<?php echo $url;?>" class="text-dark hover-primary"><?php echo $property["title"];?></a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2 one-line"><?php echo $property["address"];?></p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">

                    <?php if($Properties->isLand($property)) 
                        include("landFields.php");
                        else 
                        include("propertyFields.php");
                    ?>

                </ul>
            </div>

            <div class="card-footer bg-transparent d-flex flex-column justify-content-between align-items-center py-2">
                <?php include("price.php");?>
            </div>
        </div>
    </div>

<?php if(!$avoidPropertyCardGrid):?>
</div>
<?php endif;?>