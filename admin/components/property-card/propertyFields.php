<li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-7" data-toggle="tooltip" title="Recámaras">
    <i class="fas fa-bed text-primary mr-2"></i> <?php echo $property["bedrooms"];?>
</li>
<li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-7" data-toggle="tooltip" title="Baños">
    <i class="fas fa-bath text-primary mr-2"></i> <?php echo $property["bathrooms"];?>
</li>
<li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-7" data-toggle="tooltip" title="Superficie Total">
    <i class="fas fa-expand text-primary mr-2"></i> <?php echo number_format($property["construction_size"]);?> m<sup>2</sup>
</li>
<?php if($property["garages"]):?>
<li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-7" data-toggle="tooltip" title="Estacionamientos">
    <i class="fas fa-warehouse text-primary mr-2"></i> <?php echo $property["garages"];?>
</li>
<?php endif;?>